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
 * Sets the preferences for all admins.
 *
 * @package   theme_remui
 * @copyright (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_remui\task;

class remui_stats_update extends \core\task\scheduled_task {

    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name() {
        return get_string('dashboardstatsupdate', 'theme_remui');
    }

    /**
     * Execute the task.
     * @return void
     */
    public function execute() {
        if(get_config( "theme_remui", "enabledashboardcoursestats")) {
            $allusers = get_users();
            foreach($allusers as $user) {
                $coursehandler = new \theme_remui_coursehandler();
                $coursehandler->set_dashboard_stats($user->id);
            }
            set_config('cache_reset_time', time(), 'theme_remui');
        } else {
            set_config("edwdashboardstats", "", "theme_remui");
        }

        if(get_config( "theme_remui", "enablecoursestats")) {
            $allcourses = get_courses();
            foreach($allcourses as $course) {
                $coursehandler->set_course_stats($course,true);
            }
            set_config('cache_reset_time', time(), 'theme_remui');
        } else {
            set_config("edwcoursestats", "", "theme_remui");
        }
    }
}
