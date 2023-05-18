export default function copySiteToClipboard() {
	console.log("--- Copy Loaded Handle ---");

	const copyBtn = document.querySelector("[data-copy-site-clipboard]");
	copyBtn.addEventListener("click", (ev) => {
		ev.preventDefault();
		const url = window.location.href;

		const tempInput = document.createElement("input");
		tempInput.style.position = "absolute";
		tempInput.style.left = "-9999px";
		tempInput.value = url;
		document.body.appendChild(tempInput);

		tempInput.select();
		document.execCommand("copy");

		document.body.removeChild(tempInput);
		alert("Skopiowano link");
	});
}
