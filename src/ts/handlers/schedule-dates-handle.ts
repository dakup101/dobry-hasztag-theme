export default function scheduleDatesSlider_handle() {
	const target = document.querySelector("[data-schedule-dates]");

	if (!target) return;

	console.log("--- Schedule Dates Slider Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/schedule-dates-slider"
				).then((module) => {
					const action = module.default;
					action();
				});
				observer.unobserve(target);
			}
		});
	}, observerOpts);

	observer.observe(target);
}
