import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";

export default function lightbox() {
	console.log("--- Lightbox Loaded ---");

	const lightbox = GLightbox({
		selector: ".glightbox",
		touchNavigation: true,
		loop: true,
	});
}
