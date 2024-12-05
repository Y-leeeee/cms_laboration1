<?php
function cms_laboration1_setup() {
    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'cms_laboration1'),
    ));
}
add_action('after_setup_theme', 'cms_laboration1_setup');

function cms_laboration1_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'cms_laboration1_scripts');
