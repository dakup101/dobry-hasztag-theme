<?php $args = wp_parse_args( $args, array(
    "cat" => "profilaktyka",
) ) ?>

<?php $posts = new WP_Query( array(
    "post_type" => "post", 
    "posts_per_page" => 4, 
    'category_name' => $args["cat"],
)); if ($posts->have_posts()) : ?>

<h2 class="flex flex-col items-center font-sofia">
    <span class="block text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl text-shadow">Przeczytaj artykuły</span>
</h2>

<?php
$total_posts = $posts->found_posts; // Get the total number of posts found
$posts_per_page = $posts->get('posts_per_page'); // Get the number of posts per page

$pages = ceil($total_posts / $posts_per_page); // Calculate the number of pages
?>

<div class="grid grid-cols-4 mt-20 gap-10"
     data-fetched-articles>
    <?php while ($posts->have_posts()): $posts->the_post(); ?>

    <?php get_template_part(CMP, "articles-item") ?>

    <?php endwhile; ?>
</div>

<div data-posts="posts"
     data-posts-pagination
     class="flex items-center justify-center flex-wrap mt-10">
    <?php for ($i=0; $i < $pages; $i++) : ?>
    <button data-page="<?php echo ($i+1); ?>"
            data-category="<?php echo $args["cat"] ?>"
            data-perpage="4"
            class="w-10 h-10 flex font-sofia justify-center items-center relative rounded-full font-bold border-2 border-dark border-opacity-20 hover:border-cyan-dark hover:border-opacity-100 hover:bg-cyan-dark transition-all mx-1.5">
        <span>
            <?php echo ($i + 1) ?>
        </span>
    </button>
    <?php endfor; ?>
</div>

<?php endif; ?>