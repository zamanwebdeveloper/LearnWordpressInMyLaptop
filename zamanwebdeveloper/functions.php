<?php
/*
* Registering Menu Support
*/

function myWebsiteMenu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu( 'header_top_menu', __( 'Header Menu', 'ZamanWebDeveloper' ) );
		register_nav_menu( 'footer_menu', __( 'Footer Menu', 'ZamanWebDeveloper' ) );
	}
}
add_action('init','myWebsiteMenu');

/**
 * Featured Image Support
 */
add_theme_support( 'post-thumbnails', array( 'post', 'page') );
set_post_thumbnail_size( 200, 200, true );

add_image_size( 'myFituredImage', 300, 300, true );
add_image_size( 'onlywidthimage', 300, true );

/**
 * Widget Support
 */
function my_widgets_sidebar(){
		register_sidebar( array(
		'name'          => __( 'Home Page Sidebar One', 'zamanwebdeveloper' ),
		'id'            => 'widget-home-one',
		'before_widget' => '<div class="siderbar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-widget-title">',
		'after_title'   => '</h4>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Widget One', 'zamanwebdeveloper' ),
		'id'            => 'footer-one',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Widget Two', 'zamanwebdeveloper' ),
		'id'            => 'footer-two',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Widget Three', 'zamanwebdeveloper' ),
		'id'            => 'footer-three',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Widget Four', 'zamanwebdeveloper' ),
		'id'            => 'footer-four',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_widgets_sidebar' );