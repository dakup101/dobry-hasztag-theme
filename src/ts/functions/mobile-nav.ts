export default function mobileNav() {
	const mobileNavWrapper = document.querySelector(
		"[data-mobile-nav-wrap]"
	) as HTMLElement;
	const mobileNav = mobileNavWrapper.querySelector(
		"[data-mobile-nav]"
	) as HTMLElement;
	const mobileNavOpener = document.querySelector(
		"[data-mobile-nav-open]"
	) as HTMLButtonElement;
	const mobileNavCloser = document.querySelector(
		"[data-mobile-nav-close]"
	) as HTMLButtonElement;

	mobileNavOpener.addEventListener("click", (ev) => {
		ev.preventDefault();

		mobileNavWrapper.classList.remove("opacity-0");
		mobileNavWrapper.classList.remove("pointer-events-none");

		mobileNav.classList.remove("-translate-x-full");
	});

	mobileNavCloser.addEventListener("click", (ev) => {
		mobileNavWrapper.classList.add("opacity-0");
		mobileNavWrapper.classList.add("pointer-events-none");

		mobileNav.classList.add("-translate-x-full");
	});
}
