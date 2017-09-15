<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	 <div class="nine columns">
                    <article class="main-content">

                    <div class="row">
						<?php
							$i = 1;
							while ( $the_query->have_posts() ) {

							  $the_query->the_post();
							        get_template_part('content', 'team');

							 if ($i % 3 == 0){ ?>
							</div><div class="row">
							<?php } ?>
							<?php $i++; ?>
							<?php } ?>

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php the_content(); ?>

						</article>
                </div>

	<?php endwhile; 

	else :
		echo '<p> No Content found</p>';

	endif;

get_footer();

?>

