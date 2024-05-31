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
 * Class User Handler.
 *
 * @package local_edwiserpagebuilder
 * @author  2022 WisdmLabs
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_edwiserpagebuilder\remuiblck;

defined('MOODLE_INTERNAL') || die();

use context_system;

// This class will handle every operations related to users
class enrolledusers{

    public function get_block_context(){
        global $OUTPUT, $PAGE;

        $context = new \stdClass();

        $context->canview = $this->can_view();

        if($context->canview) {
            $userobj =  \local_edwiserpagebuilder\remuiblck\userhandler::get_instance();
            $userdata = $userobj->enrolled_users_state();
            $context->data = $userdata;
        }

        $context->is_siteadmin = is_siteadmin();

        $context->warningicon = $OUTPUT->image_url("warninig_icon", "local_edwiserpagebuilder");
        $context->editing = $PAGE->user_is_editing();

        return $context;
    }

    public function can_view() {

        if(is_siteadmin()){
            return true;
        }

        $userobj = \local_edwiserpagebuilder\remuiblck\userhandler::get_instance();

        $options["roles"] = $userobj->get_user_roles_system_wide();
        if (in_array("manager", $options['roles'])) {
            return true;
        }
        return false;
    }

    /**
     * The function itself
     * @return string welcome message
     */
    public static function get_enrolled_users_by_category($categoryid) {
        global $DB;
        $catdata = array(
            'status' => false,
            'labels' => [],
            'data' => [],
            'background_color' => '',
            'hoverBackground_color' => ''
        );
        $query = "SELECT id, fullname, shortname FROM {course} WHERE category = " . $categoryid;
        $courselist = $DB->get_records_sql($query);
        if ($courselist) {
            foreach ($courselist as $course) {
                $context = \context_course::instance($course->id);
                $query = "SELECT count(u.id) count
                            FROM {role_assignments} a,
                                 {user} u,
                                 {role} r
                          WHERE contextid = ?
                            AND a.roleid = r.id
                            AND a.userid = u.id
                            AND r.archetype LIKE ?";
                $count = $DB->get_records_sql($query, array($context->id, '%student%'));
                $count = key($count);
                $courselist[$course->id]->count = $count;
            }
            usort($courselist, function ($variable1, $variable2) {
                return $variable2->count - $variable1->count;
            });
            $labels = $data = $backgroundcolor = $hoverbackgroundcolor = array();
            $colors = array('#264485', '#0051F9', '#37BE71', '#4caf50', '#8bc34a', '#ffeb3b', '#ff9800', '#f44336', '#9c27b0', '#673ab7', '#3f51b5');
            $others = $otherscount = 0;
            foreach ($courselist as $index => $course) {
                if ($index > 9) {
                    $others = 1;
                    $otherscount += $course->count;
                } else {
                    array_push($labels, $course->shortname);
                    array_push($data, $course->count);
                    array_push($backgroundcolor, $colors[$index]);
                    array_push($hoverbackgroundcolor, $colors[$index]);
                }
            }
            if ($others > 0) {
                array_push($labels, get_string('other', 'moodle'));
                array_push($data, $otherscount);
                array_push($backgroundcolor, $colors[10]);
                array_push($hoverbackgroundcolor, $colors[10]);
            }
            $catdata['status'] = true;
            $catdata['labels'] = $labels;
            $catdata['data'] = $data;
            $catdata['background_color'] = $backgroundcolor;
            $catdata['hoverBackground_color'] = $hoverbackgroundcolor;
        }
        return $catdata;
    }

    public function generate_block_content($context=[]) {

        global $OUTPUT, $CFG;

        return $OUTPUT->render_from_template("local_edwiserpagebuilder/remuiblck/enrolledusers", $context);
    }
}
