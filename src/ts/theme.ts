import mediaSwitchers_handle from "./handlers/media-switcher-handle";
import socialMarquee_handle from "./handlers/social-marquee-handle";
import socialDialog_handle from "./handlers/social-dialog-handle";
import peopleSlider_handle from "./handlers/people-slider-handle";
import simplebar_handle from "./handlers/simplebar-handle";
import scheduleDatesSlider_handle from "./handlers/schedule-dates-handle";
import copySiteUrl_handle from "./handlers/copy-site-url-to-clipboard-handle";
import partnersSlider_handle from "./handlers/partners-slider-handle";

window.addEventListener("DOMContentLoaded", async () => {
	simplebar_handle();
	mediaSwitchers_handle();
	socialMarquee_handle();
	socialDialog_handle();
	peopleSlider_handle();
	scheduleDatesSlider_handle();
	copySiteUrl_handle();
	partnersSlider_handle();
});
