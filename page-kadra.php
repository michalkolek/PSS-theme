<?php 
get_header();
get_sidebar(); 
?>

<?php echo apply_filters('the_content', get_post_field('post_content', $post_id=145));?>

<h3 class="kadra-title">Dyrekcja</h3>
<div class="kadra-wrapper">
	<?php
	$kadraPosts = new WP_Query(array(
		'category_name' => 'kadra-dyrekcja',
		'posts_per_page' => '-1'
		));
	if ($kadraPosts->have_posts()) :
		while ($kadraPosts->have_posts()) :
			$kadraPosts->the_post (); ?>


		<div class="kadra-box">
			<div class="kadra-image">
				<?php if ( has_post_thumbnail() ) 
				{
					the_post_thumbnail('small-thumbnail'); 
				}

				else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/female-placeholder.jpg" alt="<?php the_title(); ?>" />
				<?php			}
				?>

			</div>
			<h4 class="kadra-title"><?php the_title(); ?>
			</h4>
			<h5 class="kadra-text"><?php the_content(); ?>
			</h5>

		</div>

		<?php 

		endwhile; 

		endif; ?>
</div>

<h3 class="kadra-title">Zarząd</h3>
<div class="kadra-wrapper">
	<?php
	$kadraPosts = new WP_Query(array(
		'category_name' => 'kadra-zarzad',
		'posts_per_page' => '-1'
		));
	if ($kadraPosts->have_posts()) :
		while ($kadraPosts->have_posts()) :
			$kadraPosts->the_post (); ?>


		<div class="kadra-box">
			<div class="kadra-image">
				<?php if ( has_post_thumbnail() ) 
				{
					the_post_thumbnail('small-thumbnail'); 
				}

				else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/female-placeholder.jpg" alt="<?php the_title(); ?>" />
				<?php			}
				?>

			</div>
			<h4 class="kadra-title"><?php the_title(); ?>
			</h4>
			<h5 class="kadra-text"><?php the_content(); ?>
			</h5>

		</div>

		<?php 

		endwhile; 

		endif; ?>

</div>

<h3 class="kadra-title">Administracja</h3>
<div class="kadra-wrapper">
	<?php
	$kadraPosts = new WP_Query(array(
		'category_name' => 'kadra-administracja',
		'posts_per_page' => '-1'
		));
	if ($kadraPosts->have_posts()) :
		while ($kadraPosts->have_posts()) :
			$kadraPosts->the_post (); ?>


		<div class="kadra-box">
			<div class="kadra-image">
				<?php if ( has_post_thumbnail() ) 
				{
					the_post_thumbnail('small-thumbnail'); 
				}

				else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/female-placeholder.jpg" alt="<?php the_title(); ?>" />
				<?php			}
				?>

			</div>
			<h4 class="kadra-title"><?php the_title(); ?>
			</h4>
			<h5 class="kadra-text"><?php the_content(); ?>
			</h5>

		</div>

		<?php 

		endwhile; 

		endif; ?>

</div>

<h3 class="kadra-title">Grono pedagogiczne</h3>
<div class="kadra-wrapper">
	<?php
	$kadraPosts = new WP_Query(array(
		'category_name' => 'kadra-grono-pedagogiczne',
		'posts_per_page' => '-1'
		));
	if ($kadraPosts->have_posts()) :
		while ($kadraPosts->have_posts()) :
			$kadraPosts->the_post (); ?>


		<div class="kadra-box">
			<div class="kadra-image">
				<?php if ( has_post_thumbnail() ) 
				{
					the_post_thumbnail('small-thumbnail'); 
				}

				else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/female-placeholder.jpg" alt="<?php the_title(); ?>" />
				<?php			}
				?>

			</div>
			<h4 class="kadra-title"><?php the_title(); ?>
			</h4>
			<h5 class="kadra-text"><?php the_content(); ?>
			</h5>

		</div>

		<?php 

		endwhile; 

		endif; ?>

</div>

<h3 class="kadra-title">Trenerzy</h3>
<div class="kadra-wrapper">
	<?php
	$kadraPosts = new WP_Query(array(
		'category_name' => 'kadra-trenerzy',
		'posts_per_page' => '-1'
		));
	if ($kadraPosts->have_posts()) :
		while ($kadraPosts->have_posts()) :
			$kadraPosts->the_post (); ?>


		<div class="kadra-box">
			<div class="kadra-image">
				<?php if ( has_post_thumbnail() ) 
				{
					the_post_thumbnail('small-thumbnail'); 
				}

				else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/female-placeholder.jpg" alt="<?php the_title(); ?>" />
				<?php			}
				?>

			</div>
			<h4 class="kadra-title"><?php the_title(); ?>
			</h4>
			<h5 class="kadra-text"><?php the_content(); ?>
			</h5>

		</div>

		<?php 

		endwhile; 

		endif; ?>

</div>

		<?php get_footer(); ?>
