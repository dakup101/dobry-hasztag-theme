import { fetchTemplate } from "../helper";

export default function getTemplateObj(template: HTMLTemplateElement) {
	console.log(template);

	const templateOjb = {
		button: template.content.querySelector("button") as HTMLButtonElement,
		thumbnail: template.content.querySelector(
			"[data-fetched-img]"
		) as HTMLImageElement,
		userUrl: template.content.querySelector(
			"[data-fetched-user-url]"
		) as HTMLAnchorElement,
		userName: template.content.querySelector(
			"[data-fetched-user]"
		) as HTMLElement,
		date: template.content.querySelector("[data-fetched-date]") as HTMLElement,
		icon: template.content.querySelector("[data-fetched-icon]") as HTMLElement,
	} as fetchTemplate;

	return templateOjb;
}
