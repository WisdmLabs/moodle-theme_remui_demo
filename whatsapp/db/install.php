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
 * Installation code for the whatsapp message processor
 *
 * @package    message_whatsapp
 * @copyright  2009 Moodle Pty Ltd (http://moodle.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Install the whatsapp message processor
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_message_whatsapp_install() {
    global $DB;
    $result = true;

    // add webservices.
    message_whatsapp_add_web_services_and_functions();

    $provider = new stdClass();
    $provider->name  = 'whatsapp';
    $DB->insert_record('message_processors', $provider);
    return $result;
}

function message_whatsapp_add_web_services_and_functions() {
    global $DB;

    $service = message_whatsapp_get_service_obj();

    $serviceid = $DB->insert_record('external_services', $service);

    $functionnames = [
        'message_whatsapp_license_action',
    ];

    foreach ($functionnames as $functionname) {

        $addedfunction = new stdClass();
        $addedfunction->externalserviceid = $serviceid;
        $addedfunction->functionname = $functionname;

        if (!$DB->record_exists(
            'external_services_functions',
            [
                'externalserviceid' => $addedfunction->externalserviceid,
                'functionname'      => $addedfunction->functionname,
            ]
        )) {
            $DB->insert_record('external_services_functions', $addedfunction);
        }
    }
}

function message_whatsapp_get_service_obj() {
    $service = new \stdClass();
    $service->name = 'Whatsapp Notification';
    $service->shortname = 'whatsappnotification';
    $service->enabled = true;
    $service->restrictedusers = 0;
    $service->requiredcapability = '';
    $service->timecreated = time();
    $service->timemodified = time();

    return $service;
}
