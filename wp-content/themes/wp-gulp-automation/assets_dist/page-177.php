<?php

/* TEMPLATE PAGE PRINCIPAL */

get_header();
?>
<!-- START MAIN CONTENT -->
<main>
	<div class="cd-main-content">
		<section class="content project">
			<div class="row">
				<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 offset-xl-1 offset-lg-1 offset-md-1">
					<div class="masonry">
					<?php

						$args = array(
									'post_type' => 'project',
									'orderby' => 'date',
									'order' => 'DESC',
									'nopaging' => true
								);

						query_posts( $args );

						$flag = 0;

						if( have_posts() ) : while ( have_posts() ) : the_post();
							$imageHead = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
							$imageHeadMedium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$imageHeadThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
							$backColor = "style='color:".get_field('color')."'";
							if($flag%2!=0){
								$info = 'right';
							}else{
								$info='';
							}
					?>
						<div class="item <?php echo $info; ?>">
							<a class="inside" href="<?php the_permalink(); ?>" alt="<?php get_the_title(); ?>" data-color="<?php echo get_field('color'); ?>">
								<h3 class="title-img">
									<?php echo the_title(); ?>
									<span class="view-project">view project</span>
									</h3>
								<div class="wrapper" <?php echo $backColor; ?>>
									<span class="image-ratio" style="padding-bottom:calc(60vh/500px * 100%)"></span>
									<img class="lazyload inner-image" src="<?php echo $imageHead[0] ?>" data-srcset="<?php echo $imageHeadThumbnail[0] ?> 480w, <?php echo $imageHeadMedium[0] ?> 768w, <?php echo $imageHead[0] ?> 1360w, <?php echo $imageHead[0] ?> 1800w" data-sizes="auto" alt="<?php echo get_the_title() ?>" data-src="<?php echo $imageHead[0] ?>"  srcset="<?php echo $imageHeadThumbnail[0] ?> 480w, <?php echo $imageHeadMedium[0] ?> 768w, <?php echo $imageHead[0] ?> 1360w, <?php echo $imageHead[0] ?> 1800w">
									<noscript>					
				  						<img class="" src="<?php echo $imageHead[0] ?>" alt="<?php echo get_the_title() ?>" />
									</noscript>
								</div>
							</a>
						</div>
					<?
						$flag++;
						endwhile; endif;
						wp_reset_query();
					?>
					</div>
				</div>
			</div>
		</section>
		<aside class="lines grey">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</aside>
	</div>
<!-- END MAIN CONTENT -->
</main>
<?php
get_footer();
?>