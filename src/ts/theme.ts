import fetchedMediaHeight from "./functions/fetched-media-height";
import fetchMediaContent from "./functions/fetch-media-content";

window.addEventListener("DOMContentLoaded", async () => {
	fetchedMediaHeight();

	const skeleton = document.querySelector(
		"[data-fetched-skeleton]"
	) as HTMLElement;
	const fetchTarget = document.querySelector(
		"[data-fetched-media]"
	) as HTMLElement;
	let posts = await fetchMediaContent("youtube_post");
	if (posts) {
		skeleton.style.display = "none";
		fetchTarget.innerHTML = posts;
	}

	console.log(posts);
});
