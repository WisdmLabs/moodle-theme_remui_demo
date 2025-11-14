#!/bin/bash

# Set the parent directory where you want to start.
parent_dir="/var/www/instances"

# Path to the JSON file
json_file="/var/www/instances.json"

# Function to check if instance exists in JSON
check_instance_exists() {
    local instance_name="$1"
    local json_file="$2"
    
    # Use jq to properly parse JSON and check if instance exists anywhere in the JSON
    if command -v jq &> /dev/null; then
        # Search recursively through the entire JSON structure for any instancename field
        if jq -e --arg name "$instance_name" '.. | objects | select(has("instancename")) | select(.instancename == $name)' "$json_file" &> /dev/null; then
            return 0  # Instance found anywhere in JSON
        else
            return 1  # Instance not found anywhere in JSON
        fi
    else
        # Fallback to grep if jq is not available (less reliable)
        # Search for the instance name anywhere in the file
        if grep -q "\"instancename\":\"$instance_name\"" "$json_file"; then
            return 0  # Instance found
        else
            return 1  # Instance not found
        fi
    fi
}

# Loop through all directories under the parent directory
for dir in "$parent_dir"/*; do
    if [ -d "$dir" ]; then
        # Check if the directory name is present in the JSON file
        dir_name=$(basename "$dir")
        
        if check_instance_exists "$dir_name" "$json_file"; then
            echo "Skipping directory: $dir_name (found in JSON file)"
        else
            echo "Processing directory: $dir_name ($dir)"
            # Concatenate the directory path with the desired string.
            command="bash /var/www/manage_demo_hosts.sh delete $dir_name"
            echo "Executing: $command"
            # Execute the command.
            $command
            echo "Sleeping for 1 seconds"
            sleep 1
        fi
    fi
done

echo "Script completed. All directories processed."




####################
# # Set the parent directory where you want to start.
# parent_dir="/var/www/instances"

# # URL of the JSON file
# json_url="https://demo.tryremui.edwiser.org/backupcdn/instances.json"

# # Download the JSON file
# json_file="instances.json"
# curl -s "$json_url" -o "$json_file"

# # Loop through all directories under the parent directory
# for dir in "$parent_dir"/*; do
#     if [ -d "$dir" ]; then
#     # Check if the directory name is present in the JSON file
#         dir_name=$(basename "$dir")
#         if grep -q "\"instancename\":\"$dir_name\"" "$json_file"; then
#             echo "$now Skipping directory: $dir_name (found in JSON file)"
#         else
#             echo "Processing directory: $dir_name ($dir)"
#             # Concatenate the directory path with the desired string.
#             command="bash /var/www/manage_remui_hosts.sh delete $dir_name" 
#             # Execute the command.
#             $command
#         fi
#     fi
# done
