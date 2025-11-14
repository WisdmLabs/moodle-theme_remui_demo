#!/bin/bash

# Generalized Demo Host Management Script
# Supports multiple demo types: remui, videocourseformat, etc.

# To enable login-path use following command
#     - mysql_config_editor set --login-path=mylogin --host=localhost --user=root --password

# Script parameters
action=$1
domain=$2
demo_type=$3

# Configuration file
config_file="/var/www/demo_types.json"

# Validate parameters
if [ "$action" != 'create' ] && [ "$action" != 'delete' ] && [ "$action" != 'domain_exists' ]; then
    echo "Invalid action. Use: create, delete, or domain_exists";
    exit 1;
fi

if [ "$domain" == "" ]; then
    echo "Domain name cannot be empty";
    exit 1;
fi

# Demo type is only required for create operations
if [ "$action" == 'create' ] && [ "$demo_type" == "" ]; then
    echo "Demo type cannot be empty for create operations";
    exit 1;
fi

# Load demo type configuration only for create operations
if [ "$action" == 'create' ]; then
    if [ ! -f "$config_file" ]; then
        echo "Configuration file not found: $config_file";
        exit 1;
    fi

    # Extract configuration for the specified demo type
    demo_config=$(cat "$config_file" | jq -r ".$demo_type")

    if [ "$demo_config" == "null" ] || [ "$demo_config" == "" ]; then
        echo "Demo type '$demo_type' not found in configuration";
        exit 1;
    fi

    # Parse configuration
    base_url=$(echo "$demo_config" | jq -r '.base_url')
    base_url_regex=$(echo "$demo_config" | jq -r '.base_url_regex')
    database_name=$(echo "$demo_config" | jq -r '.database_name')
    data_root=$(echo "$demo_config" | jq -r '.data_root')
    db_sql_file=$(echo "$demo_config" | jq -r '.files.db_sql')
    files_zip=$(echo "$demo_config" | jq -r '.files.files_zip')
    data_zip=$(echo "$demo_config" | jq -r '.files.data_zip')
    files_dir=$(echo "$demo_config" | jq -r '.files.files_dir')
    data_dir=$(echo "$demo_config" | jq -r '.files.data_dir')
fi

# Set up variables
newdomain="instances.tryremui.edwiser.org/${domain}"
newdomainregx="instances.tryremui.edwiser.org\/${domain}"
dbname=$domain
owner=$(who am i | awk '{print $1}')

loginpath='tryremuilogin'
userDir='/var/www/instances'
rootDir=$userDir/$domain
dataroot="$rootDir/moodledata"
mysqlClient='/var/www/demo/mysql_client'

# Define sitesAvailable for domain_exists check (keeping for compatibility)
# Note: This was used in the old script for nginx configuration
# The new script doesn't create nginx configs, but keeps this for domain_exists check
sitesAvailable='/etc/nginx/sites-available/'

if [ "$action" == "create" ]; then
    echo "Creating demo instance for type: $demo_type"
elif [ "$action" == "delete" ]; then
    if [ -n "$demo_type" ]; then
        echo "Deleting demo instance for type: $demo_type"
    else
        echo "Deleting demo instance"
    fi
fi

echo "Domain: $newdomain"
echo "Database: $dbname"

# Create new site directory
if [ "$action" == "create" ]; then
    # Create directories
    mkdir -p $rootDir
    mkdir -p $rootDir/moodledata

    if [ ! -e $rootDir ]; then
        echo "Root directory creation failed."
        exit 1;
    fi
    if [ ! -e $rootDir/moodledata ]; then
        echo "Data directory creation failed."
        exit 1;
    fi

    # Copy moodle files and import database to trial site
    unzip -q $userDir/$files_zip -d $rootDir
    echo "Sleeping for 0.1 seconds"
    sleep 0.1

    mv $rootDir/$files_dir/* $rootDir
    rm -r $rootDir/$files_dir

    unzip -q $userDir/$data_zip -d $rootDir/moodledata
    mv $rootDir/moodledata/$data_dir/* $rootDir/moodledata
    rm -r $rootDir/moodledata/$data_dir
    
    echo "Sleeping for 0.1 seconds"
    sleep 0.1

    # Create database
    query="create database ${dbname}"
    echo $query | mysql --defaults-extra-file=$mysqlClient

    # Store the database backup
    cp $userDir/$db_sql_file $userDir/$dbname.sql

    # Sleep for 1 seconds
    echo "Sleeping for 1 seconds"
    sleep 1

    # Replace domain references in SQL file
    sed -ie "s:$base_url:$newdomain:g" $userDir/$dbname.sql
    sed -ie "s:$base_url_regex:$newdomainregx:g" $userDir/$dbname.sql
    # Additional replacement for specific paths (from old script)
    sed -ie "s:/remui.edwiser.org/schoolv2/:/$newdomain/:g" $userDir/$dbname.sql
    echo "Sleeping for 1 seconds"
    sleep 1

    # Import database
    mysql --defaults-extra-file=$mysqlClient $dbname < $userDir/$dbname.sql
    echo "Sleeping for 1 seconds"
    sleep 1

    # Clean up temporary files
    rm $userDir/$dbname.sql
    rm $userDir/${dbname}.sqle

    # Set permissions
    if [ "$owner" == "" ]; then
        chmod -R 755 $rootDir
        chown -R ubuntu:www-data $rootDir
        chmod -R 777 $rootDir/moodledata
        chown -R ubuntu:www-data $rootDir/moodledata
    else
        chmod -R 755 $rootDir
        chown -R $owner:www-data $rootDir
        chmod -R 777 $rootDir/moodledata
        chown -R www-data:www-data $rootDir/moodledata
    fi
    
    echo "Sleeping for 0.1 seconds"
    sleep 0.1

    # Update config file
    sed -ie "s:$base_url_regex:$newdomainregx:g" ${rootDir}/config.php
    sed -ie "s:$database_name:$dbname:g" ${rootDir}/config.php
    sed -ie "s:$data_root:$dataroot:g" ${rootDir}/config.php

    # Purge caches
    /usr/bin/php8.3 ${rootDir}/admin/cli/purge_caches.php > /dev/null
    echo "Sleeping for 1 seconds"
    sleep 1

    # Show completion message
    echo -e $"Complete! \nYou now have a new $demo_type demo instance \nYour new host is: https://$newdomain \nAnd its located at $rootDir"
    exit 0;

elif [ "$action" == "delete" ]; then
    # Check if directory exists
    if [ -d $rootDir ]; then
        rm -rf $rootDir
    fi
    echo "Sleeping for 1 seconds"
    sleep 1

    # Drop database
    echo "DROP DATABASE $dbname" | mysql --defaults-extra-file=$mysqlClient
    echo "Sleeping for 1 seconds"
    sleep 1

    # Show completion message
    if [ -n "$demo_type" ]; then
        echo -e $"Complete!\nYou just removed $demo_type demo instance $newdomain"
    else
        echo -e $"Complete!\nYou just removed demo instance $newdomain"
    fi
    exit 0;

elif [ "$action" == "domain_exists" ]; then
    if ! [ -e $sitesAvailable$newdomain ]; then
        echo "Domain name available.";
        exit 0;
    else
        echo 'Domain name is already in use try another.';
        exit 1;
    fi

else
    echo "Invalid action command.";
    exit 1;
fi 