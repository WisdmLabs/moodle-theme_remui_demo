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

namespace message_whatsapp;

/**
 * Class whatsapp_message_handler
 *
 * @package    message_whatsapp
 * @copyright  2024 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class whatsapp_message_handler {
    /** @var string The notification template */
    public $template;

    /** @var array The extracted data */
    public $extracteddata = [];

    /** @var object The given notification data */
    public $eventdata;

    /** @var string The given notification data */
    public $message = "";

    /** @var object The given notification data */
    public $course = null;

    /** @var array The given notification data */
    public $template_jsoncontent = null;

    /** @var string The given notification data */
    public $demourl = "https://instances.tryremui.edwiser.org/";

    public function trigger_event_notification($eventdata) {
        global $CFG;
        $licensekey = $this->valid_license();

        if (!$licensekey) {
            return true;
        }

        // For DEMO
        if (!$this->has_message_credits()) {
            return true;
        }

        $phonenumber = $this->get_user_phonenumber($eventdata->userto);
        if (!$phonenumber) {
            return true;
        }

        // Generate Notification Data.
        $notificationdata = array();

        $components = $this->initialize_event_content($eventdata);
        if (is_bool($components) && $components == false) {
            return true;
        }

        $notificationdata['components'] = $components;

        $notificationdata['template_name'] = $this->template_jsoncontent['template'];

        $notificationdata['sendto'] = $phonenumber;

        $notificationdata['licensekey'] = $licensekey;
        $notificationdata['moodleurl'] = $CFG->wwwroot;
        $notificationdata['product_type'] = "edwiser";

        return $this->send_wa_notification($notificationdata);
    }

    public function valid_license() {
        $licensestatus = get_config('message_whatsapp', 'license_status');

        if ($licensestatus && $licensestatus == 'active') {
            $license_key = get_config('message_whatsapp', 'license_key');
            return $license_key;
        }

        return false;
    }

    private function get_user_phonenumber($userto) {
        $phonenumber = false;
        if (!isset($userto->phone2) && !isset($userto->phone1)) {
            $userto = \core_user::get_user($userto->id);
        }

        if (!isset($userto->phone2) && !isset($userto->phone1)) {
            return false;
        }

        if ($userto->phone2) {
            $phonenumber = $userto->phone2;
        } else if ($userto->phone1) {
            $phonenumber = $userto->phone1;
        }

        return $phonenumber;
    }

    // Creating Event Object.
    private function initialize_event_content($eventdata) {

        // setup event data
        if (isset($eventdata->customdata) && $eventdata->customdata) {
            $eventdata->customdata = json_decode($eventdata->customdata);
        }

        $eventdata->courseid = $this->get_course_id($eventdata);


        if ($eventdata->courseid) {
            $this->course = get_course($eventdata->courseid);
        }

        $this->eventdata = $eventdata;

        // Generating template Name.
        $this->template = $this->eventdata->component . "_" . $this->eventdata->name;
        if ( $this->template == "mod_assign_assign_notification" ) {
            $this->template .= "_" . $this->eventdata->customdata->messagetype;
        }

        $templatejsondata = $this->get_whatsapp_template_json_context();

        if (!isset($templatejsondata[$this->template])) {
            if (isset($templatejsondata["edw_general_moodle_notifications"]["generalmessagelist"]) &&
                in_array($this->template, $templatejsondata["edw_general_moodle_notifications"]["generalmessagelist"])) {
                $this->template = 'edw_general_moodle_notifications';
            } else {
                return false;
            }
        }

        $this->template_jsoncontent = $templatejsondata[$this->template];

        return $this->prepare_components_context();
    }

    private function get_course_id($eventdata) {
        global $DB;
        if (isset($eventdata->courseid)) {
            return $eventdata->courseid;
        }

        if (
            !$eventdata->courseid &&
            isset($eventdata->customdata) && $eventdata->customdata && isset($eventdata->customdata->assignmentid)
        ) {
            $assignmentid = $eventdata->customdata->assignmentid;
            $cm = get_coursemodule_from_instance('assign', $assignmentid, 0, false, MUST_EXIST);
            return $cm->course;
        }

        if (
            !$eventdata->courseid &&
            isset($eventdata->customdata) && $eventdata->customdata && isset($eventdata->customdata->quizid)
        ) {
            $quizid = $eventdata->customdata->quizid;
            $quizrecord = $DB->get_record('quiz', array('id' => $quizid), 'course');
            return $quizrecord->course;
        }

        return null;
    }

    private function send_wa_notification($notificationdata) {

        // Add logging before sending
        $courseid = $this->eventdata->courseid ? $this->eventdata->courseid : 1;
        $eventdata = [
            'context' => \context_course::instance($courseid),
            'relateduserid' => $this->eventdata->userto->id,
            'other' => [
                'phonenumber' => $notificationdata['sendto'],
                'username' => $this->eventdata->userto->username,
            ],
        ];

        $event = \message_whatsapp\event\notification_sent::create($eventdata);
        $event->trigger();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://waedwiser.wisdmlabs.net/send-message',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($notificationdata),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $this->reduce_message_credits();
        return $response;
    }

    private function prepare_components_context() {
        $components = [];

        // Prepare body parameters
        if (isset($this->template_jsoncontent['body'])) {
            $bodyparameters = [];
            // Sort by numeric keys to maintain order
            ksort($this->template_jsoncontent['body'], SORT_NUMERIC);

            foreach ($this->template_jsoncontent['body'] as $param) {
                $method = 'get_' . $param;
                if (method_exists($this, $method)) {
                    $bodyparameters[] = [
                        'type' => 'text',
                        'text' => $this->$method(),
                    ];
                }
            }

            if (!empty($bodyparameters)) {
                $components[] = [
                    'type' => 'body',
                    'parameters' => $bodyparameters,
                ];
            }
        }

        // Prepare button parameters
        if (isset($this->template_jsoncontent['button'])) {
            // Sort by numeric keys to maintain order
            ksort($this->template_jsoncontent['button'], SORT_NUMERIC);

            foreach ($this->template_jsoncontent['button'] as $index => $param) {
                $method = 'get_' . $param;
                if (method_exists($this, $method)) {
                    $components[] = [
                        'type' => 'button',
                        'sub_type' => 'url',
                        'index' => 0,
                        'parameters' => [[
                            'type' => 'text',
                            'text' => $this->$method(),
                        ]],
                    ];
                }
            }
        }

        return $components;
    }

    // FOR DEMO SITE START
    private function reduce_message_credits() {
        global $CFG;

        if (strpos($CFG->wwwroot, $this->demourl) === 0) {
            $credits = get_config('message_whatsapp', 'message_credits');

            if ($credits === false) {
                // If credits not set, initialize with 1
                set_config('message_credits', 9, 'message_whatsapp');
                return;
            }

            // Reduce credits by 1 but don't go below 0
            $newcredits = max(0, $credits - 1);
            set_config('message_credits', $newcredits, 'message_whatsapp');
        }
    }

    private function has_message_credits() {
        global $CFG;

        if (strpos($CFG->wwwroot, $this->demourl) === 0) {
            $credits = get_config('message_whatsapp', 'message_credits');
            if ($credits === false) {
                return true;
            }
            if ($credits <= 0) {
                return false;
            }
        }

        return true;
    }
    // END

    /**
     * Returns the short name of the course.
     *
     * @return string The short name of the course.
     */
    private function get_courseshortname() {
        return $this->course->shortname;
    }

    /**
     * Returns the name of the forum associated with the event data.
     *
     * @return string The name of the forum course module.
     */
    private function get_forumname() {
        $cm = get_coursemodule_from_id('', $this->eventdata->customdata->cmid, 0, true, MUST_EXIST);
        return $cm->name;
    }

    /**
     * Returns the name of the context URL associated with the event data.
     *
     * @return string The name of the context URL.
     */
    private function get_contexturlname() {
        return $this->eventdata->contexturlname;
    }

    /**
     * Returns the context URL associated with the event data.
     *
     * @return string The context URL.
     */
    private function get_contexturl() {
        global $CFG;

        $contexturl = "";
        if ($this->template === "edw_general_moodle_notifications" && !empty($this->eventdata->savedmessageid)) {
            $prefname = 'message_provider_' . $this->eventdata->component . '_' . $this->eventdata->name . '_enabled';
            $forcedpref = get_config('message', $prefname);
            $userpref = get_user_preferences($prefname, '', $this->eventdata->userto->id);

            // Check for popup notification in forced preferences
            $haswebnotification = false;
            if (!empty($forcedpref)) {
                $haswebnotification = in_array('popup', explode(',', $forcedpref));
            }

            // Check user preferences if web notification is enabled
            if ($haswebnotification && !empty($userpref)) {
                $haswebnotification = in_array('popup', explode(',', $userpref));
            }

            // Set context URL if web notification is enabled
            if ($haswebnotification) {
                $contexturl = $CFG->wwwroot . "/message/output/popup/notifications.php?notificationid=" . $this->eventdata->savedmessageid;
            }

        }

        if (!$contexturl) {
            $contexturl = $this->eventdata->contexturl;
        }

        if (!$contexturl) {
            $courseid = $this->eventdata->courseid ? $this->eventdata->courseid : 1;
            $contexturl = $CFG->wwwroot . "/course/view.php?id=". $courseid;
        }

        $contexturl = str_replace('&amp;', '&', $contexturl);
        // if $contenturl contain ? than replace it with &
        if (strpos($contexturl, '?') !== false) {
            $contexturl = str_replace('?', '&', $contexturl);
        }

        return $contexturl;
    }

    /**
     * Returns the full name of the user who initiated the event.
     *
     * @return string The full name of the user who initiated the event.
     */
    private function get_userfromname() {
        return $this->eventdata->userfrom->firstname . " " . $this->eventdata->userfrom->lastname;
    }

    /**
     * Returns the full name of the user to whom the event is directed.
     *
     * @return string The full name of the user to whom the event is directed.
     */
    private function get_usertoname() {
        return $this->eventdata->userto->firstname . " " . $this->eventdata->userto->lastname;
    }

    /**
     * Returns the full name of the Moodle site.
     *
     * @return string The full name of the Moodle site.
     */
    private function get_sitename() {
        global $SITE;
        return $SITE->fullname;
    }

    /**
     * Returns the full name of the course associated with the event data.
     *
     * @return string The full name of the course.
     */
    private function get_coursename() {
        return $this->course->fullname;
    }


    /**
     * Returns the course URL
     *
     * @return string The course URL.
     */
    private function get_courseurl() {
        global $CFG;
        return $CFG->wwwroot . "/course/view.php&id=". $this->eventdata->courseid;
    }

    /**
     * Returns the subject associated with the event data.
     *
     * @return string The subject of the event.
     */
    private function get_subject() {
        return $this->eventdata->subject;
    }

    private function get_badgeinformationurl() {
        global $CFG;
        $url = $CFG->wwwroot . "/badges/badge.php&hash=" . $this->eventdata->customdata->hash;
        return $url;
    }

    /**
     * Returns the name of the module associated with the event data.
     *
     * This private helper method is used within the WhatsAppMessageHandler class
     * to retrieve the name of the module associated with the event data.
     * It does this by parsing the context URL to extract the course module ID, and then using that to look up the module name.
     *
     * @return string The name of the module associated with the event data.
     */
    private function get_modname() {
        $params = parse_url($this->eventdata->contexturl, PHP_URL_QUERY);
        parse_str($params, $query);
        $cmid = $query['id'];

        $cm = get_coursemodule_from_id('', $cmid, 0, true, MUST_EXIST);
        $modulename = get_string('modulename', $cm->modname);

        return $modulename;
    }


    private function get_conversationlink() {
        global $CFG;
        $url = $CFG->wwwroot . "/message/index.php&id=" . $this->eventdata->convid;

        return $url;
    }

    private function get_courseduedate() {
        $time = $this->eventdata->customdata->duedate;
        $humanreadable = userdate($time, '%A, %d %B %Y, %I:%M %p');

        return $humanreadable;
    }

    private function get_quizopendate() {
        $time = $this->eventdata->customdata->timeopen;
        $humanreadable = userdate($time, '%A, %d %B %Y, %I:%M %p');

        return $humanreadable;
    }

    private function get_quizclosedate() {

        global $DB;
        // Get quiz record from mdl_quiz table
        if ( isset($this->eventdata->customdata->quizid) ) {

            $quizid = $this->eventdata->customdata->quizid;

        } else if (isset($this->eventdata->customdata->instance)) {

            $quizid = $this->eventdata->customdata->instance;

        }

        if (empty($quizid)) {
            return "Not Found";
        }

        $quiz = $DB->get_record('quiz', array('id' => $quizid));

        // // The timeclose field contains the quiz close timestamp
        $quizclosetime = !empty($quiz->timeclose) ? userdate($quiz->timeclose, '%A, %d %B %Y, %I:%M %p') : get_string('statusna');

        return $quizclosetime;
    }

    private function get_quizoverduetime() {
        global $DB;
        // Get quiz record from mdl_quiz table
        if ( isset($this->eventdata->customdata->quizid) ) {

            $quizid = $this->eventdata->customdata->quizid;

        } else if (isset($this->eventdata->customdata->instance)) {

            $quizid = $this->eventdata->customdata->instance;

        }

        if (empty($quizid)) {
            return "Not Found";
        }

        $quiz = $DB->get_record('quiz', ['id' => 24]);

        $overduetime = $quiz->timeclose + $quiz->graceperiod;

        return userdate($overduetime, '%A, %d %B %Y, %I:%M %p');
    }


    /**
     * Retrieves the general message content from the event data, cleaning and formatting it.
     *
     * This private helper method is used within the WhatsAppMessageHandler class
     * to extract the general message content from the event data, and perform various cleaning and formatting operations on it.
     *
     * The method first checks if a "smallmessage" property is available in the event data,
     * and uses that if present. Otherwise, it falls back to the "fullmessage" property.
     *
     * The message content is then cleaned by:
     * - Removing HTML tags using `strip_tags()`
     * - Normalizing whitespace using `preg_replace()`
     * - Removing URLs using `preg_replace()`
     * - Removing newlines using `preg_replace()`
     * - Trimming leading and trailing whitespace using `trim()`
     *
     * @return string The cleaned and formatted general message content.
     */
    private function get_generalmessage() {
        $message = $this->eventdata->smallmessage;
        // $message = null;
        $messagetemplate = $this->eventdata->component . "_" . $this->eventdata->name;

        if (!$message || ($messagetemplate === "enrol_manual_expiry_notification" || $messagetemplate === "enrol_self_expiry_notification")) {
            $message = $this->eventdata->fullmessage;
        }
        $message = clean_param($message, PARAM_NOTAGS);

        // Clean the message
        $message = strip_tags($message); // Remove HTML tags
        $message = preg_replace('/\s+/', ' ', $message); // Normalize whitespace
        $message = preg_replace('/https?:\/\/\S+/', '', $message); // Remove URLs
        $message = preg_replace('/[\r\n]+/', ' ', $message); // Remove newlines
        $message = preg_replace('/Go to activity \[\d+\]/', '', $message); // Remove "Go to activity [X]" patterns
        $message = preg_replace('/Links: ------( \[\d+\])*/', '', $message); // Remove "Links: ------[X]" patterns
        $message = preg_replace('/\* /', "\n* ", $message); // Add newline before bullet points
        $message = preg_replace('/\s*\[\d+\]\s*$/', '', $message);

        if ($messagetemplate === "enrol_manual_expiry_notification" || $messagetemplate === "enrol_self_expiry_notification") {
            $message = preg_replace('/the following users:\s*([\s\S]*?)(?=To extend|$)/', 'for some users. ', $message);
        }

        $message = trim($message); // Remove leading/trailing whitespace

        return $message;
    }


    /**
     * Retrieves the WhatsApp template JSON content from a remote URL.
     *
     * This method fetches the WhatsApp template JSON content from a remote URL, replaces a placeholder with the site URL, and decodes the JSON data.
     * If the fetch or JSON decoding fails, the method returns null.
     *
     * @return array|null The decoded WhatsApp template JSON content, or null if the fetch or decoding fails.
     */
    public function get_whatsapp_template_json_context() {
        global $CFG;

        // Get cache instance
        $cache = \cache::make('message_whatsapp', 'whatsapp_cache');

        // Check if data is already in cache
        $whatsappcontent = $cache->get('whatsappContent');
        if ($whatsappcontent !== false) {
            return $whatsappcontent;
        }


        $url = "https://staticcdn.edwiser.org/json/whatsapp_json/whatsapp_templates_content.json";

        // Use a timeout to prevent hanging on slow connections
        $context = stream_context_create(['http' => ['timeout' => 5]]);
        $jsoncontent = @file_get_contents($url, false, $context);

        if ($jsoncontent === false) {
            debugging('Unable to fetch whatsapp json data', DEBUG_DEVELOPER);
            return null;
        }

        // $jsoncontent = str_replace('{{>siteurl}}', $CFG->wwwroot, $jsoncontent);

        $jsoncontent = json_decode($jsoncontent, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            debugging('Invalid JSON in whatsnew data', DEBUG_DEVELOPER);
            return null;
        }

        $cache->set('whatsappContent', $jsoncontent);

        return $jsoncontent;
    }

}
