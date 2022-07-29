
<?php
// Mettre la feuille de style css
function themerealise_style_css()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themerealise_style_css');

// ajouter l'inteface widget dans le back office
function themerealise_register_widget()
{

    register_sidebar(array(
        'name'          => 'aside-gauche', 'themerealise',
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('aside-droite', 'themerealise'),
        'id'            => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
};

// enregistrement de la sidebar grace au hook widgets_init
add_action('widgets_init', 'themerealise_register_widget');
