<?php

get_header();

?>

<div class="nine columns">
                    <article class="main-content">

<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	 					<div class="post-content u-cf">

						<h2 class="post"><a href="<?php the_permalink(); ?>">
						<?php the_title(); ?></a></h2>

						<p class="post-info">Opublikowano w kategorii: 
							
						<?php 

							$categories = get_the_category(); 
							$separator = ", ";
							$output = '';

							if ($categories) {

								foreach ($categories as $category) {

									$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

								}

								echo trim($output, $separator);
							}

						 ?>

						 |

						 <?php the_time('j/m/Y'); ?></p>

						<?php the_content(); ?>

				

	<?php endwhile; ?>

			</div>
<?php
	else :
		echo '<p> No Content found</p>';

	endif; ?>

	</article>
                </div> 
                </div> 
                </div>


<?php get_footer(); ?>

