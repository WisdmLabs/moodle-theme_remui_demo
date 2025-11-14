<?php
/**
 * Instance Maintenance Script
 * Maintains required number of instances for each demo type
 * Follows the exact same pattern as InstanceManager.php
 */

// Configuration
$instances_file = '/var/www/instances.json';
$demo_types_file = '/var/www/demo_types.json';

// Required instance counts
$required_counts = [
    'remui' => 10,
    'videoformatdemo' => 5,
    'pagebuilderdemo' => 5
];

/**
 * Load instances from JSON file
 */
function get_instances_from_json($file) {
    if (!file_exists($file)) {
        return null;
    }
    return json_decode(file_get_contents($file), true);
}

/**
 * Write instances to JSON file
 */
function write_instances_to_json($file, $data) {
    return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

/**
 * Load demo type configuration
 */
function get_demo_type_config($demo_type) {
    global $demo_types_file;
    
    if (!file_exists($demo_types_file)) {
        return null;
    }
    
    $config = json_decode(file_get_contents($demo_types_file), true);
    return isset($config[$demo_type]) ? $config[$demo_type] : null;
}

/**
 * Generate demo name following InstanceManager.php pattern
 */
function generate_demo_name($str) {
    $stringlimit = 6;
    $flag = true;
    $dname = substr(hash("sha256", $str), 0, $stringlimit);

    for($i = 0; $i < $stringlimit; $i++) {
        if (!is_numeric($dname[$i])) {
            $flag = false;
            if ($dname[$i] == 'e') {
                $randomChar = chr(rand(97,122));
                $dname[$i] = $randomChar;
            }
        }
    }

    if ($flag) {
        $randomChar = chr(rand(97,122));
        $dname[0] = $randomChar;
    }

    return $dname;
}

/**
 * Check if instance name already exists
 */
function instance_name_exists($name, $all_instances) {
    // Check in instances array
    if (isset($all_instances['instances'])) {
        foreach ($all_instances['instances'] as $instance) {
            if (isset($instance['instancename']) && $instance['instancename'] === $name) {
                return true;
            }
        }
    }
    
    // Check in inuse array
    if (isset($all_instances['inuse'])) {
        foreach ($all_instances['inuse'] as $instance) {
            if (isset($instance['instancename']) && $instance['instancename'] === $name) {
                return true;
            }
        }
    }
    
    return false;
}

/**
 * Generate unique instance name
 */
function generate_unique_instance_name($all_instances) {
    $max_attempts = 100;
    $attempts = 0;
    
    while ($attempts < $max_attempts) {
        $name = generate_demo_name('tryremui' . time() . $attempts);
        
        if (!instance_name_exists($name, $all_instances)) {
            return $name;
        }
        
        $attempts++;
    }
    
    return null;
}

/**
 * Add new instance following InstanceManager.php pattern
 */
function add_new_instance_by_type($demo_type, &$all_instances) {
    $demo_config = get_demo_type_config($demo_type);
    if (!$demo_config) {
        return false;
    }
    
    $demoname = generate_unique_instance_name($all_instances);
    if (!$demoname) {
        return false;
    }
    
    $demourl = "instances.tryremui.edwiser.org/" . $demoname;
    
    $newdata = [
        "email" => 'test@xyz.com',
        "instancename" => $demoname,
        "instanceurl" => $demourl,
        "timecreation" => '00000000',
        "timedeletion" => '00000000',
        "type" => $demo_type
    ];
    
    $all_instances['instances'][] = $newdata;
    return $newdata;
}

/**
 * Get current instance count for a demo type
 */
function get_instance_count($demo_type, $all_instances) {
    if (!isset($all_instances['instances'])) {
        return 0;
    }
    
    $count = 0;
    foreach ($all_instances['instances'] as $instance) {
        $instance_type = isset($instance['type']) ? $instance['type'] : 'remui';
        if ($instance_type === $demo_type) {
            $count++;
        }
    }
    
    return $count;
}

/**
 * Get available instance count (only from instances array, not subtracting inuse)
 */
function get_available_instance_count($demo_type, $all_instances) {
    if (!isset($all_instances['instances'])) {
        return 0;
    }
    
    $count = 0;
    foreach ($all_instances['instances'] as $instance) {
        $instance_type = isset($instance['type']) ? $instance['type'] : 'remui';
        if ($instance_type === $demo_type) {
            $count++;
        }
    }
    
    return $count;
}

/**
 * Remove excess instances to maintain required count
 */
function remove_excess_instances($demo_type, $required_count, &$all_instances) {
    if (!isset($all_instances['instances'])) {
        return 0;
    }
    
    $current_count = get_available_instance_count($demo_type, $all_instances);
    $excess = $current_count - $required_count;
    
    if ($excess <= 0) {
        return 0; // No excess to remove
    }
    
    echo "  Removing $excess excess instance(s) for $demo_type...\n";
    
    $removed_count = 0;
    $instances_to_remove = [];
    
    // Find instances to remove (start from the end of the array)
    for ($i = count($all_instances['instances']) - 1; $i >= 0 && $removed_count < $excess; $i--) {
        $instance = $all_instances['instances'][$i];
        $instance_type = isset($instance['type']) ? $instance['type'] : 'remui';
        
        if ($instance_type === $demo_type) {
            $instances_to_remove[] = $i;
            $removed_count++;
        }
    }
    
    // Remove instances in reverse order to maintain array indices
    foreach (array_reverse($instances_to_remove) as $index) {
        $removed_instance = $all_instances['instances'][$index];
        echo "    Removed: {$removed_instance['instancename']}\n";
        unset($all_instances['instances'][$index]);
    }
    
    // Reindex array to maintain sequential keys
    $all_instances['instances'] = array_values($all_instances['instances']);
    
    return $removed_count;
}

/**
 * Main maintenance function
 */
function main() {
    global $instances_file, $demo_types_file, $required_counts;
    
    echo "Starting instance maintenance (JSON entries only)...\n";
    echo "Following InstanceManager.php pattern\n\n";
    
    // Load current instances
    $all_instances = get_instances_from_json($instances_file);
    if (!$all_instances) {
        echo "Error: Failed to load instances from $instances_file\n";
        exit(1);
    }
    
    echo "Current instance counts:\n";
    
    // Check current counts and required counts
    foreach ($required_counts as $demo_type => $required_count) {
        $current_count = get_available_instance_count($demo_type, $all_instances);
        
        echo "  $demo_type: $current_count/$required_count\n";
        
        // Calculate how many instances need to be created or removed
        $needed = $required_count - $current_count;
        
        if ($needed > 0) {
            echo "  Need to create $needed more JSON entry(ies) for $demo_type\n";
            
            for ($i = 1; $i <= $needed; $i++) {
                echo "  Creating JSON entry $i of $needed for $demo_type...\n";
                
                // Add new instance following InstanceManager.php pattern
                $new_instance = add_new_instance_by_type($demo_type, $all_instances);
                
                if ($new_instance) {
                    echo "  Successfully added JSON entry: {$new_instance['instancename']}\n";
                } else {
                    echo "  Failed to add JSON entry for $demo_type\n";
                }
            }
        } elseif ($needed < 0) {
            echo "  Need to remove " . abs($needed) . " excess instance(s) for $demo_type\n";
            
            // Remove excess instances to maintain exact count
            $removed_count = remove_excess_instances($demo_type, $required_count, $all_instances);
            echo "  Removed $removed_count excess instance(s)\n";
        } else {
            echo "  $demo_type has the correct number of instances\n";
        }
        
        echo "\n";
    }
    
    // Write updated instances back to JSON file
    if (write_instances_to_json($instances_file, $all_instances)) {
        echo "JSON entry maintenance completed!\n";
        echo "Updated $instances_file\n\n";
        
        echo "Next steps:\n";
        echo "1. Run './check_instance_counts.sh' to verify JSON entries were added\n";
        echo "2. Run './createmanually.sh' to create the actual instances from JSON entries\n";
        
        // Show final counts
        echo "\nFinal JSON entry counts:\n";
        foreach ($required_counts as $demo_type => $required_count) {
            $final_count = get_available_instance_count($demo_type, $all_instances);
            echo "  $demo_type: $final_count/$required_count\n";
        }
    } else {
        echo "Error: Failed to write updated instances to $instances_file\n";
        exit(1);
    }
}

// Check if required files exist
if (!file_exists($instances_file)) {
    echo "Error: instances.json not found at $instances_file\n";
    exit(1);
}

if (!file_exists($demo_types_file)) {
    echo "Error: demo_types.json not found at $demo_types_file\n";
    exit(1);
}

// Run main function
main();
?>
