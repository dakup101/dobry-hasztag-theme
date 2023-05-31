import { ajaxUrl } from "../helper";
import scheduleItemsGallerySlider from "./schedule-item-gallery-slider";

const eventLoader =
	'<div class="w-full py-10 flex items-center justify-center">' +
	'<div class="lds-ring"><div></div><div></div><div></div><div></div></div>' +
	"</div>";

export default function scheduleDialog() {
	const triggers = document.querySelectorAll(
		"[data-event-id]"
	) as NodeListOf<HTMLButtonElement>;

	const dialog = document.querySelector(
		"[data-schedule-dialog]"
	) as HTMLDialogElement;

	const dialogContent = dialog.querySelector(
		"[data-event-content]"
	) as HTMLElement;

	const dialogClose = dialog.querySelector("button") as HTMLButtonElement;

	triggers.forEach((trigger) => {
		trigger.addEventListener("click", async (ev) => {
			ev.preventDefault();

			dialogContent.innerHTML = eventLoader;
			dialog.showModal();

			const eventId = trigger.getAttribute("data-event-id");

			const data = new FormData();
			data.append("action", "event_content");
			data.append("eventId", eventId);

			const event = await fetch(ajaxUrl, {
				method: "POST",
				body: data,
				credentials: "same-origin",
			})
				.then((response) => response.text())
				.then((text) => {
					return text;
				});

			dialogContent.innerHTML = event;
			scheduleItemsGallerySlider();
		});
	});

	dialogClose.addEventListener("click", (ev) => {
		ev.preventDefault();
		dialog.close();
		dialogContent.innerHTML = eventLoader;
	});
}
