<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'dentapolis' ),
    'footer-menu'  => __( 'Menú footer' )
) );

add_theme_support( 'post-thumbnails' );
the_post_thumbnail();
the_post_thumbnail( 'full' );
the_post_thumbnail( 'medium' ); 

?>