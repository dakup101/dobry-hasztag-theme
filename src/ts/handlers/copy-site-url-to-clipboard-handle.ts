export default function copySiteUrl_handle() {
	const target = document.querySelector("[data-copy-site-clipboard]");
	if (!target) return;

	console.log("--- Copy Url Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/copy-site-url-to-clipboard"
				).then((module) => {
					module.default();
				});
				observer.unobserve(target);
			}
		});
	}, observerOpts);

	observer.observe(target);
}
