SERVER REQUIREMENT

    Server required as per moodle requirements - https://moodledev.io/general/releases/4.2

    - OS - Ubuntu
        Need sudo user access.
    - Mysql - 8.0
        Need user with privilege to create new database and import databases.
    - Php
        PHP version: minimum PHP 8.0.0
        PHP extension sodium is required.
        PHP extension exif is recommended.
        PHP setting max_input_vars must be >= 5000. For further details, see Environment - max input vars.
        PHP variants: Only 64-bit versions of PHP are supported. Note: Changed since 4.1.
    - Pre setup - Web server virtual hosts configurations


COMMANDS to follow.

*
    Go to tmp directory

        Command - cd /tmp

*
    Download Installer

        Command - wget https://demo.tryremui.edwiser.org/backupcdn/importer.zip

*
    Extract Installer

        Command - unzip importer.zip

*
    Go to Importer Directory

        Command - cd importer

*
    Download Moodle Backup Files

        Command - bash download_backup.sh

*
    Run Moodle Site Setup

        Command - bash setup_demo.sh
