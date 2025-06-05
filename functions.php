<?php add_theme_support('post-thumbnails'); ?>

<?php

// Enqueue styles and scripts

function my_custom_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');