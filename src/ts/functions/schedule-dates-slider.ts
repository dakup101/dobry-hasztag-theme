import Swiper, { Navigation, Scrollbar } from "swiper";
import "swiper/css/bundle";

import fetchScheduleItems from "./fetch-schedule-items";

export default function scheduleDatesSlider() {
	console.log("--- Schedule Dates Slider Loaded ---");

	const swiper = new Swiper("[data-schedule-dates]", {
		modules: [Navigation],
		slidesPerView: 9,
		spaceBetween: 32,
		navigation: {
			nextEl: ".schedule-next",
			prevEl: ".schedule-prev",
		},
	});

	fetchScheduleItems();
}
