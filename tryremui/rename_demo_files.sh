#!/bin/bash

# Simple Demo File Renaming Script with Array Structure

# Demo type to prefix mapping - easy to add new types
declare -A DEMO_PREFIXES=(
    ["main"]="tr"
    ["client"]="tr"
    ["vcfmain"]="vcf"
    ["maingr"]="gr"
    ["vcfmaingr"]="vcfgr"
    # Add more demo types here:
    # ["newdemo"]="nd"
    # ["anotherdemo"]="ad"
)

# Check if demo type is provided
if [[ -z "$1" ]]; then
    echo "Usage: $0 <demo_type>"
    echo "Demo types available:"
    for demo_type in "${!DEMO_PREFIXES[@]}"; do
        echo "  $demo_type -> ${DEMO_PREFIXES[$demo_type]}"
    done
    exit 1
fi

# Get prefix for demo type
demo_type="$1"
prefix="${DEMO_PREFIXES[$demo_type]}"

# Check if demo type is valid
if [[ -z "$prefix" ]]; then
    echo "Error: Invalid demo type '$demo_type'"
    echo "Valid demo types: ${!DEMO_PREFIXES[*]}"
    exit 1
fi

echo "Renaming files for demo type: $demo_type (prefix: $prefix)"

# Rename files
if [[ -f "tr_files.zip" ]]; then
    sudo mv tr_files.zip ${prefix}_files.zip
    echo "Renamed: tr_files.zip -> ${prefix}_files.zip"
fi

if [[ -f "tr_data.zip" ]]; then
    sudo mv tr_data.zip ${prefix}_data.zip
    echo "Renamed: tr_data.zip -> ${prefix}_data.zip"
fi

if [[ -f "tr_db.sql" ]]; then
    sudo mv tr_db.sql ${prefix}_db.sql
    echo "Renamed: tr_db.sql -> ${prefix}_db.sql"
fi

echo "Done!"
