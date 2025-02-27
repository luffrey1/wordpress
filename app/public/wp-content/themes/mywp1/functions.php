<?php
// Registrar la ubicación del menú
function mitemplate_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'mitema'),
    ));
}
add_action('init', 'mitemplate_menus');


// Encolado de estilos y scripts
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
function mitema_setup() {
    // Para habilitar imágenes destacadas
    add_theme_support( 'post-thumbnails' );
 
    // Agregando más tamaños de imágenes personalizados
    add_image_size( 'squere', 350, 350, true ); // Cuadrada: 350x350, recorte forzado
    add_image_size( 'portrait', 350, 724, true ); // Retrato: 350x724, recorte forzado
    add_image_size( 'cajas', 400, 375, true ); // Caja: 400x375, recorte forzado
    add_image_size( 'mediano', 700, 400, true ); // Mediano: 700x400, recorte forzado
    add_image_size( 'blog', 966, 644, true ); // Blog: 966x644, recorte forzado
 }
 add_action( 'after_setup_theme', 'mitema_setup' );

 function mi_tema_estilos() {
    wp_enqueue_style('mi-estilo-principal', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_estilos');


 
?>
