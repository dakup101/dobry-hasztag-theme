export default function socialDialog_handle() {
	const target = document.querySelector(".show-social");
	const dialog = document.querySelector(
		"[data-social-dialog]"
	) as HTMLDialogElement;

	if (!target || !dialog) return;

	console.log("--- Social Dialog Handle ---");

	const observerOpts = {
		root: null,
		rootMargin: "-150px 0px 150px 0px",
		threshold: 0,
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				import(
					/* webpackChunkName: "print" */ "../functions/social-dialog"
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
