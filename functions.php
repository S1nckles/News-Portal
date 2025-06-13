<?php add_theme_support('post-thumbnails'); ?>

<?php

// Enqueue styles and scripts

function mytheme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js', array(), false, true);
    wp_enqueue_script('search', get_template_directory_uri() . '/assets/js/search.js', array(), false, true);

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// News Posts 

function register_news_post_type() {
    register_post_type('news', [
        'labels' => [
            'name' => 'News',
            'singular_name' => 'News Post',
            'add_new' => 'Add News',
            'add_new_item' => 'Add New News',
            'edit_item' => 'Edit News',
            'new_item' => 'New News',
            'view_item' => 'View News',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'taxonomies' => ['category'],
        'show_in_rest' => false,
    ]);
}
add_action('init', 'register_news_post_type');


// Time Ago Function

function get_time_ago( $time ) {
    $time_diff = time() - strtotime($time);

    if ($time_diff < 60) {
        return 'just now';
    } elseif ($time_diff < 3600) {
        return floor($time_diff / 60) . ' mins ago';
    } elseif ($time_diff < 86400) {
        return floor($time_diff / 3600) . ' hrs ago';
    } elseif ($time_diff < 604800) {
        return floor($time_diff / 86400) . ' days ago';
    } elseif ($time_diff < 2592000) {
        return floor($time_diff / 604800) . ' weeks ago';
    } elseif ($time_diff < 31536000) {
        return floor($time_diff / 2592000) . ' months ago';
    } else {
        return floor($time_diff / 31536000) . ' years ago';
    }
}