<?php 
function montheme_realise(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');
    register_nav_menu('header', 'En tete du menu');
}

function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_title_separator()
{
    return '|';
}


add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_action('after_setup_theme', 'montheme_realise');
add_filter('document_title_separator', 'montheme_title_separator');