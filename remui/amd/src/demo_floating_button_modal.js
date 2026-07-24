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
 * Demo floating button modal handler.
 * Opens a modal when the demo floating button is clicked.
 *
 * @module     theme_remui/demo_floating_button_modal
 * @copyright  (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import Templates from 'core/templates';
import CancelModal from 'core/modal_cancel';

const SELECTOR = {
    DEMO_FLOATING_BUTTON: '#demo-floating-button',
    MODAL_DATA: '#demo-modal-data',
};

let listenerEventsRegistered = false;

/**
 * Read demo modal data from the embedded JSON script tag.
 * @returns {object|null}
 */
const getModalData = () => {
    const script = document.querySelector(SELECTOR.MODAL_DATA);
    if (!script) {
        return null;
    }
    try {
        return JSON.parse(script.textContent);
    } catch (e) {
        // eslint-disable-next-line no-console
        console.error('Failed to parse demo modal data', e);
        return null;
    }
};

/**
 * Build the modal body from the Mustache template using PHP-supplied data.
 * @returns {Promise<string>}
 */
const buildModalBody = () => {
    const data = getModalData() || { tabs: [] };
    return Templates.render('theme_remui/demo_pagebuilder_templates_modal', data);
};

/**
 * Switch active tab pane inside the modal body.
 * @param {HTMLElement} modalContainer
 * @param {string} tabKey
 */
const switchTabPane = (modalContainer, tabKey) => {
    modalContainer.querySelectorAll('.demo-tab-pane').forEach(pane => {
        pane.classList.add('d-none');
    });
    const targetPane = modalContainer.querySelector(`.demo-tab-pane[data-tab-pane="${tabKey}"]`);
    if (targetPane) {
        targetPane.classList.remove('d-none');
    }
};

/**
 * Set up hover scroll effect on card images (same behaviour as Edwiser Page Builder).
 * @param {HTMLElement} modalContainer
 */
const setupCardHoverScroll = (modalContainer) => {
    const cardItems = modalContainer.querySelectorAll('.demo-modal-card-item');

    cardItems.forEach(cardItem => {
        let intervalId = null;
        let transitionEndHandler = null;

        const handleMouseEnter = () => {
            const imgWrapper = cardItem.querySelector('.demo-modal-card-img-wrapper');
            const img = cardItem.querySelector('img');
            if (!imgWrapper || !img) {
                return;
            }

            const wrapperHeight = imgWrapper.offsetHeight;
            const imgHeight = img.offsetHeight;
            let scrollHeight = imgHeight - wrapperHeight + 40;

            img.style.animation = 'unset';

            if (scrollHeight <= 0) {
                return;
            }

            let scrollTime = scrollHeight / 100;
            if (scrollTime < 1) {
                scrollTime = 1;
            }

            img.style.transition = `top ${scrollTime}s ease-in-out`;
            img.style.top = `${-scrollHeight}px`;

            transitionEndHandler = () => {
                img.style.top = '0px';
            };
            img.addEventListener('transitionend', transitionEndHandler, {once: true});

            intervalId = setInterval(() => {
                img.style.top = `${-scrollHeight}px`;
                img.addEventListener('transitionend', () => {
                    img.style.top = '0px';
                }, {once: true});
            }, scrollTime * 2000);
        };

        const handleMouseLeave = () => {
            const img = cardItem.querySelector('img');
            if (intervalId) {
                clearInterval(intervalId);
                intervalId = null;
            }
            if (img) {
                if (transitionEndHandler) {
                    img.removeEventListener('transitionend', transitionEndHandler);
                    transitionEndHandler = null;
                }
                img.style.transition = 'unset';
                img.style.top = '0px';
            }
        };

        cardItem.addEventListener('mouseenter', handleMouseEnter);
        cardItem.addEventListener('mouseleave', handleMouseLeave);
    });
};

/**
 * Scroll a capsule into the centre of the nav on small screens.
 * @param {HTMLElement} capsule
 */
const scrollCapsuleToCenter = (capsule) => {
    if (window.innerWidth > 500) {
        return;
    }
    const nav = capsule.closest('.demo-modal-capsule-nav');
    if (!nav) {
        return;
    }
    const navWidth = nav.offsetWidth;
    const capsuleLeft = capsule.offsetLeft;
    const capsuleWidth = capsule.offsetWidth;
    const scrollLeft = capsuleLeft - (navWidth / 2) + (capsuleWidth / 2);
    nav.scrollTo({ left: scrollLeft, behavior: 'smooth' });
};
const registerListenerEvents = () => {
    document.addEventListener('click', e => {
        const demoButton = e.target.closest(SELECTOR.DEMO_FLOATING_BUTTON);
        if (demoButton) {
            e.preventDefault();

            buildModalBody().then(bodyHtml => {
                return CancelModal.create({
                    title: '',
                    template: 'theme_remui/demo_modal_cancel',
                    templateContext: {
                        classes: 'demo-pagebuilder-modal'
                    },
                    body: bodyHtml,
                });
            }).then(modal => {
                modal.show();
                modal.root.addClass('fullwidth-modal');

                const modalContainer = modal.getRoot()[0];
                setupCardHoverScroll(modalContainer);

                // Handle capsule nav clicks.
                modalContainer.addEventListener('click', ev => {
                    const capsule = ev.target.closest('.demo-modal-capsule-nav .capsule');
                    if (!capsule) {
                        return;
                    }
                    ev.preventDefault();
                    modalContainer.querySelectorAll('.demo-modal-capsule-nav .capsule').forEach(c => {
                        c.classList.remove('active');
                    });
                    capsule.classList.add('active');

                    // Scroll selected capsule to centre on mobile.
                    scrollCapsuleToCenter(capsule);

                    // Switch tab pane.
                    const tabKey = capsule.dataset.tab;
                    if (tabKey) {
                        switchTabPane(modalContainer, tabKey);
                    }
                });
            });
        }
    });
};

/**
 * Set up the actions.
 */
export const init = () => {
    if (!listenerEventsRegistered) {
        registerListenerEvents();
        listenerEventsRegistered = true;
    }
};
