<?php
$count = 1;
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
<div class="post-content u-cf">
	<h2 class="post">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>

	<?php if (has_post_thumbnail()) { ?>
	<div class="post-thumbnail u-cf">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('small-thumbnail')  ?>
		</a>
	</div>
	<?php } ?>
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
		<?php if (in_category('18')) {} 
			else { ?>
				|
				<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j/m/Y'); }?> 
		<?php if (is_single()) { ?>
		|
		<i class="fa fa-print" aria-hidden="true">&nbsp;</i><a href="javascript:window.print()">Drukuj</a>
		<?php } } ?>
	</p>
	<?php the_content(); ?>
	<?php if (is_single() OR is_page()) {}
	else {
		?> 
		
		<?php } ?>

	</div>
	<hr>

			<?php if ( 2 === $count ) { ?>
		<?php 
		if (get_theme_mod ( 'pss-ads-main-1-link-setting' ) && get_theme_mod( 'pss-ads-main-1-image-setting' ) ) {
			?> 
			<div class="main-content-advert"> 
				<p class="advert--italic advert--main--checkbox">--- Reklama ---</p>
				<p>
					<a href="<?php echo get_theme_mod('pss-ads-main-1-link-setting');?> ">
						<img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-ads-main-1-image-setting')); ?>">
					</a>
				</p>
				<p class="advert--italic advert--main--checkbox">--- Reklama ---</p>
			</div>
			<hr>
			<?php }
			elseif (get_theme_mod ( 'pss-ads-main-1-link-text-setting' ) )	{ ?>
			<div class="main-content-advert">
				<p>
					<a href="<?php echo get_permalink (23);?>">
						<?php echo get_theme_mod('pss-ads-main-1-link-text-setting'); ?>
					</a>
				</p>
				<hr>
			</div>
			<?php }
			else {
			} 
		}
		if ( 4 === $count ) { ?>
		<?php 
		if (get_theme_mod ( 'pss-ads-main-2-link-setting' ) && get_theme_mod( 'pss-ads-main-2-image-setting' ) ) {
			?>
			<hr> 
			<div class="main-content-advert"> 
				<p class="advert--italic advert--main--checkbox">--- Reklama ---</p>
				<p>
					<a href="<?php echo get_theme_mod('pss-ads-main-2-link-setting');?> ">
						<img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-ads-main-2-image-setting')); ?>">
					</a>
				</p>
				<p class="advert--italic advert--main--checkbox">--- Reklama ---</p>
			</div>
			<?php }
			elseif (get_theme_mod ( 'pss-ads-main-2-link-text-setting' ) )	{ ?>
			<div class="main-content-advert">
				<p>
					<a href="<?php echo get_permalink (23);?>">
						<?php echo get_theme_mod('pss-ads-main-2-link-text-setting'); ?>
					</a>
				</p>
				
			</div>
			<hr>
			<?php }
			else {
			} 
		}
		$count++; ?>
<?php endwhile; ?>
<div class="pagination-links"><p><?php echo paginate_links(); ?> </p></div>
<?php else :
	echo '<p> No Content found</p>';
	endif; ?>
