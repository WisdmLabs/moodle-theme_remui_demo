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
use context_system;
use context_user;

trait set_demo_layouttype
{
    /**
     * Describes the parameters for set_demo_layouttype
     * @return external_function_parameters
     */
    public static function set_demo_layouttype_parameters()
    {
        return new external_function_parameters(
            array(
                'blocklayout' => new external_value(PARAM_TEXT, 'Block layout string')
            )
        );
    }

    /**
     * Store the block layout string in theme_remui config
     * @param string $blocklayout Block layout string
     * @return bool True if successful, false otherwise
     */
    public static function set_demo_layouttype($blocklayout)
    {
        $result = set_config('demoblocklayout', $blocklayout, 'theme_remui');
        if($result) {
            $result = set_config('redirecttodemoblocklayout', $blocklayout, 'theme_remui');
        }

        return $result;
    }

    /**
     * Describes the set_demo_layouttype_returns value
     * @return external_value
     */
    public static function set_demo_layouttype_returns()
    {
        return new external_value(PARAM_BOOL, 'True if successful, false otherwise');
    }
}
