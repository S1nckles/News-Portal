<?php add_theme_support('post-thumbnails'); ?>

<?php

// Enqueue styles and scripts

function mytheme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js', array(), false, true);
    wp_enqueue_script('search', get_template_directory_uri() . '/assets/js/search.js', array(), false, true);

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
