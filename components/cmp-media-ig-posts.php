<?php 
$ig_imported = new WP_Query(array(
    'post_type' => 'instagram_post',
    'meta_key' => 'is_imported',
    'meta_value' => true,
    'meta_compare' => '=',
    'posts_per_page' => -1,
));
$ig_normal = new WP_Query(array(
    'post_type' => 'instagram_post',
    'meta_key' => 'is_imported',
    'meta_value' => true,
    'meta_compare' => '!=',
    'posts_per_page' => -1,
));

print_r(fetchInstagramVids());
?>

<?php if ($ig_imported->have_posts()): ?>

<div id="instagram-posts"
     class="grid grid-cols-6 gap-6">
    <?php 
    if ($ig_normal->have_posts()){
        while($ig_normal->have_posts()){
            $ig_normal->the_post();
            get_template_part( CMP, "media-ig-item");  
        }
        wp_reset_postdata();
    } 
    
    while($ig_imported->have_posts()){
        $ig_imported->the_post();
        get_template_part( CMP, "media-ig-item");  
    }
    wp_reset_postdata();

    ?>
</div>

<?php get_template_part( CMP, "media-ig-dialog" ) ?>

<?php endif; ?>