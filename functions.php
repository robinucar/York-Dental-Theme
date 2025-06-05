<?php

// custom styles
function york_dental_enqueue_styles() {
    wp_enqueue_style(
        'york-dental-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css') // Use filemtime for cache busting
    );
}
add_action('wp_enqueue_scripts', 'york_dental_enqueue_styles');

// Enable WordPress features
function york_dental_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'york_dental_theme_setup');
