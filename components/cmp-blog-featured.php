<?php
$posts = new WP_Query( array(
    "post_type" => "post", 
    "posts_per_page" => 4, 
    'category_name' => 'wyroznione',
) );

if ($posts->have_posts()){
    while ($posts->have_posts()) {
        $posts->the_post(); 
        get_template_part(CMP, "blog-featured-item");
        wp_reset_postdata();
    }
}
?>