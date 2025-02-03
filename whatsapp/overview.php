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
defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../../../config.php');
require_login();
require_capability('moodle/site:config', context_system::instance());

global $OUTPUT, $PAGE, $CFG;

$systemcontext = context_system::instance();
$PAGE->set_context($systemcontext);

if (!is_siteadmin()) {
    exit('go away sir...');
}

$templatecontext = [];
// Connection Data.
$templatecontext['license_key'] = get_config('message_whatsapp', 'license_key');
$templatecontext['license_status'] = get_config('message_whatsapp', 'license_status');
if ( !$templatecontext['license_status'] ) {
    $templatecontext['license_status'] = 'inactive';
}
if ($templatecontext['license_status'] == 'active') {
    $templatecontext['license_active'] = true;
} else {
    $templatecontext['license_active'] = false;
}

$PAGE->requires->strings_for_js(array(
    'license_key',
    'tab_license',
    'activate_license',
    'deactivate_license',
    'lincese_status'

), 'message_whatsapp');

// Add your page content here.
echo $OUTPUT->render_from_template('message_whatsapp/overview', $templatecontext);
$PAGE->requires->js_call_amd('message_whatsapp/connection', 'init');
