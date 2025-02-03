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
 * Version details.
 *
 * @package    message_whatsapp
 * @copyright  2023 WisdmLabs <support@wisdmlabs.com>
 * @author     Gourav G <support@wisdmlabs.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace message_whatsapp\external;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/externallib.php');

class license_action extends \external_api {
    public static function execute_parameters() {
        return new \external_function_parameters([
            'configs' => new \external_multiple_structure(
                new \external_single_structure([
                    'key' => new \external_value(PARAM_TEXT, 'Config key'),
                    'action' => new \external_value(PARAM_TEXT, 'License action')
                ])
            )
        ]);
    }

    public static function execute($configs) {
        error_log(print_r($configs, true));
        $params = self::validate_parameters(self::execute_parameters(), ['configs' => $configs]);

        // Verify user has required capability
        $context = \context_system::instance();
        require_capability('moodle/site:config', $context);

        $wdm_server = 'https://edwp.edwiser.org/wp-json/edwp/v1/license/';

        $curl = curl_init();
        global $CFG;
        $args = array(
            'license_key' => $params['configs'][0]['key'],
            'action' => $params['configs'][0]['action'],
            'moodle_site_url' => $CFG->wwwroot,
        );
        error_log(print_r($args , true));

        curl_setopt_array($curl, array(
            CURLOPT_URL => $wdm_server,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($args),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        error_log(print_r($response, true));
        error_log(print_r($err, true));

        $success = false;
        if ($err) {
            return get_string('license_error', 'message_whatsapp');
        } else {
            $response = json_decode($response);
            if (isset($response->activated) && $response->activated == true) {
                set_config('license_status', 'active', 'message_whatsapp');
                set_config('license_key', $params['configs'][0]['key'], 'message_whatsapp');
                $msg = get_string('license_activated', 'message_whatsapp');
                $success = true;
            } else if (isset($response->reset) && $response->reset == true) {
                set_config('license_status', 'deactive', 'message_whatsapp');
                set_config('license_key', $params['configs'][0]['key'], 'message_whatsapp');
                $msg = get_string('license_deactivated', 'message_whatsapp');
                $success = true;
            } else {
                set_config('license_status', 'inactive', 'message_whatsapp');
                set_config('license_key', '', 'message_whatsapp');
                $msg = isset($response->error) ? $response->reset : get_string('license_failed', 'message_whatsapp');
            }
        }
        return array('success' => $success, 'message' => $msg);
    }
    public static function execute_returns() {
        // return new \external_value(PARAM_TEXT, 'Success status');
        return new \external_single_structure(
            [
                'success' => new \external_value(
                    PARAM_BOOL,
                    'Status'
                ),
                'message' => new \external_value(
                    PARAM_TEXT,
                    'Message'
                ),
            ]
        );
    }
}
