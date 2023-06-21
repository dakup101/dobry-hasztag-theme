import { ajaxUrl } from "../helper";

export default function articlesPagination() {
	console.log("--- Articles Pagination Loaded ---");

	const articlesWrapper = document.querySelector("[data-fetched-articles]");
	const paginationBtnsWrapper = document.querySelector("[data-posts-pagination]");
	const paginationBtns = paginationBtnsWrapper.querySelectorAll("button") as NodeListOf<HTMLButtonElement>;

	paginationBtns.forEach((btn, key) => {
		btn.addEventListener("click", async (ev) => {
			ev.preventDefault();

			articlesWrapper.classList.add("opacity-50");

			paginationBtns.forEach((el) => {
				el.classList.remove("bg-rose");
				el.classList.remove("border-opacity-100");
				el.classList.remove("pointer-events-none");
			});

			btn.classList.add("bg-rose");
			btn.classList.add("border-opacity-100");
			btn.classList.add("pointer-events-none");

			const perPage = btn.dataset.perpage;
			const page = btn.dataset.page;
			const category = btn.dataset.category ? btn.dataset.category : null;
			const blog_item = btn.dataset.blogitem ? "blogitem" : null;

			const data = new FormData();

			data.append("action", "articles_pagination");
			data.append("page", page);
			data.append("perPage", perPage);

			if (category) data.append("category", category);
			if (blog_item) data.append("blog_item", blog_item);

			const posts = await fetch(ajaxUrl, {
				method: "POST",
				body: data,
				credentials: "same-origin",
			})
				.then((response) => response.text())
				.then((text) => {
					return text;
				});

			articlesWrapper.innerHTML = posts;
			articlesWrapper.classList.remove("opacity-50");
		});

		if (key == 0) btn.click();
	});
}
