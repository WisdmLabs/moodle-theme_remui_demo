#!/bin/bash

# Read the instances.json file
instances=$(cat /var/www/instances.json)

# Extract the instance names from the JSON data
instance_names=$(echo "$instances" | grep -oP '(?<="instancename":")[^"]*')

# Loop through each instance name
for instance_name in $instance_names; do
    # Check if the instance directory exists
    if [ -d "/var/www/instances/$instance_name" ]; then
        echo "Instance directory exists: /var/www/instances/$instance_name"
    else
        # echo "Instance directory does not exist: /var/www/instances/$instance_name"

        command="bash /var/www/manage_remui_hosts.sh create $instance_name" 
        echo "Creating: $command"
        # Execute the command.
        $command
	    echo "Sleeping for 1 seconds"
        sleep 1
    fi
done
