<?php
	$count = 1;
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>



<div class="post-content u-cf">
	<?php if (has_post_thumbnail()) { ?>
		<div class="post-thumbnail u-cf">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('small-thumbnail')  ?>
			</a>
		</div>
	<?php } ?>

<h2 class="post">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<p class="post-info">
	<i class="fa fa-folder-open" aria-hidden="true"></i> 
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
	<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j/m/Y'); ?>
</p>

<?php the_content(); 

if ( 2 === $count ) { ?>
		<div class="main-content-advert">
			<hr>
			<p>Lorem ipsum</p>		
			<p>Lorem impsum</p>

		</div>
		
<?php }

$count++; ?>


</div>

<?php if (is_single() OR is_page()) {}

else {
	?> 
	<hr>
<?php }


 endwhile;
	else :
		echo '<p> No Content found</p>';

	endif; ?>



