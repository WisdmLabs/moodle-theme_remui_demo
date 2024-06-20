#!/bin/bash

# To enable login-path use following command
#     - mysql_config_editor set --login-path=mylogin --host=localhost --user=root --password
# script parameters
action=$1
domain=$2
#firstname=$3
#lastname=$4
#email=$5
#password=$6
# expirehours=$3
# echo $action
# echo $domain
# echo expirehours

dbsqlfile='tr_db.sql'
files='tr_files'
fileszip='tr_files.zip'
data='tr_data'
datazip='tr_data.zip'

olddomain="tryremui.edwiser.org/main"
olddomainregx="tryremui.edwiser.org\/main"
newdomain="instances.tryremui.edwiser.org/${domain}"
newdomainregx="instances.tryremui.edwiser.org\/${domain}"
olddbname="tryremuimain"
olddataroot="/var/www/tryremui/mdmain"

dbname=$domain
owner=$(who am i | awk '{print $1}')
# echo $owner;

# sitesEnable='/etc/nginx/sites-enabled/'
# sitesAvailable='/etc/nginx/sites-available/'

# templateVH='/var/www/demo/donotdelete.edwiser.org'

loginpath='tryremuilogin'

userDir='/var/www/instances'
# rootDir=$userDir${domain//./}
rootDir=$userDir/$domain
# echo $userDir
# echo $rootDir

dataroot="$rootDir/moodledata"

mysqlClient='/var/www/demo/mysql_client'

if [ "$action" != 'create' ] && [ "$action" != 'delete' ] && [ "$action" != 'domain_exists' ]
then
	echo "Invalid action";
	exit 0;
fi

while [ "$domain" == "" ]
do
	echo "Domain name can not be empty";
	exit 0;
done

#Create new site directory.
if [ "$action" == "create" ]; then
	### check if domain already exists
	# if [ -e $sitesAvailable$newdomain ]; then
	# 	echo "Domain name already is used.";
	# 	exit 0;
	# fi

	# default='tryremui.edwiser.org'
	# html='html'

	# echo $rootDir/html;

	mkdir $rootDir;
	# mkdir -p $rootDir/html
	mkdir -p $rootDir/moodledata

	if [ ! -e $rootDir ]; then
		echo "Root directory creation failed."
        exit 0;
	fi
	if [ ! -e $rootDir/moodledata ]; then
		echo "Data directory creation failed."
		exit 0;
	fi

	# copy moodle files and import database to trial site
	unzip -q $userDir/$fileszip -d $rootDir

	mv $rootDir/$files/* $rootDir
	rm -r $rootDir/$files

	unzip -q $userDir/$datazip -d $rootDir/moodledata
	mv $rootDir/moodledata/$data/* $rootDir/moodledata
	rm -r $rootDir/moodledata/$data

	#Create database.
	query="create database ${dbname}"
	echo $query | mysql --defaults-extra-file=$mysqlClient
	# sudo mysql --login-path=$loginpath -e "CREATE DATABASE $dbname"
	# mysql -u root -pqazwer321 -e "CREATE DATABASE $dbname"

	#Store the database backup.
	cp $userDir/$dbsqlfile $userDir/$dbname.sql
	#sed -i "s:/tryremui.edwiser.org/:/$newdomain/:g" $userDir/$dbname.sql
	sed -ie  "s:$olddomain:$newdomain:g" $userDir/$dbname.sql
	sed -ie  "s:$olddomainregx:$newdomainregx:g" $userDir/$dbname.sql
	
	# sed -i "s,\\/\\/tryremui.edwiser.org\,//$newdomain/,g" $userDir/$dbname.sql
	sed -ie "s:/remui.edwiser.org/schoolv2/:/$newdomain/:g" $userDir/$dbname.sql

	mysql --defaults-extra-file=$mysqlClient $dbname < $userDir/$dbname.sql
	rm $userDir/$dbname.sql
	rm $userDir/${dbname}.sqle
	# sudo mysql --login-path=$loginpath $dbname < $userDir/$dbsqlfile

	#Create site config
	# cp $templateVH $sitesAvailable$newdomain

	# #Update site config.change root directory
	# sed -i "s,/var/www/instances/tryremui/html,$rootDir/html,g" $sitesAvailable$newdomain

	# #Change Domain name.
	# sed -i "s/$olddomain/$newdomain/g" $sitesAvailable$newdomain

	#sed -i "s,letsencrypt/live/$newdomain,letsencrypt/live/tryremui.edwiser.org,g" $sitesAvailable$newdomain

	# #Add ssl block
	# sed -i "s,#replace,ssl_certificate /etc/letsencrypt/live/tryremui.edwiser.org/fullchain.pem; # managed by Certbot \nssl_certificate_key /etc/letsencrypt/live/tryremui.edwiser.org/privkey.pem; # managed by Certbot,g" $sitesAvailable$newdomain

	# Generate certificate.
	#certbot --nginx -d $domain.tryremui.edwiser.org
	# echo "2" | certbot --nginx -d $domain.tryremui.edwiser.org

	#Create short link, for site config.
	# ln -nsf "$sitesAvailable$newdomain" "$sitesEnable$newdomain"

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

	#Update config file
	sed -ie "s:$olddomain:$newdomainregx:g" ${rootDir}/config.php
	sed -ie "s:$olddbname:$dbname:g" ${rootDir}/config.php
	sed -ie "s:$olddataroot:$dataroot:g" ${rootDir}/config.php

	# /usr/bin/php7.4 ${rootDir}/admin/tool/replace/cli/replace.php --search=//tryremui.edwiser.org/ --replace=//$newdomain/ --shorten --non-interactive > /var/www/log.txt
	#echo "Replaced "
	#echo $olddomain
	#echo " With"
	#echo $newdomain


	/usr/bin/php7.4 ${rootDir}/admin/cli/purge_caches.php > /dev/null

	### show the finished message
	echo -e $"Complete! \nYou now have a new Virtual Host \nYour new host is: https://$newdomain \nAnd its located at $rootDir"
	exit 1;
elif [ "$action" == "delete" ]; then
	### check whether domain already exists
	# if ! [ -e $sitesAvailable$newdomain ]; then
	# 	echo -e $"Domain not notexists."
	# 	exit 0;
	# else
	# 	### disable website
	# 	rm $sitesEnable$newdomain
	# 	### Delete virtual host rules files
	# 	rm $sitesAvailable$newdomain
	# fi
	### check if directory exists or not
	if [ -d $rootDir ]; then
		rm -rf $rootDir
	fi
	# echo "drop database $dbname" | mysql --defaults-extra-file=$mysqlClient
	echo "DROP DATABASE $dbname" | mysql --defaults-extra-file=$mysqlClient
	### show the finished message
	### restart nginx
	# service nginx reload

	echo -e $"Complete!\nYou just removed Virtual Host $newdomain"

	exit 1;
elif [ "$action" == "domain_exists" ]; then
	if ! [ -e $sitesAvailable$newdomain ]; then
		echo "Domain name available.";
		exit 1;
	else
		echo 'Domain name is already in use try another.';
		exit 0;
	fi

else
	echo "Invalid action command.";
	exit 0;
fi
