#!/bin/bash

# Set the parent directory where you want to start.
parent_dir="/var/www/instances"

# URL of the JSON file
json_url="https://demo.tryremui.edwiser.org/backupcdn/instances.json"

# Download the JSON file
json_file="instances.json"
curl -s "$json_url" -o "$json_file"

# Loop through all directories under the parent directory
for dir in "$parent_dir"/*; do
    if [ -d "$dir" ]; then
    # Check if the directory name is present in the JSON file
        dir_name=$(basename "$dir")
        if grep -q "\"instancename\":\"$dir_name\"" "$json_file"; then
            echo "$now Skipping directory: $dir_name (found in JSON file)"
        else
            echo "Processing directory: $dir_name ($dir)"
            # Concatenate the directory path with the desired string.
            command="bash /var/www/manage_remui_hosts.sh delete $dir_name" 
            # Execute the command.
            $command
        fi
    fi
done

# Clean up the downloaded JSON file.
# rm "$json_file"
