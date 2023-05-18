import { ajaxUrl } from "../helper";

export default async function fetchPeopleContent() {
	const data = new FormData();
	data.append("action", "people_content");
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
