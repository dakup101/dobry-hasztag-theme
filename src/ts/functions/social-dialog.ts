export default function socialDialog() {
	console.log("--- Social Dialog Loaded ---");

	const triggers = document.querySelectorAll(".show-social");
	const dialog = document.querySelector(
		"[data-social-dialog]"
	) as HTMLDialogElement;

	Array.from(triggers).forEach((trigger) => {
		trigger.addEventListener("click", (ev) => {
			ev.preventDefault();
			dialog.showModal();
		});
	});

	const closeBtn = dialog.querySelector("button");
	closeBtn.addEventListener("click", (ev) => {
		ev.preventDefault();
		dialog.close();
	});
}
