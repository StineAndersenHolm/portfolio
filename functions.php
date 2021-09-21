<?php 

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
        
    $parenthandle = 'parent-style'; // Definition af parent-style
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', //Her linker jeg til parent style.css
        array(),  
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), //Her linker jeg til child style.css
        array( $parenthandle ),
        $theme->get('Version') // Versionnummeret
    );
}


?>
