<?php 
$yt_imported = new WP_Query(array(
    'post_type' => 'youtube_post',
    'meta_key' => 'is_imported',
    'meta_value' => true,
    'meta_compare' => '=',
    'posts_per_page' => -1,
));
$yt_normal = new WP_Query(array(
    'post_type' => 'youtube_post',
    'meta_key' => 'is_imported',
    'meta_value' => true,
    'meta_compare' => '!=',
    'posts_per_page' => -1,
));
?>

<?php if ($yt_imported->have_posts()): ?>

<div id="youtube-posts"
     class="grid grid-cols-3 gap-10">
    <?php 
    if ($yt_normal->have_posts()){
        while($yt_normal->have_posts()){
            $yt_normal->the_post();
            get_template_part( CMP, "media-yt-item");  
        }
        wp_reset_postdata();
    } 
    
    while($yt_imported->have_posts()){
        $yt_imported->the_post();
        get_template_part( CMP, "media-yt-item");  
    }
    wp_reset_postdata();

    ?>
</div>

<?php endif; ?>