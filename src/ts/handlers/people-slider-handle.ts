export default function peopleSlider_handle() {
	const target = document.querySelector("[data-people]");

	if (!target) return;

	console.log("--- People Slider Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/people-slider"
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
