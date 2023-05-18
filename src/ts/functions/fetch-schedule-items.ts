import { ajaxUrl } from "../helper";
import scheduleItemsGallerySlider from "./schedule-item-gallery-slider";
export default function fetchScheduleItems() {
	const scheduleDatesWrapper = document.querySelector("[data-schedule-dates]");
	const scheduleEventsWrapper = document.querySelector("[data-schedule-items]");
	const scheduleSkeleton = document.querySelector(
		"[data-schedule-items-skeleton]"
	);

	const scheduleDatesItems =
		scheduleDatesWrapper.querySelectorAll("[data-date]");

	Array.from(scheduleDatesItems).forEach(
		(date: HTMLButtonElement, key: number) => {
			const fetchDate = date.dataset.date;
			date.addEventListener("click", async (ev) => {
				ev.preventDefault();

				scheduleEventsWrapper.innerHTML = "";
				scheduleSkeleton.classList.remove("hidden");

				// Styles
				Array.from(scheduleDatesItems).forEach((el) => {
					el.classList.remove("bg-yellow");
					el.classList.remove("translate-x-1.5");
					el.classList.remove("translate-y-1.5");
				});

				date.classList.add("bg-yellow");
				date.classList.add("translate-x-1.5");
				date.classList.add("translate-y-1.5");

				//Ajax
				const data = new FormData();
				data.append("action", "schedule_content");
				data.append("date", fetchDate);

				const events = await fetch(ajaxUrl, {
					method: "POST",
					body: data,
					credentials: "same-origin",
				})
					.then((response) => response.text())
					.then((text) => {
						return text;
					});

				scheduleEventsWrapper.innerHTML = events;
				scheduleSkeleton.classList.add("hidden");

				// Events Galleries
				scheduleItemsGallerySlider();
			});

			if (key == 0) date.click();
		}
	);
}
