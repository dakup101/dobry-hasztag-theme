import { ajaxUrl } from "../helper";
import scheduleDialog from "./schedule-dialog";

export default function fetchScheduleItemsByMonth() {
	console.log("--- Fetching Months ---");

	const scheduleEventsWrapper = document.querySelector("[data-month-content]");
	const skeleton = document.querySelector("[data-month-skeleton]");
	const scheduleDatesItems = document.querySelectorAll("[data-fetch-month]");

	Array.from(scheduleDatesItems).forEach(
		(date: HTMLButtonElement, key: number) => {
			const firstDay = date.dataset.start;
			const lastDay = date.dataset.end;
			date.addEventListener("click", async (ev) => {
				ev.preventDefault();

				skeleton.classList.remove("hidden");
				scheduleEventsWrapper.classList.add("hidden");

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
				data.append("action", "schedule_content_by_month");
				data.append("firstDay", firstDay);
				data.append("lastDay", lastDay);

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

				scheduleDialog();

				skeleton.classList.add("hidden");
				scheduleEventsWrapper.classList.remove("hidden");
			});

			if (key == 0) date.click();
		}
	);
}
