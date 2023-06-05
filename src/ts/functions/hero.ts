import mediaDialogs from "./media-dialogs";

export default function hero() {
	const heroVid = document.querySelector(".hero-play");

	const postsDialog = document.querySelector(
		"[data-media-dialog='hero']"
	) as HTMLDialogElement;

	postsDialog.querySelector("button").addEventListener("click", (ev) => {
		ev.preventDefault();

		const postDialogIframe = postsDialog.querySelector(
			"iframe"
		) as HTMLIFrameElement;
		if (postDialogIframe) {
			postDialogIframe.src = "";
		}
		postsDialog.close();
	});

	const mediaSrc = heroVid.getAttribute("data-fetched-play-src");
	const mediaContent = heroVid.getAttribute("data-fetched-play");

	console.log(mediaSrc, mediaContent);

	heroVid.addEventListener("click", (ev) => {
		ev.preventDefault();
		mediaDialogs(mediaSrc, mediaContent);
	});
}
