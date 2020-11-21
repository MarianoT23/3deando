<?php 

function tresdeando_resources () {
    wp_enqueue_script('tresdeando_main_scripts', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    wp_enqueue_script('tresdeando_aos-js', get_theme_file_uri('/js/aos.js'), true);
    wp_enqueue_script('tresdeando_glider-js', get_theme_file_uri('/js/glider.min.js'), true);
    wp_enqueue_style('tresdeando_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'tresdeando_resources');

function tresdeando_features () {
    add_theme_support('title-tag');
    register_nav_menu('navbar-menu', 'Navbar Menu');
}

add_action('after_setup_theme', 'tresdeando_features');

?>