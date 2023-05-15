import fetchedMediaHeight from "./functions/fetched-media-height";
import mediaSwitchers_handle from "./handlers/media-switcher-handle";
import socialMarquee_handle from "./handlers/social-marquee-handle";
import socialDialog_handle from "./handlers/social-dialog-handle";

window.addEventListener("DOMContentLoaded", async () => {
	fetchedMediaHeight();
	mediaSwitchers_handle();
	socialMarquee_handle();
	socialDialog_handle();
});
