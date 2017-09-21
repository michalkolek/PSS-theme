<?php

function pss_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
 
add_action('wp_enqueue_scripts', 'pss_resources');


// Read More to show full article

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );



// Change Read more to "czytaj dalej"

function modify_read_more_link() {
    return ' ... ' . '<a class="more-link" href="' . get_permalink() . '">(czytaj dalej &raquo;)</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


// Theme setup
function pss_theme_setup() {

	// Navigation Menus
		register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
		));

	
	// Add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('small-thumbnail', 180, 180, true);
		add_image_size('banner-image', 720, 270, true);

		}


add_action('after_setup_theme', 'pss_theme_setup');


// Add upcoming events section to admin appearance customize screen









?>