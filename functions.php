<?php
// STYLES
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// HEADER
function my_theme_setup() {
    load_theme_textdomain('mytheme', get_template_directory() . '/languages'); 
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// FAVICON
function my_theme_favicon() {
    echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/favicon.png">';
}
add_action('wp_head', 'my_theme_favicon');


// TITLE TAG
function my_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_theme_setup');

// CSS AND JS
function my_theme_enqueue_assets() {
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));

    wp_enqueue_script('main-js', get_template_directory_uri() . '/script.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
?>
