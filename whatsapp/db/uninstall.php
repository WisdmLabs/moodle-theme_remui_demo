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
 * Uninstallation code for the whatsapp message processor
 *
 * @package    message_whatsapp
 * @copyright  2009 Moodle Pty Ltd (http://moodle.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_message_whatsapp_uninstall() {
    global $DB;

    // Remove the message processor record
    $DB->delete_records('message_processors', ['name' => 'whatsapp']);

    // Get the service ID
    $service = $DB->get_record('external_services', ['shortname' => 'whatsappnotification']);

    if ($service) {
        // Remove associated functions
        $DB->delete_records('external_services_functions', ['externalserviceid' => $service->id]);

        // Remove the service
        $DB->delete_records('external_services', ['id' => $service->id]);
    }

    return true;
}
