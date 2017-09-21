<?php 

get_header('posts-n-pages'); ?>


				
				<?php 

					if (have_posts()) :
						$count = 1; 
					while (have_posts()) : the_post();  ?>

					<?php get_template_part ('content'); ?>

					<?php get_sidebar(); ?>

					<?php get_footer(); ?>
