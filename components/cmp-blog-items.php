<div class="neo-before mb-1.5 mr-1.5">
    <div class="relative bg-yellow-lighter px-10 py-5 rounded-xl border-4 border-dark">
        <h2 class="text-lg uppercase font-bold mb-10">Wiadomości</h2>
        <div class=""
             data-fetched-articles>
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part( CMP, "blog-item" );
                }
            } ?>
        </div>

        <?php
        $total_posts = wp_count_posts()->publish; // Get the total number of posts found
        $posts_per_page = get_option('posts_per_page');; // Get the number of posts per page
        $pages = ceil($total_posts / $posts_per_page); // Calculate the number of pages
        ?>

        <div data-posts="posts"
             data-posts-pagination
             class="flex items-center justify-center flex-wrap mt-10">
            <?php for ($i=0; $i < $pages; $i++) : ?>
            <button data-page="<?php echo ($i+1); ?>"
                    data-perpage="<?php echo $posts_per_page ?>"
                    data-blogitem="blogitem"
                    class="w-10 h-10 flex font-sofia justify-center items-center relative rounded-full font-bold border-2 border-dark border-opacity-20 hover:border-cyan-dark hover:border-opacity-100 hover:bg-cyan-dark transition-all mx-1.5">
                <span>
                    <?php echo ($i + 1) ?>
                </span>
            </button>
            <?php endfor; ?>
        </div>
    </div>
</div>