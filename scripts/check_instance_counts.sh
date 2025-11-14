#!/bin/bash

# Instance Count Checker Script
# Shows current vs required instance counts without creating anything

# Configuration
instances_file="/var/www/instances.json"
demo_types_file="/var/www/demo_types.json"

# Required instance counts
declare -A required_counts
required_counts["remui"]=10
required_counts["videoformatdemo"]=5
required_counts["pagebuilderdemo"]=5

# Function to get current instance count for a type
get_instance_count() {
    local demo_type=$1
    jq -r ".instances[] | select(.type==\"$demo_type\") | .instancename" "$instances_file" | wc -l
}

# Function to get current instance count for a type (only from instances array, not subtracting inuse)
get_available_instance_count() {
    local demo_type=$1
    jq -r ".instances[] | select(.type==\"$demo_type\") | .instancename" "$instances_file" | wc -l
}

# Function to show instance details
show_instance_details() {
    local demo_type=$1
    echo "  Instances:"
    jq -r ".instances[] | select(.type==\"$demo_type\") | \"    - \(.instancename) (created: \(.timecreation))\"" "$instances_file" 2>/dev/null || echo "    - None"
}

# Main execution
main() {
    echo "=== Instance Count Checker ==="
    echo "Required counts:"
    for demo_type in "${!required_counts[@]}"; do
        echo "  $demo_type: ${required_counts[$demo_type]}"
    done
    echo ""
    
    echo "Current status:"
    local total_needed=0
    
    for demo_type in "${!required_counts[@]}"; do
        local current_count=$(get_available_instance_count "$demo_type")
        local required_count=${required_counts[$demo_type]}
        local needed=$((required_count - current_count))
        
        if [ $needed -gt 0 ]; then
            echo "  ❌ $demo_type: $current_count/${required_counts[$demo_type]} (need $needed more)"
            total_needed=$((total_needed + needed))
        elif [ $needed -lt 0 ]; then
            echo "  ⚠️  $demo_type: $current_count/${required_counts[$demo_type]} ($((current_count - required_count)) extra)"
        else
            echo "  ✅ $demo_type: $current_count/${required_counts[$demo_type]} (correct count)"
        fi
        
        show_instance_details "$demo_type"
        echo ""
    done
    
    if [ $total_needed -gt 0 ]; then
        echo "📊 SUMMARY: Need to create $total_needed total instances"
        echo "💡 Run './maintain_instances.sh' to create missing instances"
    else
        echo "🎉 All demo types have the required number of instances!"
    fi
}

# Check if required files exist
if [ ! -f "$instances_file" ]; then
    echo "Error: instances.json not found at $instances_file"
    exit 1
fi

if [ ! -f "$demo_types_file" ]; then
    echo "Error: demo_types.json not found at $demo_types_file"
    exit 1
fi

# Check if jq is available
if ! command -v jq &> /dev/null; then
    echo "Error: jq is required but not installed"
    exit 1
fi

# Run main function
main
