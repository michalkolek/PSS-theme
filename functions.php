<?php

// LOAD RESOURCES

function pss_resources_styles() {
	wp_enqueue_style ('custom-fonts', '//fonts.googleapis.com/css?family=Amatic+SC|Raleway:300,400,600');
	wp_enqueue_style ('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());
	wp_enqueue_script ('mainApp', get_template_directory_uri() . '/App.js', array('jquery'), null, true);
	}
add_action('wp_enqueue_scripts', 'pss_resources_styles');

// READ MORE TO SHOW FULL ARTICLE
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

// CHANGE READ MORE TO "CZYTAJ DALEJ"
function modify_read_more_link() {
    return ' ... ' . '<a class="more-link" href="' . get_permalink() . '">(czytaj dalej &raquo;)</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

// THEME SETUP
function pss_theme_setup() {
	// Navigation Menus
		register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'sidebar' => __( 'Sidebar Menu'),
		'footer' => __( 'Footer Menu')
		));
	// Add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('small-thumbnail', 150, 150, true);
		add_image_size('banner-image', 720, 270, true);
		add_image_size('bigger-image', 880, 600, true);
		}
add_action('after_setup_theme', 'pss_theme_setup');

function pss_custom_sizes( $sizes ) {
    	return array_merge( $sizes, array(
        'bigger-image' => ( 'Duży rozmiar' ),
    ));
    }
add_filter('image_size_names_choose', 'pss_custom_sizes');

// Add upcoming events section to admin appearance customize screen - CURRENTLY NOT IN USE - PREFFERED TO UPDATE IT BY EDITING A SINGLE POST.
/* function pss_events($wp_customize) {
	$wp_customize->add_section('pss-events-section', array(
		'title' => 'Najbliższe wydarzenia',
		'priority' => 2
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
*/

// SIDEBAR AD SECTION
function pss_ads ( $wp_customize ) {
	$wp_customize->add_section('pss-ads-section', array(
		'title' => 'Reklamy - boczna szpalta',
		'description' => 'Każda reklama musi posiadać zarówno link do reklamodawcy, jak i obrazek.',
		'priority' => 3
	));

	// ---reklama--- checkbox 
	$wp_customize->add_setting('pss-ads-sidebar-checkbox-setting', array (
		'transport' => 'refresh'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-sidebar-checkbox-control', array(
		'label' => 'Czy wyswietlić "--- Reklama ---" ?',
		'section' => 'pss-ads-section',
		'settings' => 'pss-ads-sidebar-checkbox-setting',
		'type' => 'checkbox'	
	)));

	// Sidebar 1st text for the advertisment, if advertistment is not available
	$wp_customize->add_setting('pss-ads-sidebar-1-link-text-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-sidebar-1-link-text-control', array(
		'label' => 'Reklama boczna nr 1 - tekst',
		'section' => 'pss-ads-section',
		'description' => 'Czy wyświetlić tekst: "Tu jest miejsce na Twoją reklamę" lub inny? Pozostaw pole puste, jeśli nie chcesz wyświetlić żadnego tekstu. Tekst się nie wyświetli, jeśli jest włączona reklama (link + obrazek)',
		'settings' => 'pss-ads-sidebar-1-link-text-setting',
		'type' => 'textarea',
		'default' => 'Tu jest miejsce na Twoją reklamę'	
	)));

	// Sidebar 1st link for the advertisment
	$wp_customize->add_setting('pss-ads-sidebar-1-link-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-sidebar-1-link-control', array(
		'label' => 'Reklama boczna nr 1 - link',
		'section' => 'pss-ads-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-ads-sidebar-1-link-setting',
		'type' => 'url'	
	)));

	// Sidebar 1st image for the advertisment 
	$wp_customize->add_setting('pss-ads-sidebar-1-image-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-ads-sidebar-1-image-control', array(
		'label' => 'Reklama boczna nr 1 - obrazek',
		'section' => 'pss-ads-section',
		'settings' => 'pss-ads-sidebar-1-image-setting',
		'width' => 200,
		'flex_height' => true	
	)));

	// Sidebar 2nd text for the advertisment, if advertistment is not available
	$wp_customize->add_setting('pss-ads-sidebar-2-link-text-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-sidebar-2-link-text-control', array(
		'label' => 'Reklama boczna nr 2 - tekst',
		'section' => 'pss-ads-section',
		'description' => 'Czy wyświetlić tekst: "Tu jest miejsce na Twoją reklamę" lub inny? Pozostaw pole puste, jeśli nie chcesz wyświetlić żadnego tekstu. Tekst się nie wyświetli, jeśli jest włączona reklama (link + obrazek)',
		'settings' => 'pss-ads-sidebar-2-link-text-setting',
		'type' => 'textarea',
		'default' => 'Tu jest miejsce na Twoją reklamę'	
	)));

	// Sidebar 2nd link for the advertisment
	$wp_customize->add_setting('pss-ads-sidebar-2-link-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-sidebar-2-link-control', array(
		'label' => 'Reklama boczna nr 2 - link',
		'section' => 'pss-ads-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-ads-sidebar-2-link-setting',
		'type' => 'url'	
	)));

	// Sidebar 2nd image for the advertisment 
	$wp_customize->add_setting('pss-ads-sidebar-2-image-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-ads-sidebar-2-image-control', array(
		'label' => 'Reklama boczna nr 2 - obrazek',
		'section' => 'pss-ads-section',
		'settings' => 'pss-ads-sidebar-2-image-setting',
		'width' => 200,
		'flex_height' => true
	)));
}
	add_action('customize_register', 'pss_ads');

	// MAIN ADVERTISMENT 
	function pss_ads_main ( $wp_customize ) {
	$wp_customize->add_section('pss-ads-main-section', array(
		'title' => 'Reklamy - główna kolumna',
		'description' => 'Każda reklama musi posiadać zarówno link do reklamodawcy, jak i obrazek.',
		'priority' => 5
	));

	// ---reklama--- text checkbox 
	$wp_customize->add_setting('pss-ads-main-checkbox-setting', array (
		'transport' => 'refresh'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-main-checkbox-control', array(
		'label' => 'Czy wyswietlić "--- Reklama ---" ?',
		'section' => 'pss-ads-main-section',
		'settings' => 'pss-ads-main-checkbox-setting',
		'type' => 'checkbox'	
	)));

	// Main 1st text for the advertisment, if advertistment is not available
	$wp_customize->add_setting('pss-ads-main-1-link-text-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-main-1-link-text-control', array(
		'label' => 'Reklama główna nr 1 - tekst',
		'section' => 'pss-ads-main-section',
		'description' => 'Czy wyświetlić tekst: "Tu jest miejsce na Twoją reklamę" lub inny? Pozostaw pole puste, jeśli nie chcesz wyświetlić żadnego tekstu. Tekst się nie wyświetli, jeśli jest włączona reklama (link + obrazek)',
		'settings' => 'pss-ads-main-1-link-text-setting',
		'type' => 'textarea',
		'default' => 'Tu jest miejsce na Twoją reklamę'	
	)));

		// Main 1st link for the advertisment
	$wp_customize->add_setting('pss-ads-main-1-link-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-main-1-link-control', array(
		'label' => 'Reklama glówna nr 1 - link',
		'section' => 'pss-ads-main-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-ads-main-1-link-setting',
		'type' => 'url'	
	)));

	// Main 1st image for the advertisment 
	$wp_customize->add_setting('pss-ads-main-1-image-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-ads-main-1-image-control', array(
		'label' => 'Reklama glówna nr 1 - obrazek',
		'section' => 'pss-ads-main-section',
		'settings' => 'pss-ads-main-1-image-setting',
		'width' => 600,
		'flex_height' => true	
	)));

	// Main 2nd text for the advertisment, if advertistment is not available
	$wp_customize->add_setting('pss-ads-main-2-link-text-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-main-2-link-text-control', array(
		'label' => 'Reklama główna nr 2 - tekst',
		'section' => 'pss-ads-main-section',
		'description' => 'Czy wyświetlić tekst: "Tu jest miejsce na Twoją reklamę" lub inny? Pozostaw pole puste, jeśli nie chcesz wyświetlić żadnego tekstu. Tekst się nie wyświetli, jeśli jest włączona reklama (link + obrazek)',
		'settings' => 'pss-ads-main-2-link-text-setting',
		'type' => 'textarea',
		'default' => 'Tu jest miejsce na Twoją reklamę'	
	)));

		// Main 2nd link for the advertisment
	$wp_customize->add_setting('pss-ads-main-2-link-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-ads-main-2-link-control', array(
		'label' => 'Reklama glówna nr 2 - link',
		'section' => 'pss-ads-main-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-ads-main-2-link-setting',
		'type' => 'url'	
	)));

	// Main 2nd image for the advertisment 
	$wp_customize->add_setting('pss-ads-main-2-image-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-ads-main-2-image-control', array(
		'label' => 'Reklama glówna nr 2 - obrazek',
		'section' => 'pss-ads-main-section',
		'settings' => 'pss-ads-main-2-image-setting',
		'width' => 600,
		'flex_height' => true	
	)));
}
add_action('customize_register', 'pss_ads_main');

//Exclude Kadra-* categories from main query and archive
function pss_exclude_category( $query ) {
    if ( ( $query->is_home() OR $query->is_archive() ) && $query->is_main_query() && !is_admin() ) {
        $query->set( 'cat', '-7,-13,-14,-15,-16' );
    }
}
add_action( 'pre_get_posts', 'pss_exclude_category' );

// ADD LARGE HERO H1 AND H3 TEXT - TYTUŁ I PODTYTUŁ GŁÓWNEGO BANERU
// CUSTOMIZE COLOR OF LARGE HERO H1 AND H3 TEXTS - KOLOR
function pss_large_hero_callout($wp_customize) {
	$wp_customize->add_section ('pss-large-hero-callout-section', array(
		'title' => "Tekst i kolory głównego baneru",
		'priority' => 1
	));
	$wp_customize->add_setting ('pss-large-hero-callout-setting', array(
		'default' => 'Witaj w Polskiej szkole sobotniej'
	));
	$wp_customize->add_control ( new WP_Customize_Control($wp_customize, 'pss-large-hero-callout-control', array(
		'label' => 'Tytuł',
		'section' => 'pss-large-hero-callout-section',
		'settings' => 'pss-large-hero-callout-setting'
	)));
	$wp_customize->add_setting ('pss-large-hero-callout-h3-setting', array(
		'default' => 'w Peterborough'
	));
	$wp_customize->add_control ( new WP_Customize_Control($wp_customize, 'pss-large-hero-callout-h3-control', array(
		'label' => 'Podtytuł',
		'section' => 'pss-large-hero-callout-section',
		'settings' => 'pss-large-hero-callout-h3-setting'
	)));
// COLORS
	$wp_customize->add_setting ('pss-large-hero-callout-color-setting', array(
		'default' => '#F2F2F2',
		'transport' => 'refresh'
	));
	$wp_customize->add_control ( new WP_Customize_Color_Control($wp_customize, 'pss-large-hero-callout-color-control', array(
		'label' => 'Kolor tytułu',
		'section' => 'pss-large-hero-callout-section',
		'settings' => 'pss-large-hero-callout-color-setting'
	)));
	$wp_customize->add_setting ('pss-large-hero-callout-h3-color-setting', array(
		'default' => '#F2F2F2',
		'transport' => 'refresh'
	));
	$wp_customize->add_control ( new WP_Customize_Color_Control($wp_customize, 'pss-large-hero-callout-h3-color-control', array(
		'label' => 'Kolor podtytułu',
		'section' => 'pss-large-hero-callout-section',
		'settings' => 'pss-large-hero-callout-h3-color-setting'
	)));
}
add_action('customize_register', 'pss_large_hero_callout');

// OUTPUT CUSTOMIZE CSS FOR: LARGE HERO H1 AND H3, ADS CHECKBOXES
function pss_customize_css() { ?>
	<style type="text/css">
		.large-hero__text-content h1 {
			color: <?php echo get_theme_mod('pss-large-hero-callout-color-setting'); ?>;
		}
		.large-hero__text-content h3 {
			color: <?php echo get_theme_mod('pss-large-hero-callout-h3-color-setting'); ?>;
		}
		.advert--sidebar--checkbox {
			display: <?php echo (get_theme_mod('pss-ads-sidebar-checkbox-setting') ? 'block' : 'none'); ?>;
		}
		.advert--main--checkbox {
			display: <?php echo (get_theme_mod('pss-ads-main-checkbox-setting') ? 'block' : 'none'); ?>;
		}
	</style>
<?php }
add_action ( 'wp_head', 'pss_customize_css' );

// PARTNERS LOGOS
function pss_partners_logos($wp_customize) {
	$wp_customize->add_section ('pss-partners-logos-section', array(
		'title' => "Partnerzy strony",
		'priority' => 5
	));

// IMAGE 1
	$wp_customize->add_setting ('pss-partners-logos-image-1-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-partners-logos-image-1-control', array(
		'label' => 'Obrazek 1',
		'section' => 'pss-partners-logos-section',
		'settings' => 'pss-partners-logos-image-1-setting',
		'height' => 150,
		'flex_width' => true
	)));

// LINK 1
	$wp_customize->add_setting('pss-partners-logos-link-1-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-partners-logos-link-1-control', array(
		'label' => 'Obrazek 1 - link',
		'section' => 'pss-partners-logos-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-partners-logos-link-1-setting',
		'type' => 'url'	
	)));	

// IMAGE 2
	$wp_customize->add_setting ('pss-partners-logos-image-2-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-partners-logos-image-2-control', array(
		'label' => 'Obrazek 2',
		'section' => 'pss-partners-logos-section',
		'settings' => 'pss-partners-logos-image-2-setting',
		'height' => 150,
		'flex_width' => true
	)));

// LINK 2
	$wp_customize->add_setting('pss-partners-logos-link-2-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-partners-logos-link-2-control', array(
		'label' => 'Obrazek 2 - link',
		'section' => 'pss-partners-logos-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-partners-logos-link-2-setting',
		'type' => 'url'	
	)));	

// IMAGE 3
	$wp_customize->add_setting ('pss-partners-logos-image-3-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-partners-logos-image-3-control', array(
		'label' => 'Obrazek 3',
		'section' => 'pss-partners-logos-section',
		'settings' => 'pss-partners-logos-image-3-setting',
		'height' => 150,
		'flex_width' => true
	)));

// LINK 3
	$wp_customize->add_setting('pss-partners-logos-link-3-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-partners-logos-link-3-control', array(
		'label' => 'Obrazek 3 - link',
		'section' => 'pss-partners-logos-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-partners-logos-link-3-setting',
		'type' => 'url'	
	)));	

// IMAGE 4
	$wp_customize->add_setting ('pss-partners-logos-image-4-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-partners-logos-image-4-control', array(
		'label' => 'Obrazek 4',
		'section' => 'pss-partners-logos-section',
		'settings' => 'pss-partners-logos-image-4-setting',
		'height' => 150,
		'flex_width' => true
	)));

// LINK 4
	$wp_customize->add_setting('pss-partners-logos-link-4-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-partners-logos-link-4-control', array(
		'label' => 'Obrazek 4 - link',
		'section' => 'pss-partners-logos-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-partners-logos-link-4-setting',
		'type' => 'url'	
	)));	

// IMAGE 5
	$wp_customize->add_setting ('pss-partners-logos-image-5-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-partners-logos-image-5-control', array(
		'label' => 'Obrazek 5',
		'section' => 'pss-partners-logos-section',
		'settings' => 'pss-partners-logos-image-5-setting',
		'height' => 150,
		'flex_width' => true
	)));

// LINK 5
	$wp_customize->add_setting('pss-partners-logos-link-5-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-partners-logos-link-5-control', array(
		'label' => 'Obrazek 5 - link',
		'section' => 'pss-partners-logos-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-partners-logos-link-5-setting',
		'type' => 'url'	
	)));	

// IMAGE 6
	$wp_customize->add_setting ('pss-partners-logos-image-6-setting');
	$wp_customize->add_control ( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'pss-partners-logos-image-6-control', array(
		'label' => 'Obrazek 6',
		'description' => 'Obrazek dodatkowy',
		'section' => 'pss-partners-logos-section',
		'settings' => 'pss-partners-logos-image-6-setting',
		'height' => 150,
		'flex_width' => true
	)));

// LINK 6
	$wp_customize->add_setting('pss-partners-logos-link-6-setting');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-partners-logos-link-6-control', array(
		'label' => 'Obrazek 6 - link',
		'section' => 'pss-partners-logos-section',
		'description' => 'Link musi posiadać http:// lub https:// oraz www - przykładowo: http://www.google.com',
		'settings' => 'pss-partners-logos-link-6-setting',
		'type' => 'url'	
	)));	

// TEXT UNDERNEATH THE IMAGES
	$wp_customize->add_setting('pss-partners-logos-text-setting', array (
		'default' => 'W roku 2016 Stowarzyszenie "Wspólnota Polska" w ramach opieki nad Polonią i Polakami za granicą, udzieliło naszej szkole wsparcia finansowego w formie jednorazowych nagród okolicznościowych dla nauczycieli i dyrektorów szkół oraz przyznało kwotę częściowo pokrywającą koszty związane z wynajmem budynku. Projekt jest realizowany ze środków Kancelarii Senatu Rzeczypospolitej Polskiej. Serdecznie dziękujemy.'
		));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pss-partners-logos-text-control', array(
		'label' => 'Pole z tekstem pod obrazkami partnerów (logo)',
		'section' => 'pss-partners-logos-section',
		'settings' => 'pss-partners-logos-text-setting',
		'type' => 'textarea'
		)));



}

add_action ( 'customize_register', 'pss_partners_logos');	



?>