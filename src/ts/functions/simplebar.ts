import "simplebar";
import "simplebar/dist/simplebar.css";
import ResizeObserver from "resize-observer-polyfill";

export default function simplebar() {
	window.ResizeObserver = ResizeObserver;
}
