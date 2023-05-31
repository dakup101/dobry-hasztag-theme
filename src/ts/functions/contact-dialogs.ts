export default function contactDialogs() {
	const btns = document.querySelectorAll(
		"[data-contact-trigger]"
	) as NodeListOf<HTMLButtonElement>;

	const dialogs = document.querySelectorAll(
		"[data-contact-dialog]"
	) as NodeListOf<HTMLDialogElement>;

	btns.forEach((btn) => {
		btn.addEventListener("click", (ev) => {
			ev.preventDefault();

			const formID = btn.getAttribute("data-contact-trigger");
			const targetDialog = document.querySelector(
				"[data-contact-dialog='" + formID + "']"
			) as HTMLDialogElement;

			targetDialog.showModal();
		});
	});

	dialogs.forEach((dialog) => {
		const close = dialog.querySelector("button");
		close.addEventListener("click", (ev) => {
			ev.preventDefault();
			dialog.close();
		});
	});
}
