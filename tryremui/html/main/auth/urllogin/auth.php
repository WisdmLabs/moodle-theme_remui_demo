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
 * @package auth_url_login
 * @author  2018 wisdmlabs
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class auth_plugin_urllogin extends auth_plugin_base {

    /**
     * Constructor.
     */
    public function __construct() {
        $this->authtype = 'urllogin';
        $this->config = get_config('auth_urllogin');
    }

    /**
     * Hook for overriding behaviour of login page.
     * This method is called from login/index.php page for all enabled auth plugins.
     *
     * @global object
     * @global object
     */
    public function loginpage_hook() {
        global $frm, $user, $DB;
        $username = optional_param('username', '', PARAM_RAW);
        $password = optional_param('password', '', PARAM_RAW);
        if ($user = $this->user_login($username, $password)) {
	    $frm = new stdClass();
            $frm->username = $username;
            $frm->password = $password;
        }
    }

    /**
     * Returns true if the username and password work and false if they are
     * wrong or don't exist. (Non-mnet accounts only!)
     *
     * @param string $username The username
     * @param string $password The password
     * @return bool Authentication success or failure.
     */
    public function user_login($username, $password) {
        global $CFG, $DB, $USER;
        if (!$user = $DB->get_record('user', array('username' => $username, 'mnethostid' => $CFG->mnet_localhost_id))) {
            return false;
        }
        if (validate_internal_user_password($user, $password)) {
            return $user;
        }
        return false;
    }
}
