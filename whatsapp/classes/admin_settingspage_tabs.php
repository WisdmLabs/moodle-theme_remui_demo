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
 * Message Whatsapp Settings.
 *
 * @package   message_whatsapp
 * @copyright 2016 Ryan Wyllie
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class message_whatsapp_admin_settingspage_tabs extends admin_settingpage {

    /** @var The tabs */
    protected $tabs = array();

    /**
     * Add a tab.
     *
     * @param admin_settingpage $tab A tab.
     */
    public function add_tab(admin_settingpage $tab) {
        foreach ($tab->settings as $setting) {
            $this->settings->{$setting->name} = $setting;
        }
        $this->tabs[] = $tab;
        return true;
    }

    public function add($tab) {
        return $this->add_tab($tab);
    }

    /**
     * Get tabs.
     *
     * @return array
     */
    public function get_tabs() {
        return $this->tabs;
    }

    /**
     * Generate the HTML output.
     *
     * @return string
     */
    public function output_html() {
        global $OUTPUT, $CFG, $PAGE;

        $activetab = optional_param('activetab', get_config('message_whatsapp', 'activetab'), PARAM_ALPHA);
        unset_config('activetab', 'message_whatsapp');

        $context = array('tabs' => array());
        $havesetactive = false;

        $active = false;
        foreach ($this->get_tabs() as $tab) {

            // Default to first tab it not told otherwise.
            if (empty($activetab) && !$havesetactive) {
                $active = true;
                $havesetactive = true;
            } else if ($activetab === $tab->name) {
                $active = true;
            }

            $context['tabs'][] = array(
                'name' => $tab->name,
                'displayname' => $tab->visiblename,
                'html' => $tab->output_html(),
                'active' => $active,
            );
        }

        ob_start();
        // include_once($CFG->dirroot . '/theme/remui/information_center.php');
        include_once($CFG->dirroot . '/message/output/whatsapp/overview.php');
        $informationcenter = ob_get_clean();
        // Information center.
        $context['tabs'][] = array(
            'name' => 'informationcenter',
            'displayname' => get_string('informationcenter', 'message_whatsapp'),
            'html' => $informationcenter,
            'active' => $activetab == 'informationcenter' || !$active,
            'customclass' => 'whatsapptab',
        );

        if (empty($context['tabs'])) {
            return '';
        }

        return $OUTPUT->render_from_template('message_whatsapp/admin_setting_tabs', $context);
    }

}
