<?php

function pss_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
 
add_action('wp_enqueue_scripts', 'pss_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));


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
