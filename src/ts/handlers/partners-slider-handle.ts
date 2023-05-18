export default function partnersSlider_handle() {
	const target = document.querySelector("[data-partners-slider]");
	if (!target) return;

	console.log("--- Partners Slider Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/partners-slider"
				).then((module) => {
					module.default();
				});
				observer.unobserve(target);
			}
		});
	}, observerOpts);

	observer.observe(target);
}
