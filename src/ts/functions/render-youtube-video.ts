import fetchYouTubeVids from "./fetch-youtube-vids";
import getTemplateObj from "./get-fetched-template-obj";

import { YouTubeVideo, ytIcon, ytEmbedBase, fetchTemplate } from "../helper";

import moment from "moment";
import "moment/locale/pl";

export default async function renderYouTubeVids() {
	const vids = await fetchYouTubeVids();

	const wrapper = document.querySelector('[data-fetched-source="yt"]');
	if (!wrapper) return;

	const template = wrapper.querySelector("template");

	Array.from(vids).forEach((vid: YouTubeVideo) => {
		const vidTemplate = template.cloneNode(true) as HTMLTemplateElement;
		const templateItems = getTemplateObj(vidTemplate) as fetchTemplate;

		templateItems.button.addEventListener("click", (ev) => {
			ev.preventDefault();
			const modal = document.querySelector(
				"[data-yt-modal]"
			) as HTMLDialogElement;
			const iframe = modal.querySelector("iframe") as HTMLIFrameElement;
			iframe.src = ytEmbedBase + vid.id;
			modal.showModal();
		});

		templateItems.thumbnail.src = vid.thumbnail;
		templateItems.button.setAttribute("data-fetched-play", vid.id);
		templateItems.button.setAttribute("data-fetched-play-src", "yt");
		templateItems.userName.innerHTML = vid.channelTitle;
		templateItems.userUrl.href = vid.channelLink;
		templateItems.icon.innerHTML = ytIcon;

		const publishDate = moment.utc(vid.publishDate);
		const publishDateFormatted = publishDate.locale("pl").format("LL");

		templateItems.date.innerHTML = publishDateFormatted;

		console.log(vid);

		wrapper.appendChild(vidTemplate.content);
	});
}
