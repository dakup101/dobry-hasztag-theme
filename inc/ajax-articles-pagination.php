<?php 
add_action('init', 'ajax_articles_pagination_init');

function ajax_articles_pagination_init(){
    add_action( 'wp_ajax_nopriv_articles_pagination', 'ajax_articles_pagination' );
    add_action( 'wp_ajax_articles_pagination', 'ajax_articles_pagination' );
}

function ajax_articles_pagination(){
    $page = $_POST["page"];
    $perPage = $_POST["perPage"];
    $category = isset($_POST["category"]) ? $_POST["category"] : null;
    $blog_item = isset($_POST["blog_item"]) ? true : false;
    echo ajax_articles_pagination_content($page, $perPage, $category, $blog_item);
    wp_die();
}

function ajax_articles_pagination_content($page, $perPage,  $category, $blog_item){
    $args = array(
        "post_type" => "post", 
        "posts_per_page" => $perPage, 
        "paged" => $page,
    );

    if (!empty($category)) {
        $args['category_name'] = $category;
    }

    $posts = new WP_Query( $args );

    ob_start();

    while ($posts->have_posts()) {
        $posts->the_post();
        if ($blog_item) get_template_part(CMP, "blog-item");
        else get_template_part(CMP, "articles-item");
    }

    return ob_get_clean();
}
?>