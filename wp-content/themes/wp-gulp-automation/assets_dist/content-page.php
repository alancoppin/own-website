<?php

/* TEMPLATE PAGE PRINCIPAL */

get_header();
?>
<!-- START MAIN CONTENT -->
<main>
	<?php
		$imageHead = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	?>	
	<section id="head-image" style="background-image:url(<?php echo $imageHead[0] ?>)">
	</section>
	<section id="content">
		<div class="row">
			<div class="col-xl-8 col-lg-10 col-md-12 col-xs-12 offset-xl-2 offset-lg-1">
					<h1><?php the_title(); ?></h1>
			          <?php the_content(); ?>
			</div>
		</div>
	</section>
	<!-- END SECTION CONTENT -->
</main>
<!-- END MAIN CONTENT -->
<?php
get_footer();
?>