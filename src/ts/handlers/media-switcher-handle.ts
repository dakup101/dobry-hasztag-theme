export default function mediaSwitchers_handle() {
	const target = document.querySelector("[data-media-switcher]");
	if (!target) return;

	console.log("--- Media Switcher Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/media-switchers"
				).then((module) => {
					module.default();
				});
				observer.unobserve(target);
			}
		});
	}, observerOpts);

	observer.observe(target);
}
