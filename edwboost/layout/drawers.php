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
 * A custom layout for the frontpage.
 *
 * @package    theme_edwboost
 * @copyright  2025 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// $PAGE->add_body_class('limitedwidth');

require_once($CFG->libdir . '/behat/lib.php');
require_once($CFG->dirroot . '/course/lib.php');

// Add block button in editing mode.
$addblockbutton = $OUTPUT->addblockbutton();

if (isloggedin()) {
    $courseindexopen = (get_user_preferences('drawer-open-index', true) == true);
    $blockdraweropen = (get_user_preferences('drawer-open-block') == true);
} else {
    $courseindexopen = false;
    $blockdraweropen = false;
}

if (defined('BEHAT_SITE_RUNNING') && get_user_preferences('behat_keep_drawer_closed') != 1) {
    $blockdraweropen = true;
}

$extraclasses = ['uses-drawers'];
if ($courseindexopen) {
    $extraclasses[] = 'drawer-open-index';
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

$bodyattributes = $OUTPUT->body_attributes($extraclasses);
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
$buildregionmainsettings = !$PAGE->include_region_main_settings_in_header_actions() && !$PAGE->has_secondary_navigation();
// If the settings menu will be included in the header then don't add it here.
$regionmainsettingsmenu = $buildregionmainsettings ? $OUTPUT->region_main_settings_menu() : false;

$header = $PAGE->activityheader;
$headercontent = $header->export_for_template($renderer);



$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'bodyattributes' => $bodyattributes,
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
];

// Top region full width.
if (in_array("full-width-top", $this->page->blocks->get_regions())) {
    $addblockbuttonfwtop = $OUTPUT->addblockbutton('full-width-top');
    $sidefwtopblocks = $OUTPUT->blocks('full-width-top');
    // Strlen Calculation is total jugad.
    if (trim($addblockbuttonfwtop) != '' || (trim($sidefwtopblocks) != '' && strlen($sidefwtopblocks) > 117)) {
        $templatecontext['addblockbuttonfwtop'] = $addblockbuttonfwtop;
        $templatecontext['sidefwtopblocks'] = $sidefwtopblocks;
        $templatecontext['canaddfwtopblocks'] = true;
    }
}

// bottom region full width.
if (in_array("full-bottom", $this->page->blocks->get_regions())) {
    $addblockbuttonfwbottom = $OUTPUT->addblockbutton('full-bottom');
    $sidefwbottomblocks = $OUTPUT->blocks('full-bottom');
    // Strlen Calculation is total jugad.
    if (trim($addblockbuttonfwbottom) != '' || (trim($sidefwbottomblocks) != '' && strlen($sidefwbottomblocks) > 117)) {
        $templatecontext['addblockbuttonfullwidthbottom'] = $addblockbuttonfwbottom;
        $templatecontext['sidefullwidthbottomblocks'] = $sidefwbottomblocks;
        $templatecontext['canaddfullwidthbottomblocks'] = true;
    }
}

// Main content Bottom Region.
if (in_array("side-top", $this->page->blocks->get_regions())) {
    $addblockbuttontop = $OUTPUT->addblockbutton('side-top');
    $sidetopblocks = $OUTPUT->blocks('side-top');
    // Strlen Calculation is total jugad.
    if (trim($addblockbuttontop) != '' || (trim($sidetopblocks) != '' && strlen($sidetopblocks) > 117)) {
        $templatecontext['addblockbuttontop'] = $addblockbuttontop;
        $templatecontext['sidetopblocks'] = $sidetopblocks;
        $templatecontext['canaddtopblocks'] = true;
    }
}

if (in_array("side-bottom", $this->page->blocks->get_regions())) {
    $addblockbuttonbottom = $OUTPUT->addblockbutton('side-bottom');
    $sidebottomblocks = $OUTPUT->blocks('side-bottom');
    // Strlen Calculation is total jugad.
    if (trim($addblockbuttonbottom) != '' || (trim($sidebottomblocks) != '' && strlen($sidebottomblocks) > 117)) {
        $templatecontext['addblockbuttonbottom'] = $addblockbuttonbottom;
        $templatecontext['sidebottomblocks'] = $sidebottomblocks;
        $templatecontext['canaddbottomblocks'] = true;
    }
}

echo $OUTPUT->render_from_template('theme_edwboost/drawers', $templatecontext);
