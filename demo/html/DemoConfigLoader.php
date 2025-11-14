<?php
/**
 * Centralized Demo Configuration Loader
 * 
 * This class provides a centralized way to load and cache demo type configurations
 * from the demo_types.json file. It eliminates repetitive file reads and provides
 * a consistent interface across all files.
 */

class DemoConfigLoader {
    private static $config = null;
    private static $configFile = '/var/www/demo_types.json';
    
    /**
     * Get the complete configuration array
     * 
     * @return array|false The configuration array or false if not available
     */
    public static function getConfig() {
        if (self::$config === null) {
            if (!file_exists(self::$configFile)) {
                self::$config = false;
                return false;
            }
            
            $config = json_decode(file_get_contents(self::$configFile), true);
            self::$config = $config ?: false;
        }
        
        return self::$config;
    }
    
    /**
     * Get list of available demo types
     * 
     * @return array Array of demo type names
     */
    public static function getAvailableDemoTypes() {
        $config = self::getConfig();
        return $config ? array_keys($config) : [];
    }
    
    /**
     * Check if a demo type is valid
     * 
     * @param string $demoType The demo type to check
     * @return bool True if valid, false otherwise
     */
    public static function isDemoTypeValid($demoType) {
        $config = self::getConfig();
        return $config && isset($config[$demoType]);
    }
    
    /**
     * Get configuration for a specific demo type
     * 
     * @param string $demoType The demo type to get config for
     * @return array|null The demo type configuration or null if not found
     */
    public static function getDemoTypeConfig($demoType) {
        $config = self::getConfig();
        return $config && isset($config[$demoType]) ? $config[$demoType] : null;
    }
    
    /**
     * Get the default tag ID for a demo type
     * 
     * @param string $demoType The demo type
     * @param int $defaultTagId Default tag ID to return if not found
     * @return int The tag ID
     */
    public static function getDefaultTagId($demoType, $defaultTagId = -1) {
        $demoConfig = self::getDemoTypeConfig($demoType);
        if (!$demoConfig) {
            return $defaultTagId;
        }
        
        return isset($demoConfig['layout_tags']['default']) ? $demoConfig['layout_tags']['default'] : $defaultTagId;
    }
    
    /**
     * Get the default layout name
     * 
     * @return string The default layout name
     */
    public static function getDefaultLayoutName() {
        return 'default'; // This could be made configurable in the future
    }
    
    /**
     * Determine demo type based on layout name
     * 
     * @param string $layoutName The layout name to check
     * @param string $defaultType Default demo type to return if not found
     * @return string The determined demo type
     */
    public static function getDemoTypeForLayout($layoutName, $defaultType = "remui") {
        $config = self::getConfig();
        if (!$config) {
            return $defaultType;
        }
        
        // Check if layout name directly matches a demo type
        if (isset($config[$layoutName])) {
            return $layoutName;
        }
        
        // Handle special mappings for backward compatibility
        $specialMappings = [
            'page-builder-demo' => 'pagebuilderdemo'
        ];
        
        if (isset($specialMappings[$layoutName])) {
            $mappedType = $specialMappings[$layoutName];
            if (isset($config[$mappedType])) {
                return $mappedType;
            }
        }
        
        // Check if layout name matches any demo type in configuration
        $availableTypes = self::getAvailableDemoTypes();
        foreach ($availableTypes as $demoType) {
            if ($layoutName === $demoType) {
                return $demoType;
            }
        }
        
        return $defaultType;
    }
    
    /**
     * Get the token for a specific demo type
     * 
     * @param string $demoType The demo type to get token for
     * @param string $defaultToken Default token to return if not found
     * @return string The token for the demo type
     */
    public static function getToken($demoType, $defaultToken = 'bce244d53b327b127e1996a6063903bc') {
        $demoConfig = self::getDemoTypeConfig($demoType);
        if (!$demoConfig) {
            return $defaultToken;
        }
        
        return isset($demoConfig['token']) ? $demoConfig['token'] : $defaultToken;
    }
    
    /**
     * Get the description for a specific demo type
     * 
     * @param string $demoType The demo type to get description for
     * @param string $defaultDescription Default description to return if not found
     * @return string The description for the demo type
     */
    public static function getDemoDescription($demoType, $defaultDescription = 'Edwiser RemUI demo sandbox') {
        $demoConfig = self::getDemoTypeConfig($demoType);
        if (!$demoConfig) {
            return $defaultDescription;
        }
        
        return isset($demoConfig['description']) ? $demoConfig['description'] : $defaultDescription;
    }
    
    /**
     * Reset the cached configuration (useful for testing or when config changes)
     */
    public static function resetCache() {
        self::$config = null;
    }
}
?>
