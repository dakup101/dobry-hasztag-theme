export default function simplebar_handle() {
	const target = document.querySelector("[data-simplebar]");

	if (!target) return;

	console.log("--- Simplebar Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(/* webpackChunkName: "print" */ "../functions/simplebar").then(
					(module) => {
						const action = module.default;
						action();
					}
				);
				observer.unobserve(target);
			}
		});
	}, observerOpts);

	observer.observe(target);
}
