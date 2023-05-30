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
    echo ajax_articles_pagination_content($page, $perPage, $category);
    wp_die();
}

function ajax_articles_pagination_content($page, $perPage,  $category){
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
        get_template_part(CMP, "articles-item");
    }

    return ob_get_clean();
}
?>