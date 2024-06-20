
if test -f tr_data.zip
then
	echo "removingfiles"
	rm ./tr_data.zip
fi

if test -f tr_files.zip
then
	rm ./tr_files.zip
fi

if test -f tr_db.sql
then
	rm ./tr_db.sql
fi

wget --no-check-certificate https://demo.tryremui.edwiser.org/backupcdn/gr_data.zip

wget --no-check-certificate https://demo.tryremui.edwiser.org/backupcdn/gr_files.zip 

wget --no-check-certificate https://demo.tryremui.edwiser.org/backupcdn/gr_db.sql

mv gr_data.zip tr_data.zip
mv gr_files.zip tr_files.zip
mv gr_db.sql tr_db.sql
