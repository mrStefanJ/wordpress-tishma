<?php

function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', 
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', 
        array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css', 
        array(), false, 'all');
    wp_enqueue_style('fontawesome');
}

add_action('wp_enqueue_scripts','load_stylesheets');

function load_script(){
    wp_enqueue_script('tabs', get_stylesheet_directory_uri() . '/js/tabs.js', array('jquery'), '1.1', false);
    wp_enqueue_script('navbar', get_stylesheet_directory_uri() . '/js/navbar.js', array('jquery'), '1.1', false);
}
add_action('wp_enqueue_scripts','load_script');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu ' => __('Footer Menu','theme')
    )
);

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/logo-Tishma.png',
        'default-text-color' => '000',
        'width'              => 200,
        'height'             => 60,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
