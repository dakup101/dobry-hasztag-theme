import fetchMediaContent from "./fetch-media-content";
import fetchedMediaHeight from "./fetched-media-height";

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

			if (posts) {
				fetchTarget.innerHTML = posts;
				skeleton.style.display = "none";
				fetchTarget.style.display = "block";
			}
		});
		el.classList.remove("disabled");
		if (key == 0) el.click();
	});
}
