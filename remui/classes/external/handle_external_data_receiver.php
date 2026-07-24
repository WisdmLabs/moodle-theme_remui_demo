<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   local_edwiserpagebuilder
 * @copyright (c) 2022 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author Gourav Govande
 */

 namespace theme_remui\external;

 defined('MOODLE_INTERNAL') || die;

use external_function_parameters;
use external_value;
use external_single_structure;
use external_multiple_structure;
use context_system;
use context_user;

trait handle_external_data_receiver
{
    /**
     * Describes the parameters for handle_external_data_receiver
     * @return external_function_parameters
     */
    public static function handle_external_data_receiver_parameters()
    {
        return new external_function_parameters(
            array(
                'externaldata' => new external_value(PARAM_RAW, 'External Data in JSON format')
            )
        );
    }

    /**
     * Store the external data in theme_remui config
     * @param string $externaldata JSON encoded external data
     * @return bool status
     */
    public static function handle_external_data_receiver($externaldata)
    {
        global $CFG;
        require_once($CFG->libdir . '/adminlib.php');


        // Parameter validation
        $params = self::validate_parameters(
            self::handle_external_data_receiver_parameters(),
            array('externaldata' => $externaldata)
        );

        $result = array(
            'status' => false,
            'message' => 'Failed to process data'
        );

        try {
            // Decode the JSON data
            $data = json_decode($params['externaldata'], true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Invalid JSON data: ' . json_last_error_msg());
            }

            // Store the entire data array as JSON in the config
            $saveresult = set_config('edw_external_data', json_encode($data), 'theme_remui');

            
	    if (isset($data["blocklayout"]) && $data["blocklayout"] == "pagebuilderdemo") {
                $theme = \theme_config::load("edwboost");
                set_config('theme', $theme->name);
            }

            $footerdesigns = [
                "classic" => "footer-design-1",
                "school" => "footer-design-2",
                "university" => "footer-design-3",
                "corporate" => "footer-design-4",
                "training" => "footer-design-5",
            ];

            // if (isset($data["blocklayout"]) && isset($footerdesigns[$data["blocklayout"]])) {
            //     self::set_footerdesign($footerdesigns[$data["blocklayout"]]);
            // }

            if ($saveresult) {
                $result['status'] = true;
                $result['message'] = 'Data successfully stored';
                $result['data'] = $data;
            }
        } catch (\Exception $e) {
            $result['message'] = 'Error: ' . $e->getMessage();
            error_log('Exception in handle_external_data_receiver: ' . $e->getMessage());
        }

        if ($result['status']) {
            return true;
        }
        return false;
    }

    public static function set_footerdesign($footerdesign)
    {
        $baseurl = 'https://staticcdn.edwiser.org/theme_remuiassets//footerassets/';
        $offset  = str_replace("-", "", $footerdesign);
        // Update config.
        set_config('footer-design-selector', $footerdesign, 'theme_remui');

        $url = $baseurl . $offset . ".json";

        $jsondata = download_file_content($url);

        if ($jsondata) {
            $data = json_decode($jsondata, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($data)) {

                // 1. Skip footertop and htmlcontent
                unset($data['footertop'], $data['htmlcontent']);

                // 2. Handle footerbottom (flatten keys)
                if (! empty($data['footerbottom']) && is_array($data['footerbottom'])) {
                    foreach ($data['footerbottom'] as $key => $value) {
                        set_config($key, $value, 'theme_remui');
                    }
                    unset($data['footerbottom']);
                }

                // 3. Handle configData (array of column configs)
                if (! empty($data['configData']) && is_array($data['configData'])) {
                    foreach ($data['configData'] as $configrow) {
                        foreach ($configrow as $key => $value) {
                            set_config($key, $value, 'theme_remui');
                        }
                    }
                    unset($data['configData']);
                }

                // 4. Handle footercolors (flatten keys)
                if (! empty($data['footercolors']) && is_array($data['footercolors'])) {
                    foreach ($data['footercolors'] as $key => $value) {
                        set_config($key, $value, 'theme_remui');
                    }
                    unset($data['footercolors']);
                }

            } else {
                debugging('Invalid JSON structure in remui footer config');
            }
        } else {
            debugging('Failed to fetch remui footer config JSON');
        }

        theme_reset_all_caches();
    }

    /**
     * Describes the set_demo_layouttype_returns value
     * @return external_value
     */
    public static function handle_external_data_receiver_returns()
    {
        return new external_value(PARAM_BOOL, 'True if successful, false otherwise');
    }
}


// bb2478c65aada3d71c318b97afa1f652
