# rm -r tr_files tr_files.zip
# rm -r tr_data tr_data.zip

if [ $# -eq 0 ]
then
    echo "No arguments supplied"
    exit 1
fi

site=$1

cp -r html/$site tr_files
cp -r md$site tr_data

zip -r tr_files.zip tr_files
zip -r tr_data.zip tr_data

mysqldump --defaults-extra-file=/var/www/demo/mysql_client tryremui$site > tr_db.sql

rm -r tr_files tr_data
