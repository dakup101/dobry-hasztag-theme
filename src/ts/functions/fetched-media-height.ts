export default function fetchedMediaHeight() {
	const fetchedMediaWrapper = document.querySelector(
		"[data-fetched-media-wrapper]"
	) as HTMLElement;
	if (!fetchedMediaWrapper) return;
	fetchedMediaWrapper.style.maxHeight = fetchedMediaWrapper.scrollHeight + "px";
}
