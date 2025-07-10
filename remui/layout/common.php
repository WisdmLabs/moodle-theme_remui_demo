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
 * A two column layout for the remui theme.
 *
 * @package   theme_remui
 * @copyright (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use theme_remui\utility;

defined('MOODLE_INTERNAL') || die();

$switchtheme = optional_param('switchtheme', null, PARAM_TEXT);
if ($switchtheme) {
    set_config("switchtheme", $switchtheme, "theme_remui");
}

require_once($CFG->libdir . '/behat/lib.php');
require_once($CFG->dirroot . '/course/lib.php');

global $PAGE;
theme_remui_set_dynamic_settings();

$loaderimage = false;
if (get_config('theme_remui','enablesiteloader')) {
    // Adding loader image before everything else.
    $loaderimage = \theme_remui\utility::get_site_loader();
}

// Add block button in editing mode.
$addblockbutton = $OUTPUT->addblockbutton();

// CUSTOMIZATION - START
$demoblocklayouts = [
    "corporate" => $CFG->wwwroot. '/mod/page/view.php?id=292',
    "school" => $CFG->wwwroot. '/mod/page/view.php?id=288',
    "university" => $CFG->wwwroot. '/mod/page/view.php?id=290',
    "classic" => $CFG->wwwroot. '/mod/page/view.php?id=287',
    "training" => $CFG->wwwroot. '/local/edwiserpagebuilder/page.php?id=17',
    "videoformatdemo" => $CFG->wwwroot. '/course/view.php?id=26',
];

// if (get_config("theme_remui", "redirecttodemoblocklayout")) {
//     $redirectUrl = $demoblocklayouts[get_config("theme_remui", "redirecttodemoblocklayout")];
//     unset_config('redirecttodemoblocklayout', 'theme_remui');
//     redirect($redirectUrl);
//     die();
// }

$isvideoformatdemo = get_config("theme_remui", "isvideoformatdemo");

if (get_config("theme_remui", "edw_external_data")) {
    $redirectUrl = "";
    $edwexternaldata = get_config("theme_remui", "edw_external_data");
    $edwexternaldata = json_decode($edwexternaldata);

    if (isset($edwexternaldata->blocklayout)) {
        $redirectUrl = $demoblocklayouts[$edwexternaldata->blocklayout];
        $edwexternaldata->loginblocklayout = $edwexternaldata->blocklayout;

        if ($edwexternaldata->blocklayout == "videoformatdemo") {
            $isvideoformatdemo = true;
            set_config('isvideoformatdemo', true, 'theme_remui');
        }

        unset($edwexternaldata->blocklayout); // Remove blocklayout from config object
    }

    if (isset($edwexternaldata->email)) {
        setcookie('remui_user_email', $edwexternaldata->email, time() + (86400 * 30), '/');
        unset($edwexternaldata->email);
    }

    set_config('edw_external_data', json_encode($edwexternaldata), 'theme_remui'); // Update config

    if ($redirectUrl) {
        redirect($redirectUrl);
    }
}

if (isloggedin()) {
    $switchtheme = get_config("theme_remui", "switchtheme");

    if ($switchtheme) {
        unset_config("switchtheme", "theme_remui");
        $theme = \theme_config::load($switchtheme);
        set_config('theme', $theme->name);
        redirect($CFG->wwwroot . "/my");
    }
}

// CUSTOMIZATION - END

if (isloggedin()) {
    $courseindexopen = (get_user_preferences('drawer-open-index', true) == true);
    $blockdraweropen = (get_user_preferences('drawer-open-block') == true);
    // Always pinned for quiz and book activity.
    $activities = array("book", "quiz");
    if (isset($PAGE->cm->id) && in_array($PAGE->cm->modname, $activities)) {
        $blockdraweropen = true;
    }
} else {
    $courseindexopen = false;
    $blockdraweropen = false;
}

if (defined('BEHAT_SITE_RUNNING')) {
    $blockdraweropen = true;
}

$extraclasses = ['uses-drawers'];
if ($courseindexopen) {
    $extraclasses[] = 'drawer-open-index';
}

if (isguestuser()) {
    $extraclasses[] = 'isguest';
}
$blockshtml = $OUTPUT->blocks('side-pre');
$hasblocks = (strpos($blockshtml, 'data-block=') !== false || !empty($addblockbutton));
if (!$hasblocks) {
    $blockdraweropen = false;
}
$courseindex = core_course_drawer();
if (!$courseindex) {
    $courseindexopen = false;
}

$extraclasses[] = \theme_remui\utility::get_main_bg_class();

// Focus data.
$coursehandler = new \theme_remui_coursehandler();
$focusdata = $coursehandler->get_focus_context_data();
if (isset($focusdata['on']) && $focusdata['on']) {
    $extraclasses[] = 'focusmode';
}

$forceblockdraweropen = $OUTPUT->firstview_fakeblocks();

$secondarynavigation = false;
$overflow = '';
if ($PAGE->has_secondary_navigation()) {
    $tablistnav = $PAGE->has_tablist_secondary_navigation();
    $moremenu = new \core\navigation\output\more_menu($PAGE->secondarynav, 'nav-tabs', true, $tablistnav);
    $secondarynavigation = $moremenu->export_for_template($OUTPUT);
    $overflowdata = $PAGE->secondarynav->get_overflow_menu_data();
    if (!is_null($overflowdata)) {
        $overflow = $overflowdata->export_for_template($OUTPUT);
    }
}

$primary = new core\navigation\output\primary($PAGE);
$renderer = $PAGE->get_renderer('core');
$primarymenu = $primary->export_for_template($renderer);

// Recent Courses Menu.
if (isloggedin()) {
    $primarymenu = \theme_remui\utility::get_recent_courses_menu($primarymenu);
}

// Course Categories Menu.
$primarymenu = \theme_remui\utility::get_coursecategory_menu($primarymenu);

// Login Menu Addition.
if (!isloggedin() && \theme_remui\toolbox::get_setting('navlogin_popup')) {
    $primarymenu = \theme_remui\utility::get_login_menu_data($primarymenu);
}
// Here we Add extra icons to profile dropdown menu.
if (isloggedin() && !isguestuser()) {
    $primarymenu = \theme_remui\utility::add_profile_dropdown_icons($primarymenu);
}

// Init product notification configuration.
if ($notification = \theme_remui\utility::get_inproduct_notification()) {
    $templatecontext['notification'] = $notification;
}

// Customizer fonts.
$customizer = \theme_remui\customizer\customizer::instance();
$fonts = $customizer->get_fonts_to_load();

$buildregionmainsettings = !$PAGE->include_region_main_settings_in_header_actions() && !$PAGE->has_secondary_navigation();
// If the settings menu will be included in the header then don't add it here.
$regionmainsettingsmenu = $buildregionmainsettings ? $OUTPUT->region_main_settings_menu() : false;

$header = $PAGE->activityheader;
$headercontent = $header->export_for_template($renderer);
$lcontroller = new \theme_remui\controller\LicenseController();

$democontext = \theme_remui\utility::get_demonavbar_context();
if ($isvideoformatdemo) {
    $extraclasses[] = 'videoformatdemo';
    $democontext['isvideoformatdemo'] = true;
}

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'fonts' => $fonts,
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'show_license_notice' => \theme_remui\utility::show_license_notice(),
    'courseindexopen' => $courseindexopen,
    'blockdraweropen' => $blockdraweropen,
    'courseindex' => $courseindex,
    'primarymoremenu' => $primarymenu['moremenu'],
    'secondarymoremenu' => $secondarynavigation ?: false,
    'mobileprimarynav' => $primarymenu['mobileprimarynav'],
    'usermenu' => $primarymenu['user'],
    'langmenu' => $primarymenu['lang'],
    'forceblockdraweropen' => $forceblockdraweropen,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'overflow' => $overflow,
    'headercontent' => $headercontent,
    'addblockbutton' => $addblockbutton,
    'isloggedin' => isloggedin(),
    'footerdata' => \theme_remui\utility::get_footer_data(),
    'cansendfeedback' => (is_siteadmin()) ? true : false,
    'feedbacksender_emailid' => isset($USER->email) ? $USER->email : '',
    'feedback_loading_image' => new moodle_url('/theme/remui/pix/siteinnerloader.svg'),
    'loaderimage' => $loaderimage,
    'democontext' => $democontext,
];

if (isloggedin() && isset($primarymenu['edwisermenu'])) {
    $templatecontext['edwisermenu'] = $primarymenu['edwisermenu'];
}

$templatecontext['sections'] = $templatecontext['footerdata']['sections'];
$templatecontext['focusdata'] = $focusdata;

if (\theme_remui\toolbox::get_setting('enableannouncement') && !get_user_preferences('remui_dismised_announcement')) {
    $extraclasses[] = 'remui-notification';
    $templatecontext['sitenotification'] = \theme_remui\utility::render_site_announcement();
}

if (\theme_remui\toolbox::get_setting('enabledictionary') && !$PAGE->user_is_editing()) {
    // Enable dictionary only when editing is off.
    $templatecontext['enabledictionary'] = true;
}

if ("admin-setting-themesettingremui" == $PAGE->pagetype) {
    $templatecontext['enablebeacon'] = true;
}
