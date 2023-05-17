<?php
function custom_image_sizes() {
    add_image_size( 'event-thumbnail', 768, 432, true );
}
add_action( 'after_setup_theme', 'custom_image_sizes' );