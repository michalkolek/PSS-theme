<?php

get_header();


if (have_posts()) :

?>
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

<?php  

	while (have_posts()) : the_post(); ?>

	 						<div class="post-content u-cf">

	 					<?php if (has_post_thumbnail()) {
	 						?>
	 						<div class="post-thumbnail u-cf"><a href="<?php the_permalink(); ?>">
	 					<?php the_post_thumbnail('small-thumbnail')  ?></a>
						</div>
						
						<?php } ?>

							<h2 class="post"><a href="<?php the_permalink(); ?>">
						<?php the_title(); ?></a></h2>

						<p class="post-info"><i class="fa fa-folder-open" aria-hidden="true"></i>  
							
						<?php 

							$categories = get_the_category(); 
							$separator = ", ";
							$output = '';

							if ($categories) {

								foreach ($categories as $category) {

									$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

								}

								echo trim ($output, $separator);
							}

						 ?>

						 |

						<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j/m/Y'); ?></p>
						<?php the_content(); ?>

				

	<?php endwhile;

			

	else :
		echo '<p> No Content found</p>';

	endif; ?>

	</article>
                </div> 
                </div> 
                </div>


<?php get_footer(); ?>
?>
