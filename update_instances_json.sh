#!/bin/bash

# Simple script to add "type": "remui" to all instances in instances.json

json_file="/var/www/instances.json"
backup_file="/var/www/instances.json.backup.$(date +%Y%m%d_%H%M%S)"

echo "Updating instances.json to add type field..."

# Create backup
cp "$json_file" "$backup_file"
echo "Backup created: $backup_file"

# Use jq to add type field to all instances
if command -v jq &> /dev/null; then
    # Add type to instances array
    jq '.instances[] += {"type": "remui"}' "$json_file" > "$json_file.tmp"
    
    # Add type to inuse array (if instances don't have type)
    jq '.inuse[] += {"type": "remui"}' "$json_file.tmp" > "$json_file"
    
    # Clean up temp file
    rm "$json_file.tmp"
    
    echo "Successfully updated instances.json"
    echo "Added 'type': 'remui' to all instances"
else
    echo "Error: jq is not installed. Please install jq first."
    echo "On Ubuntu/Debian: sudo apt-get install jq"
    exit 1
fi

echo "Done!"
