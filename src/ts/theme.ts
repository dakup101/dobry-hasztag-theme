import fetchedMediaHeight from "./functions/fetched-media-height";
import mediaSwitchers_handle from "./handlers/media-switcher-handle";

window.addEventListener("DOMContentLoaded", async () => {
	fetchedMediaHeight();
	mediaSwitchers_handle();
});
