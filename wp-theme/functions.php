<?
add_action( 'wp_enqueue_scripts', 'iqos_scripts' );

function iqos_scripts() {
    wp_enqueue_style( 'iqos-style', get_stylesheet_uri() );
    wp_enqueue_script( 'iqos-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
}

add_theme_support( 'custom-logo' );

?>