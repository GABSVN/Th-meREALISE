
<?php
// Mettre la feuille de style css
function themerealise_style_css(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'themerealise_style_css');

// ajouter l'inteface widget dans le back office
function themerealise_register_widget(){

    register_sidebars( 2, array( 
        'name' => 'aside-%d',
        'class' => 'aside-%d',
        'before_widget' => '<aside id="%1$s" class="widget %2$s aside-%d">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
};

// enregistrement de la sidebar grace au hook widgets_init
add_action('widgets_init', 'themerealise_register_widget');