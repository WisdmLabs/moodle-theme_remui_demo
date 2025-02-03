/* eslint-disable no-unused-vars */
/* eslint-disable no-console */
/* eslint-disable max-len */
/* eslint-disable jsdoc/require-jsdoc */
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
 * @module     message_whatsapp/connection
 * @copyright (c) 2020 WisdmLabs (https://wisdmlabs.com/)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['jquery', 'core/ajax', 'core/str', 'core/templates'], function($, Ajax, Str, Templates) {

    var SELECTORS = {
        "REMOVE_CONNECTION": '#removeConnection',
        'INPUT_SITE_URL': '#site-url',
        'INPUT_ACCESS_TOKEN': '#access-token',
        "FORM_ACTION_WRAPPER": ".form-action-wrapper",
        "FORM_ACIION_BUTTON": ".form-action-wrapper .formaction",
        "WS_SETTING_TAB": ".whatsapp-settings-tabs .ws-tab",
        "LICENSE_ACTIVATION_FORM_WRAPPER": ".license-activation-form-wrapper",
    };

    var CONFIG = {
        'TEST_CONNECTION_URL': '/webservice/rest/server.php',
        'SLAVE_SITE_URL': false,
        'SLAVE_ACCESS_TOKEN': false,
        'SLAVE_VALIDATION_DATA': false,
    };


        // ****** IMPORTANT ******
    // Do not change the sequence.
    // If you want to add new strings here, add it at the bottom.
    // Do not remove any string from the array.
    // There is no way we can revert back if sequence is changed.
    // ****** IMPORTANT ******
    const strings = [
        {key: 'lincese_status', component: 'message_whatsapp'}
    ];

    var LANGS; // Gloabl variable to store languages.

    // Functionality to fetch strings.
    const fetchLanguages = () => {
        Str.get_strings(strings).then(function(results) {
            LANGS = results;
            return results;
        });
    };

    /**
     * Saves the provided configuration settings.
     *
     * @param {Object[]} configs - An array of configuration objects to save.
     * @returns {Promise<Object>} The response from the server after saving the configurations.
     */
    const saveConfigs = async(configs = []) => {
        const request = {
            methodname: 'message_whatsapp_license_action',
            args: {
                configs: configs
            }
        };

        var response = await Ajax.call([request])[0];
        return response;
    };

    async function submitLicensekey(e) {
        e.preventDefault();

        $(document.body).css({'cursor': 'wait'});

        const action = $(this).data("action");
        var license_key = $(SELECTORS.INPUT_ACCESS_TOKEN).val().trim();

        console.log(action, license_key);

        var response = await saveConfigs([{
            key: license_key,
            action: action,
        }]);

        console.log(response);
        if (response.success == true) {
            // Window.location.reload();

            let license_status = response.message;
            let license_active = action == 'activation' ? true : false;

            let licenseContext = {
                license_key,
                license_status,
                license_active
            };

            await Templates.render("message_whatsapp/overview_connection_form", licenseContext)
            .done(function(html, js) {
                $(SELECTORS.LICENSE_ACTIVATION_FORM_WRAPPER).empty();
                Templates.appendNodeContents($(SELECTORS.LICENSE_ACTIVATION_FORM_WRAPPER), html, js);
            });

            // Reset cursor
            $(document.body).css({'cursor': 'default'});

        } else {
            var error = document.createElement('p');
            error.classList.add('text-error', 'm-0', 'mb-2');
            error.textContent = LANGS[0] + ": " + response.message;

            // Clear any existing error messages
            $('.form-action-wrapper .text-error').remove();

            // Add new error message
            $('.form-action-wrapper').prepend(error);

            // Reset cursor
            $(document.body).css({'cursor': 'default'});
        }
    }

    return {
        /**
         * Initializes the connection functionality for the local_sitesync plugin.
         * This function sets up the event listeners for the connection form, handles the
         * connection and disconnection actions, and resets the connection if needed.
         */
        init: function() {
            $(document).ready(function() {
                fetchLanguages();

                // Hide submit button if URL contains whatsapp section and information center
                if (window.location.href.includes('section=messagesettingwhatsapp') &&
                    window.location.href.includes('#informationcenter')) {
                    $('#adminsettings .btn[type="submit"]').hide();
                }

                $(document).on("click", SELECTORS.FORM_ACIION_BUTTON, submitLicensekey);

                $(document).on("click", SELECTORS.WS_SETTING_TAB, function(e) {
                    if ($(this).hasClass('whatsapptab')) {
                        $('#adminsettings .btn[type="submit"]').hide();
                    } else {
                        $('#adminsettings .btn[type="submit"]').show();
                    }
                });
            });
        }
    };
});
