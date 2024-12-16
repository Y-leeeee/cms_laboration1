<?php

function final_enqueue_assets() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), null);
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), null);
    wp_enqueue_script('jquery'); 
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'final_enqueue_assets');

function final_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'textdomain'),
    ));
}
add_action('after_setup_theme', 'final_register_menus');



function final_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'textdomain'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'textdomain'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'final_widgets_init');


function final_theme_support() {
   
    add_theme_support('title-tag');

    
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'final_theme_support');

function final_modify_query($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('posts_per_page', 2);
    }
}
add_action('pre_get_posts', 'final_modify_query');
