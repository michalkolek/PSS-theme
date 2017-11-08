<?php
get_header();
get_sidebar(); ?>
<h5><?php 
	if ( is_category()) {
		echo 'Wszystkie wpisy w kategorii: ';
		echo single_cat_title();
	}
	elseif ( is_tag() ) {
		echo 'Wszystkie wpisy oznaczone tagiem: ';
		echo single_tag_title();
	}
	elseif ( is_author() ) {
		the_post();
		echo 'Wszystkie wpisy autora:';
		echo get_the_author();
		rewind_posts();	
	}
	elseif ( is_day() ) {
		echo 'Wszystkie wpisy z dnia: ';
		echo get_the_date();
	}
	elseif ( is_month() ) {
		echo 'Wszystkie wpisy z miesiąca: ';
		echo get_the_date('F Y');
	}
	elseif ( is_year() ) {
		echo 'Wszystkie wpisy z roku: ';
		echo get_the_date('Y');
	}
	else {
		echo 'Archiwum:';
	}
	?></h5>
<?php get_template_part ('content'); 
get_footer(); 