import Swiper, { Navigation, Scrollbar } from "swiper";
import "swiper/css/bundle";

export default function scheduleDatesSlider() {
	const swiper = new Swiper("[data-schedule-dates]", {
		modules: [Navigation],
		slidesPerView: 9,
		spaceBetween: 32,
		navigation: {
			nextEl: ".schedule-next",
			prevEl: ".schedule-prev",
		},
	});
}
