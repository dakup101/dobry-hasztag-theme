import { ajaxUrl } from "../helper";

export default async function fetchMediaContent(postType) {
	const data = new FormData();
	data.append("action", "media_content");
	data.append("post_type", postType);
	return await fetch(ajaxUrl, {
		method: "POST",
		body: data,
		credentials: "same-origin",
	})
		.then((response) => response.text())
		.then((text) => {
			return text;
		});
}
