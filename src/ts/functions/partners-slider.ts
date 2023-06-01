import Swiper, { FreeMode, Autoplay, A11y } from "swiper";
import "swiper/css/bundle";

export default function partnersSlider() {
	console.log("--- Partners Slider Loaded ---");

	const sliderOne = new Swiper("[data-partners-slider]", {
		modules: [FreeMode, Autoplay, A11y],
		loop: true,
		spaceBetween: 50,
		a11y: {
			enabled: false,
		},
		autoplay: {
			delay: 1,
			disableOnInteraction: false,
		},
		freeMode: {
			enabled: true,
			momentum: false,
		},
		speed: 6000,
		breakpoints: {
			320: {
				slidesPerView: 2,
				speed: 3000,
			},
			540: {
				slidesPerView: 3,
				speed: 3000,
			},
			768: {
				slidesPerView: 4,
				speed: 4000,
			},
			1040: {
				slidesPerView: 6,
				speed: 5000,
			},
		},
	});
}
