export default function mediaDialogs(mediaSrc, mediaContent) {
	const dialog = document.querySelector(
		"[data-media-dialog='" + mediaSrc + "']"
	) as HTMLDialogElement;

	console.log([mediaSrc, mediaContent]);

	if (!dialog) return;

	switch (mediaSrc) {
		case "yt": {
			// mediaContent is video ID
			const embedBase = "https://www.youtube.com/embed/";
			const embedLink = embedBase + mediaContent + "?autoplay=1";

			const ytIframe = dialog.querySelector("iframe");
			ytIframe.src = embedLink;
			break;
		}

		case "hero": {
			// mediaContent is video ID
			const embedBase = "https://www.youtube.com/embed/";
			const embedLink = embedBase + mediaContent + "?autoplay=1";

			const ytIframe = dialog.querySelector("iframe");
			ytIframe.src = embedLink;
			break;
		}

		case "ig": {
			const igImg = dialog.querySelector("img");
			igImg.setAttribute("src", mediaContent);
			console.log(igImg);
			break;
		}
	}

	dialog.showModal();
}
