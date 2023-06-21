export default function mediaDialogs(mediaSrc, mediaContent, mediaType = "") {
	const dialog = document.querySelector("[data-media-dialog='" + mediaSrc + "']") as HTMLDialogElement;

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
			const igVideo = dialog.querySelector("video") as HTMLVideoElement;

			if (mediaType == "VIDEO") {
				igVideo.style.display = "block";
				igVideo.src = mediaContent + "#t=0.1";
			} else {
				igImg.style.display = "block";
				igImg.setAttribute("src", mediaContent);
			}
			break;
		}
	}

	dialog.showModal();
}
