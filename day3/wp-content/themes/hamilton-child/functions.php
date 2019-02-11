<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $child_style = 'child-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); //Linker til modertemaets style.css fil
    wp_enqueue_style( $child_style,
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>