import Swiper, { Pagination, Autoplay } from "swiper";
import "swiper/css/bundle";

export default function scheduleItemsGallerySlider() {
	const galleries = document.querySelectorAll("[data-schedule-item-gallery]");
	Array.from(galleries).forEach((el: HTMLElement) => {
		const swiper = new Swiper(el, {
			modules: [Pagination, Autoplay],
			slidesPerView: 1,
			spaceBetween: 0,
			autoplay: {
				delay: 1500,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".schedule-item-gallery-nav",
				clickable: true,
			},
		});
	});
}
