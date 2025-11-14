#!/bin/bash

# Read the instances.json file
instances=$(cat /var/www/instances.json)
demo_types_file="/var/www/demo_types.json"

# Function to validate demo type
validate_demo_type() {
    local demo_type=$1
    if [ -f "$demo_types_file" ]; then
        if jq -e ".$demo_type" "$demo_types_file" > /dev/null 2>&1; then
            return 0
        else
            return 1
        fi
    else
        # If demo_types.json doesn't exist, assume remui is valid
        if [ "$demo_type" = "remui" ]; then
            return 0
        else
            return 1
        fi
    fi
}

# Function to check if instance exists anywhere in JSON (generalized like deletemanually.sh)
check_instance_exists_in_json() {
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

# Function to get demo type for an instance from anywhere in JSON
get_demo_type_from_json() {
    local instance_name="$1"
    local json_file="$2"
    
    if command -v jq &> /dev/null; then
        # Search recursively through the entire JSON structure for the instance and get its type
        local demo_type=$(jq -r --arg name "$instance_name" '.. | objects | select(has("instancename")) | select(.instancename == $name) | .type // empty' "$json_file" 2>/dev/null)
        echo "$demo_type"
    else
        # Fallback to grep if jq is not available (less reliable)
        # This is a simplified approach that may not work for all cases
        local demo_type=$(grep -A 10 -B 2 "\"instancename\":\"$instance_name\"" "$json_file" | grep "\"type\":" | head -1 | sed 's/.*"type":"\([^"]*\)".*/\1/')
        echo "$demo_type"
    fi
}

# Get all instance names from anywhere in the JSON (generalized approach)
if command -v jq &> /dev/null; then
    # Use jq to get all instancename fields from anywhere in the JSON structure
    instance_names=$(echo "$instances" | jq -r '.. | objects | select(has("instancename")) | .instancename' 2>/dev/null)
else
    # Fallback: extract from instances array only (less reliable)
    instance_names=$(echo "$instances" | jq -r '.instances[].instancename' 2>/dev/null)
fi

# Check if we got any instance names
if [ -z "$instance_names" ]; then
    echo "No instances found in JSON file or jq not available"
    exit 1
fi

echo "Found instances in JSON: $instance_names"

# Loop through each instance name
for instance_name in $instance_names; do
    # Skip empty lines
    if [ -z "$instance_name" ]; then
        continue
    fi
    
    # Check if the instance directory exists
    if [ -d "/var/www/instances/$instance_name" ]; then
        echo "Instance directory exists: /var/www/instances/$instance_name"
    else
        echo "Instance directory does not exist: /var/www/instances/$instance_name"

        # Get demo type from anywhere in JSON for this instance (generalized)
        demo_type=$(get_demo_type_from_json "$instance_name" "/var/www/instances.json")
        
        # If demo type is empty, default to remui
        if [ -z "$demo_type" ]; then
            demo_type="remui"
            echo "Demo type not found for $instance_name, defaulting to remui"
        fi
        
        # Validate the demo type
        if validate_demo_type "$demo_type"; then
            echo "Using demo type: $demo_type for $instance_name"
        else
            echo "Warning: Invalid demo type '$demo_type' for $instance_name, using remui instead"
            demo_type="remui"
        fi
        
        command="bash /var/www/manage_demo_hosts.sh create $instance_name $demo_type" 
        echo "Creating: $command"
        # Execute the command.
        $command
        echo "Sleeping for 1 seconds"
        sleep 1
    fi
done
