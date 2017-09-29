<?php
	$count = 1;
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>



<div class="post-content u-cf">
	<?php if (in_category('7')) { 
		
	} 

		elseif (has_post_thumbnail()) {  ?>
			<div class="post-thumbnail u-cf">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('small-thumbnail')  ?>
			</a>
		</div>
		<?php } 

		else {} ?>

<h2 class="post">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<p class="post-info">
	


	<?php if (in_category('7')) { ?>
			<i class="fa fa-folder-open" aria-hidden="true"></i> 
			
			<a href="<?php echo get_page_link(145); ?>">Kadra</a>

			|

			<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j/m/Y'); ?>
		
				<?php if (is_single()) { ?>
				|
				<i class="fa fa-print" aria-hidden="true">&nbsp;</i><a href="javascript:window.print()">Drukuj</a>
				<?php } ?>

<?php }	 else {	?>	

	
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
	<?php if (is_single()) { ?>
	|
	<i class="fa fa-print" aria-hidden="true">&nbsp;</i><a href="javascript:window.print()">Drukuj</a>
	<?php } } ?>


</p>



<?php the_content(); ?>

<?php if (is_single() OR is_page()) {}

else {
	?> 
	<hr>
<?php } ?>


<?php if ( 2 === $count ) { ?>
		<div class="main-content-advert">
			<p>Jakas reklama</p>		
			<hr>
		</div>
		
<?php }

if ( 4 === $count ) { ?>
		<div class="main-content-advert">
			<p>Jakas reklama</p>		
			<hr>
		</div>
		
<?php }

$count++; ?>


</div>


<?php endwhile; ?>

<div class="pagination-links"><p><?php echo paginate_links(); ?> </p></div>

	<?php else :
		echo '<p> No Content found</p>';

	endif; ?>
