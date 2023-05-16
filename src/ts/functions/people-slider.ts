import Swiper, { Navigation, Scrollbar } from "swiper";
import "swiper/css/bundle";

export default function peopleSlider() {
	console.log("--- People Slider Loaded ---");

	const swiperWrapper = document.querySelector("[data-people]") as HTMLElement;
	const dragSize = swiperWrapper.dataset.dragSize
		? parseInt(swiperWrapper.dataset.dragSize)
		: 50;

	const swiper = new Swiper("[data-people]", {
		modules: [Scrollbar, Navigation],
		slidesPerView: 6,
		spaceBetween: 35,
		navigation: {
			nextEl: ".scrollbar-next",
			prevEl: ".scrollbar-prev",
		},
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true,
			dragSize: 50,
		},
	});
}
