<?php 
function montheme_realise(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');
    register_nav_menus(
        array(
          'my-custom-menu' => __( 'My Custom Menu' ),
          'extra-menu' => __( 'Extra Menu' )
        )
      );
    add_theme_support( 'custom-logo', array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ) );
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
) );
}

function montheme_register_assets()
{
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
    wp_enqueue_style( 'style-name', get_stylesheet_uri('style.css') );
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



