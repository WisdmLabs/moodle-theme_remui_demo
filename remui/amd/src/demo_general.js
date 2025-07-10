/* eslint-disable no-console */
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
 * TODO describe module edit_switch_handler
 *
 * @module     theme_remui/edit_switch_handler
 * @copyright  2025 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(["jquery"], function ($) {
  const init = (uniqid) => {
    const $editSwitch = $("#" + uniqid + "-editingswitch");

    $editSwitch.on("change", () => {
      // Store current URL parameters
      const currentUrl = new URL(window.location.href);
      const searchParams = currentUrl.searchParams.toString();

      // Store parameters in sessionStorage
      if (searchParams && searchParams.includes("legacy")) {
        sessionStorage.setItem("editSwitchParams", searchParams);
      }
    });

    // Handle stored params on window load
    $(window).on("load", () => {
      setTimeout(() => {
        const storedParams = sessionStorage.getItem("editSwitchParams");
        const isHomePage = $("body").hasClass("pagelayout-frontpage");

        if (storedParams && isHomePage) {
          const newUrl = new URL(window.location.href);
          const currentParams = newUrl.searchParams;
          const storedParamsObj = new URLSearchParams(storedParams);

          storedParamsObj.forEach((value, key) => {
            currentParams.set(key, value);
          });

          newUrl.search = currentParams.toString();
          window.history.replaceState({}, "", newUrl);
          // Reload the page after adding parameters
          window.location.reload();
        }

        if (storedParams) {
          sessionStorage.removeItem("editSwitchParams");
        }
      }, 400);
    });
  };

  return {
    init: init,
  };
});
