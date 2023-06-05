export default function fetchScheduleItemsByMonth_handle() {
	const target = document.querySelector("[data-month-content]");
	if (!target) return;

	console.log("--- Fetch Schedule Items by Month Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/fetch-schedule-items-by-month"
				).then((module) => {
					module.default();
				});
				observer.unobserve(target);
			}
		});
	}, observerOpts);

	observer.observe(target);
}
