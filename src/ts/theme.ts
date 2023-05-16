import mediaSwitchers_handle from "./handlers/media-switcher-handle";
import socialMarquee_handle from "./handlers/social-marquee-handle";
import socialDialog_handle from "./handlers/social-dialog-handle";

import peopleSlider from "./functions/people-slider";
import simplebar from "./functions/simplebar";

window.addEventListener("DOMContentLoaded", async () => {
	mediaSwitchers_handle();
	socialMarquee_handle();
	socialDialog_handle();
	peopleSlider();
	simplebar();
});
