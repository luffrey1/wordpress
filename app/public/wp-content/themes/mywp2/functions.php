<?php
function mitemplate_menus() {
    register_nav_menus(array(
        'menu-principal1' => __('Menu Principal1', 'mitema'),
        'menu-principal2' => __('Menu Principal2', 'mitema'),
        'menu-principal3' => __('Menu Principal3', 'mitema'),
    ));
}
add_action('init', 'mitemplate_menus');
function mitemplat_scripts_styles() {
    // Encolar normalize.css
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1', 'all');
    
    // Encolar estilo principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    
    // Encolar Google Fonts
    wp_enqueue_style('mygooglefont', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&family=Open+Sans:wght@300;400;500&family=Roboto:wght@100;400&display=swap', array(), '1.0.0');

    // Encolar SlickNav CSS
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0', 'all');
    
    // Encolar jQuery y SlickNav JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mitemplat_scripts_styles');

add_theme_support( 'post-thumbnails' );




?>