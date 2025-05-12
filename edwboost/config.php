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
 * The configuration for theme_edwboost theme.
 *
 * @package    theme_edwboost
 * @copyright  2025 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'edwboost';
$THEME->parents = ['boost'];
$THEME->sheets = [];
$THEME->scss = function($theme) {
    return theme_edwboost_get_main_scss_content($theme);
};
$THEME->enable_dock = false;
$THEME->extrascsscallback = 'theme_edwboost_get_extra_scss';
$THEME->prescsscallback = 'theme_edwboost_get_pre_scss';
$THEME->yuicssmodules = [];
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;

// Define the custom regions for the frontpage
$THEME->layouts = [
    'frontpage' => [
        'file' => 'drawers.php',
        'regions' => ['side-pre', 'full-width-top', 'full-bottom'],
        'defaultregion' => 'side-pre',
        'options' => ['nonavbar' => false],
    ],
    // My dashboard page.
    'mydashboard' => array(
        'file' => 'drawers.php',
        'regions' => array('side-pre', 'side-top', 'side-bottom', 'full-width-top', 'full-bottom'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true, 'langmenu' => true),
    ),
];
