import Swiper, { FreeMode, Autoplay, A11y } from "swiper";
import "swiper/css/bundle";

export default function socialMarquee() {
	console.log("--- Social Loaded ---");

	const sliderOne = new Swiper("[data-social-marquee]", {
		modules: [FreeMode, Autoplay, A11y],
		loop: true,
		spaceBetween: 0,
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
			768: {
				slidesPerView: 6,
				speed: 4000,
			},
			1040: {
				slidesPerView: 8,
				speed: 5000,
			},
		},
	});
}
