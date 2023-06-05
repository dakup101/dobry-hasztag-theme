export default function contactDialogs_handle() {
	const target = document.querySelector("[data-contact-trigger]");
	if (!target) return;

	console.log("--- Contact Dialogs Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/contact-dialogs"
				).then((module) => {
					module.default();
				});
				observer.unobserve(target);
			}
		});
	}, observerOpts);

	observer.observe(target);
}
