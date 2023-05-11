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

	const switchers = document.querySelectorAll("[data-media-switcher]");
	Array.from(switchers).forEach((el: HTMLButtonElement, key: number) => {
		el.addEventListener("click", async (ev) => {
			skeleton.style.display = "grid";
			fetchTarget.innerHTML = "";

			ev.preventDefault();
			el.classList.add("active");

			Array.from(switchers).forEach((switcher) => {
				switcher.classList.remove("active");
			});
			const posts_type = el.getAttribute("data-media-switcher");

			let posts = await fetchMediaContent(posts_type);

			if (posts) {
				skeleton.style.display = "none";
				fetchTarget.innerHTML = posts;
			}
		});

		if (key == 0) el.click();
	});
});
