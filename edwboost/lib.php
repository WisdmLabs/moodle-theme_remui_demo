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
 * Theme functions for theme_edwboost
 *
 * @package    theme_edwboost
 * @copyright  2025 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_edwboost_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';

    // Import the parent theme's main SCSS file
    $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');

    // Add custom SCSS here
    $scss .= file_get_contents($CFG->dirroot . '/theme/edwboost/scss/custom.scss');

    return $scss;
}

/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_edwboost_get_pre_scss($theme) {
    // This is where you can add SCSS variables that should be loaded before the main SCSS
    $scss = '';
    return $scss;
}

/**
 * Get extra SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_edwboost_get_extra_scss($theme) {
    // This is where you can add additional SCSS that will be included after the main SCSS
    $scss = '';
    return $scss;
}

