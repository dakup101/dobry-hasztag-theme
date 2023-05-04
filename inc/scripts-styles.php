<?php function scripts_styles(){
    // CSS
    wp_enqueue_style('tailwind', THEME_URI . 'dist/css/tailwind.css');
    wp_enqueue_style('theme', THEME_URI . 'dist/css/theme.css');
    // JS
    wp_enqueue_script('theme', THEME_URI . 'dist/js/theme.js');
} 

add_action('wp_enqueue_scripts', "scripts_styles");