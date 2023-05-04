import renderYouTubeVids from "./functions/render-youtube-video";

window.addEventListener("DOMContentLoaded", () => {
	renderYouTubeVids();

	// const modals = document.querySelectorAll("[data-modal]");
	// Array.from(modals).forEach((modal: HTMLModElement) => {
	// 	modal.addEventListener("click", (ev) => {
	// 		const dialog = modal.closest("dialog");
	// 		const dialogIframe = modal.querySelector("iframe");
	// 		if (dialogIframe) {
	// 			dialogIframe.src = "";
	// 		}
	// 		if (dialog) {
	// 			dialog.close();
	// 		}
	// 	});
	// });
});
