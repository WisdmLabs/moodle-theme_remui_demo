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
 * A login page layout for the remui theme.
 *
 * @package   theme_remui
 * @copyright (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;

$extraclasses = array();

$extraclasses[] = \theme_remui\utility::get_main_bg_class();

$extraclasses[] = get_config('theme_remui', 'loginpagelayout');

$bodyattributes = $OUTPUT->body_attributes($extraclasses);

// Customizer fonts.
$customizer = \theme_remui\customizer\customizer::instance();
$fonts = $customizer->get_fonts_to_load();

$loginbgurl = "";
if (get_config("theme_remui", "edw_external_data")) {
    $edwexternaldata = json_decode(get_config("theme_remui", "edw_external_data"));

    // Determine which layout to use (blocklayout takes precedence over loginblocklayout)
    $layouttype = null;
    if (!empty($edwexternaldata->blocklayout)) {
        $layouttype = $edwexternaldata->blocklayout;
    } else if (!empty($edwexternaldata->loginblocklayout)) {
        $layouttype = $edwexternaldata->loginblocklayout;
    }

    // Set login background URL if a layout type was found
    if ($layouttype) {
        if ($layouttype == "videoformatdemo") {
            set_config("edwiserdemoredirecturl", $CFG->wwwroot. '/course/view.php?id=26', 'theme_remui');    
        } else if ($layouttype == "pagebuilderdemo") {
            $loginbgurl = "https://staticcdn.edwiser.org/theme_remuiassets/images/demolayouts/classic.jpg";
        } else  {
            $loginbgurl = "https://staticcdn.edwiser.org/theme_remuiassets/images/demolayouts/{$layouttype}.jpg";
        }
    }
}

$templatecontext = [
    'loginbgurl' => $loginbgurl,
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'fonts' => $fonts,
    'output' => $OUTPUT,
    'bodyattributes' => $bodyattributes
];

$templatecontext['logocontext'] = $this->get_branding_context();
$templatecontext['signuptextcolor'] = get_config('theme_remui', 'signuptextcolor');
if (get_config('theme_remui', 'loginpagelayout') != 'logincenter') {
    $templatecontext['canshowdesc'] = true;
    $templatecontext['brandlogotext'] = format_text(get_config('theme_remui', 'brandlogotext'),FORMAT_HTML,array("noclean" => true));
}

// Enable accessibility widgets
\theme_remui\utility::enable_edw_aw_menu();
echo $OUTPUT->render_from_template('theme_remui/login', $templatecontext);
