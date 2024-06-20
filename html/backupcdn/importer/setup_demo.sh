#!/bin/bash

mysqlclient=mysql_client

dbsqlfile='tr_db.sql'
fileszip='tr_files.zip'
datazip='tr_data.zip'


# ********************************
# Validate backup files are exist.
# ********************************

	# Checks whether file exists - CheckFileExist FILENAME
	CheckFileExist() {
		if [ ! -f $1 ];then
			echo "File - $1 does not exist! Make sure you have backup files ready."
			echo "Run - bash download_backup.sh"
			exit 1
		fi
	}

	# Checks whether directory exists - CheckFileExist DIRNAME
	CheckDirExists() {
		if [ ! -d $1 ]; then

			if [ $2 -eq 1 ]
			then
				# Create directory if not available.
				mkdir -p $1;
			else

				echo "Directory $1 does not exist."
				exit 1
			fi
		fi
	}

	# Check if tr_files.zip
	CheckFileExist $fileszip

	# Check if tr_data.zip
	CheckFileExist $datazip

	# Check if tr_files.zip
	CheckFileExist $dbsqlfile

# ***********************
# Collect required input.
# ***********************

	read -p "Enter Website address to be (Default: localhost/moodle):" domain
	echo ""

	if [ "$domain" == "" ]; then
		# Default directory path if not set.
		domain="localhost"
	fi

	read -p "${domain}, does it have ssl certificates installed (y/n)?" ssl

	if [[ "$ssl" != "y" ]]
	then
		http="http\://"
	else
		http="https\://"
	fi

	echo ""

	# Read Site html directory path.
	read -p "Enter moodle html path (Default: /var/www/html/moodle) :" mpath
	echo ""


	if [ "$mpath" == "" ]; then
		# Default directory path if not set.
		mpath="/var/www/html/moodle"
	fi

	# Read site moodle data directory path.
	read -p "Enter moodle data directory path (Default: /var/www/mdata) :" mdpath
	echo ""

	if [ "$mdpath" == "" ]; then
		# Default directory path for moodledata.
		mdpath="/var/www/mdata"
	fi

	# if [ ! -e $mdpath ]; then
	# 	# Create directory if not available.
	# 	mkdir -p $mdpath
	# fi

	# Get DB Username
	while true; do

		read -p "Enter Database name (Required):" dbname
		echo ""

		if [[ "$dbname" != "" ]]
		then
			break;
		fi

	done


	# Get DB Username
	while true; do

		read -p "Enter Database username (Required):" dbuser
		echo ""

		if [[ "$dbuser" != "" ]]
		then
			break;
		fi

	done


	# Get DB Password
	while true; do

		read -p "Enter Database password (Required):" dbpass
		echo ""

		if [[ "$dbpass" != "" ]]
		then
			break;
		fi

	done
	newdomain="${http}${domain}"

	echo "Please confirm the paths before proceeding,"
	echo "  1] Domain - $newdomain"
	echo "  2] Moodle Public - $mpath"
	echo "  3] Moodle Data directory - $mdpath"
	echo "  4] Database name - $dbname"
	echo "  5] $database username - $dbuser"
	echo "  6] $database password - $dbpass"
	read -p "Enter "yes" to proceed, press any other key to cancel." confirm

	if [[ "$confirm" != "yes" ]]
	then
		# Cancel if no confirmation.
		echo "Aborting!"
		exit
	fi
	echo ""
# *****************
# Restore DB files.
# *****************

	dbsqlfile='tr_db.sql'
	mysqlClient='mysql_client'

	CheckFileExist $dbsqlfile
	# Setting database default to mysql only.
	database="mysql"

	case $database in
	mysql)

		if test -f ${mysqlclient}
		then
			rm ${mysqlclient}
		fi

		# Prepare mysql database configuration.
		cp mysql_client_backup $mysqlclient
		chmod 777 $mysqlclient
		sed -ie "s/kuser/$dbuser/g" $mysqlclient
		sed -ie "s/kpassword/$dbpass/g" $mysqlclient
		chmod 644 $mysqlclient

		#Create database.
		echo "Creating database ${dbname}"
		query="create database ${dbname}"
		echo $query | mysql --defaults-extra-file=$mysqlClient

		if [ $? -ne 0 ]
		then
		  exit 1
		fi

		sed -i "s,//tryremui.edwiser.org/,//$domain/,g" $dbsqlfile
		sed -i "s,//remui.edwiser.org/schoolv2, //$domain/,g" $dbsqlfile

		# echo "Restoring database..."
		mysql --defaults-extra-file=$mysqlClient $dbname < $dbsqlfile
		echo "Database creation Successful!";;

	*)
		echo "Select Database. Exiting!"
		exit 1;;
	esac

# *******************
# Restore Demo files.
# *******************

	owner=$(who am i | awk '{print $1}')

	type zip > /dev/null 2>&1 && zippresent="yes" || zippresent="no"

	# Install zip if not available.
	if [ "$zippresent" == "no" ]
	then
		echo "Installing zip"
		apt-get install zip -y
	fi


	# Removing html directory.
	echo "Extracting demo files..."

	# Extract html files
	unzip -q tr_files.zip

	# Extract data directory.
	unzip -q tr_data.zip

	echo "Files extrated successfully!"

	# Uninstall zip it was not installed earlier.
	if [ "$zippresent" == "no" ]
	then
		echo "Uninstalling zip"
		apt-get purge zip -y
	fi

	# Check if directory path is present. If not, Create directory.
	CheckDirExists $mpath 1
	CheckDirExists $mdpath 1

	# Copy files to their respective directory.
	echo "Copying the files..."
	cp -r tr_files/* $mpath
	cp -r tr_data/* $mdpath

	echo "Files Copied!"

	echo "Updating file permissions"
	if [ "$owner" == "" ]; then
		chmod -R 755 $mpath
		chown -R ubuntu:www-data $mpath
		chmod -R 777 $mdpath
		chown -R ubuntu:www-data $mdpath
	else
		chmod -R 755 $mpath
		chown -R $owner:www-data $mpath
		chmod -R 777 $mdpath
		chown -R www-data:www-data $mdpath
	fi
	echo "File permissions updated"

	echo "Removing unzipped backup files."
	rm -r tr_data
	rm -r tr_files
	rm mysql_client
	rm mysql_cliente

# ****************************
# Update moodle configuration.
# ****************************

	#olddomain="https\://tryremui.edwiser.org"
	#olddbname="tryremuidb"
	#olddbuser="root"
	#olddbpass="qazqwe321"
	#olddbtype="mysqli"
	#oldmdpath="/var/www/tryremui/moodledata"

	# olddomain="https\://tryremui.edwiser.org"
	olddomain="https\://tryremui.edwiser.org/client"

	# olddbname="tryremuidb"
	olddbname="tryremuiclient"

	olddbuser="root"
	olddbpass="qazqwe321"
	olddbtype="mysqli"

	# oldmdpath="/var/www/tryremui/moodledata"
	oldmdpath="/var/www/tryremui/mdclient"
	
	# Update config file



	sed -i  "s:$olddomain:$newdomain:g" ${mpath}/config.php
	sed -ie "s:$olddbname:$dbname:g" ${mpath}/config.php
	sed -ie "s:$olddbuser:$dbuser:g" ${mpath}/config.php
	sed -ie "s:$olddbpass:$dbpass:g" ${mpath}/config.php
	sed -ie "s:$oldmdpath:$mdpath:g" ${mpath}/config.php

php8.0 ${mpath}/admin/cli/purge_caches.php

echo "Moodle Setup success!"
echo "Site - ${newdomain}"
echo ""
echo "Username - admin"
echo "Password - Edwiser0-"
