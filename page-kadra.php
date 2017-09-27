<?php 

get_header();

get_sidebar(); 

?>

<div class="row kadra-container">

<?php
$i = 1;

$kadraPosts = new WP_Query(array(
	'category_name' => 'kadra'
));

if ($kadraPosts->have_posts()) :

	while ($kadraPosts->have_posts()) :

		$kadraPosts->the_post ();

			get_template_part('content', 'kadra');

			if ($i % 3 == 0) { ?>

			</div><div class="row kadra-container">

			<?php } 
			$i++; 


	endwhile;

endif;


?>



<?php get_footer(); ?>


