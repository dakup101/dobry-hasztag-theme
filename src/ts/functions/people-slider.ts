import Swiper, { Navigation, Scrollbar } from "swiper";
import "swiper/css/bundle";

import fetchPeopleContent from "./fetch-people-content";

export default async function peopleSlider() {
	console.log("--- People Slider Loaded ---");

	const swiperWrapper = document.querySelector("[data-people]") as HTMLElement;

	const swiperContent = await fetchPeopleContent();

	swiperWrapper.innerHTML = swiperContent;

	if (!swiperWrapper.querySelector(".swiper-slide")) return;

	const swiper = new Swiper("[data-people]", {
		modules: [Scrollbar, Navigation],
		slidesPerView: 6,
		spaceBetween: 32,
		navigation: {
			nextEl: ".scrollbar-next",
			prevEl: ".scrollbar-prev",
		},
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true,
			dragSize: 50,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				initialSlide: 1,
			},
			640: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			1240: {
				slidesPerView: 5,
			},
			1540: {
				slidesPerView: 6,
			},
		},
	});
}
