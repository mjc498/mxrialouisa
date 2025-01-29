<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Register Navigation Menu
function my_theme_setup() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'mytheme'),
    ));
}

add_action('after_setup_theme', 'my_theme_setup');
?>
