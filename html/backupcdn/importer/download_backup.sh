
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

wget --no-check-certificate https://demo.tryremui.edwiser.org/backupcdn/tr_data.zip

wget --no-check-certificate https://demo.tryremui.edwiser.org/backupcdn/tr_files.zip 

wget --no-check-certificate https://demo.tryremui.edwiser.org/backupcdn/tr_db.sql
