import mediaSwitchers_handle from "./handlers/media-switcher-handle";
import socialMarquee_handle from "./handlers/social-marquee-handle";
import socialDialog_handle from "./handlers/social-dialog-handle";
import peopleSlider_handle from "./handlers/people-slider-handle";
import simplebar_handle from "./handlers/simplebar-handle";
import scheduleDatesSlider_handle from "./handlers/schedule-dates-handle";
import copySiteUrl_handle from "./handlers/copy-site-url-to-clipboard-handle";
import partnersSlider_handle from "./handlers/partners-slider-handle";
import lightbox_handle from "./handlers/lightbox-handle";
import articlesPagination_handle from "./handlers/articles-pagination";
import scheduleItemGallery_handle from "./handlers/schedule-item-gallery-handle";
import hero_handle from "./handlers/hero-handle";
import fetchScheduleItemsByMonth_handle from "./handlers/fetch-schedule-items-by-month-handle";
import contactDialogs_handle from "./handlers/contact-dialog-handle";

import mobileNav from "./functions/mobile-nav";

window.addEventListener("DOMContentLoaded", async () => {
	simplebar_handle();
	mediaSwitchers_handle();
	socialMarquee_handle();
	socialDialog_handle();
	peopleSlider_handle();
	scheduleDatesSlider_handle();
	copySiteUrl_handle();
	partnersSlider_handle();
	lightbox_handle();
	articlesPagination_handle();
	scheduleItemGallery_handle();
	hero_handle();
	fetchScheduleItemsByMonth_handle();
	contactDialogs_handle();

	mobileNav();
});
