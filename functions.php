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
		'sidebar' => __( 'Sidebar Menu'),
		'footer' => __( 'Footer Menu')
		));

	
	// Add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('small-thumbnail', 180, 180, true);
		add_image_size('banner-image', 720, 270, true);

		}


add_action('after_setup_theme', 'pss_theme_setup');


// Add upcoming events section to admin appearance customize screen

function pss_events($wp_customize) {
	$wp_customize->add_section('pss-events-section', array(
		'title' => 'Najblizsze wydarzenia',
		'priority' => 1
	));

	$wp_customize->add_setting('pss-events-setting-headline', array(
		'default' => 'Najbliższe wydarzenia'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-events-control-headline', array(
		'label' => 'Nagłówek',
		'section' => 'pss-events-section',
		'settings' => 'pss-events-setting-headline'
	)));


	$wp_customize->add_setting('pss-events-setting-paragraph', array(
		'default' => 'Rozpoczęcie roku szkolnego 2017/2018 o godz. 10:00. 9 września 2017'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-events-control-paragraph', array(
		'label' => 'Paragraf',
		'section' => 'pss-events-section',
		'settings' => 'pss-events-setting-paragraph',
		'type' => 'textarea'
	)));


	$wp_customize->add_setting('pss-events-setting-link');

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-events-control-link', array(
		'label' => 'Link',
		'section' => 'pss-events-section',
		'settings' => 'pss-events-setting-link',
		'type' => 'url'
	)));

}



add_action('customize_register', 'pss_events');



// Exclude Kadra category from main loop

function pss_exclude_cat( $query ) {

	if ( $query->is_main_query() && ($query->is_home() OR $query->is_archive()) ) {

		$query->set( 'cat', '-7' );
	}
}

add_action( 'pre_get_posts', 'pss_exclude_cat' );

?>