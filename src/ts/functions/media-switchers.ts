import fetchMediaContent from "./fetch-media-content";
import fetchedMediaHeight from "./fetched-media-height";

import mediaDialogs from "./media-dialogs";

export default function mediaSwitchers() {
	console.log("--- Media Switchers Loaded ---");

	// Set fixed height for media content wrapper
	fetchedMediaHeight();

	const skeleton = document.querySelector(
		"[data-fetched-skeleton]"
	) as HTMLElement;
	const fetchTarget = document.querySelector(
		"[data-fetched-media]"
	) as HTMLElement;

	const switchers = document.querySelectorAll("[data-media-switcher]");
	Array.from(switchers).forEach((el: HTMLButtonElement, key: number) => {
		el.addEventListener("click", async (ev) => {
			ev.preventDefault();

			skeleton.style.display = "grid";
			fetchTarget.innerHTML = "";
			fetchTarget.style.display = "none";

			Array.from(switchers).forEach((switcher) => {
				switcher.classList.remove("active");
			});

			el.classList.add("active");

			const posts_type = el.getAttribute("data-media-switcher");

			let posts = await fetchMediaContent(posts_type);

			fetchTarget.innerHTML = posts;

			if (posts) {
				setTimeout(() => {
					skeleton.style.display = "none";
					fetchTarget.style.display = "block";
				}, 1500);
			}

			const postsDialog = fetchTarget.querySelector(
				"dialog"
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

			const postsBtns = fetchTarget.querySelectorAll(
				"[data-fetched-play]"
			) as NodeListOf<HTMLButtonElement>;

			postsBtns.forEach((play) => {
				console.log(play);

				const mediaSrc = play.getAttribute("data-fetched-play-src");
				const mediaContent = play.getAttribute("data-fetched-play");

				console.log(mediaSrc, mediaContent);

				play.addEventListener("click", (ev) => {
					ev.preventDefault();
					mediaDialogs(mediaSrc, mediaContent);
				});
			});
		});
		el.classList.remove("disabled");
		if (key == 0) el.click();
	});
}
