import Swiper, { Navigation, Scrollbar } from "swiper";
import "swiper/css/bundle";

import fetchScheduleItems from "./fetch-schedule-items";

export default function scheduleDatesSlider() {
	console.log("--- Schedule Dates Slider Loaded ---");

	const swiper = new Swiper("[data-schedule-dates]", {
		modules: [Navigation],
		slidesPerView: 9,
		navigation: {
			nextEl: ".schedule-next",
			prevEl: ".schedule-prev",
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 2,
				spaceBetween: 32,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 32,
			},
			1240: {
				slidesPerView: 6,
				spaceBetween: 32,
			},
			1540: {
				slidesPerView: 9,
				spaceBetween: 32,
			},
		},
	});

	fetchScheduleItems();
}
