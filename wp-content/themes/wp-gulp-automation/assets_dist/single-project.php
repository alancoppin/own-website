<?php

/* TEMPLATE SINGLE PROJECT */

get_header();
?>
<main>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<!-- START MAIN CONTENT -->
	<div class="cd-main-content" data-color="<?php the_field('color'); ?>">
		<?php
			$imageHead = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$imageHeadMedium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
			$imageHeadThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
		?>
		<section class="content page-project">
			<div class="row">
				<div class="col-xl-8 col-lg-10 col-md-10 col-sm-10 offset-xl-2 offset-lg-1 offset-md-1 offset-sm-1">
					<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 title-content">
						<span class="date"><?php the_field('date'); ?></span>
						 <h1><?php the_title(); ?></h1>
						 <div class="tags">
						 	<?php
								$posttags = get_the_tags();
								if ($posttags) {
								  echo '<ul>';
								  foreach($posttags as $tag) {
								    echo '<li>' .$tag->name. '</li>'; 
								  }
								  echo '</ul>';
								}
							?>
						 </div>
						 <a class="link-out" href="<?php the_field('link_website'); ?>" target="_blank">
						 	<?php
							 	$data = get_field('link_website');    
								$whatIWant = substr($data, strpos($data, "//") + 2);    
								echo $whatIWant;
							?>
						 	<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 20.3 10" style="enable-background:new 0 0 20.3 10;" xml:space="preserve">
								<line id="XMLID_1_" class="st0" x1="0.5" y1="5" x2="18.3" y2="5"/>
								<line id="XMLID_2_" class="st0" x1="19.3" y1="5.3" x2="16.6" y2="2.6"/>
								<line id="XMLID_4_" class="st0" x1="19.3" y1="4.6" x2="16.6" y2="7.3"/>
							</svg>
						 </a>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 text-content" style="background-color: <?php the_field('color'); ?>">
						<?php the_field('content'); ?>
					</div>
				</div>
			</div>
		</section>
		<?php if( have_rows('list_image') ): ?>

			<section class="content project-content">
				<div class="row">
					<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 offset-xl-1 offset-lg-1 offset-md-1">

			<?php while( have_rows('list_image') ): the_row(); 

				// vars
				$image1 = get_sub_field('image_one');
				$image2 = get_sub_field('image_two');
				$image3 = get_sub_field('image_three');
				$image4 = get_sub_field('image_four');

				$thumb1 = $image1['sizes']['thumbnail'];
				$medium1 = $image1['sizes']['medium'];
				$large1 = $image1['sizes']['large'];
				$full1 = $image1['url'];
				$alt1 = $image1['alt'];
				$width1 = $image1['sizes'][ 'large-width' ];
				$height1 = $image1['sizes'][ 'large-height' ];

				$thumb2 = $image2['sizes']['thumbnail'];
				$medium2 = $image2['sizes']['medium'];
				$large2 = $image2['sizes']['large'];
				$full2 = $image2['sizes']['full'];
				$alt2 = $image2['alt'];
				$width2 = $image2['sizes'][ 'large-width' ];
				$height2 = $image2['sizes'][ 'large-height' ];

				$thumb3 = $image3['sizes']['thumbnail'];
				$medium3 = $image3['sizes']['medium'];
				$large3 = $image3['sizes']['large'];
				$full3 = $image3['sizes']['full'];
				$alt3 = $image3['alt'];
				$width3 = $image3['sizes'][ 'large-width' ];
				$height3 = $image3['sizes'][ 'large-height' ];

				$thumb4 = $image4['sizes']['thumbnail'];
				$medium4 = $image4['sizes']['medium'];
				$large4 = $image4['sizes']['large'];
				$full4 = $image4['sizes']['full'];
				$alt4 = $image4['alt'];
				$width4 = $image4['sizes'][ 'large-width' ];
				$height4 = $image4['sizes'][ 'large-height' ];
					
				?>

				<?php if($image1 && $image2 && $image3 && $image4): ?>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 screen">
					<div class="content-image" style="background-color: <?php echo get_field('color'); ?>">
						<img class="lazyload" src="<?php echo $large1 ?>" data-srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w" data-sizes="auto" alt="<?php echo $alt1 ?>" data-src="<?php echo $large1 ?>" srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w">
						<noscript>					
	  						<img class="" src="<?php echo $large1 ?>" alt="<?php echo $alt1 ?>" />
						</noscript>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 screen">
					<div class="content-image" style="background-color: <?php echo get_field('color'); ?>">
						<img class="lazyload" src="<?php echo $large2 ?>" data-srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w" data-sizes="auto" alt="<?php echo $alt2 ?>" data-src="<?php echo $large2 ?>" srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w">
						<noscript>					
	  						<img class="" src="<?php echo $large2 ?>" alt="<?php echo $alt2 ?>" />
						</noscript>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-32 screen">
					<div class="content-image" style="background-color: <?php echo get_field('color'); ?>">
						<img class="lazyload" src="<?php echo $large3 ?>" data-srcset="<?php echo $thumb3 ?> 480w, <?php echo $medium3 ?> 768w, <?php echo $large3 ?> 3360w" data-sizes="auto" alt="<?php echo $alt3 ?>" data-src="<?php echo $large3 ?>" srcset="<?php echo $thumb3 ?> 480w, <?php echo $medium3 ?> 768w, <?php echo $large3 ?> 3360w">
						<noscript>					
	  						<img class="" src="<?php echo $large3 ?>" alt="<?php echo $alt3 ?>" />
						</noscript>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 screen">
					<img class="lazyload" src="<?php echo $large4 ?>" data-srcset="<?php echo $thumb4 ?> 480w, <?php echo $medium4 ?> 768w, <?php echo $large4 ?> 4360w" data-sizes="auto" alt="<?php echo $alt4 ?>" data-src="<?php echo $large4 ?>"  srcset="<?php echo $thumb4 ?> 480w, <?php echo $medium4 ?> 768w, <?php echo $large4 ?> 4360w">
					<noscript>					
  						<img class="" src="<?php echo $large4 ?>" alt="<?php echo $alt4 ?>"  />
					</noscript>
				</div>

				<?php elseif($image1 && $image2 && $image3): ?>
				<?php 
					if(strpos($full1, 'gif') !== false):
						$backColor  = "style='color: #F7F7F7;'";
					else:
						$backColor = "style='color:".get_field('color')."'";
					endif;
				?>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 screen">
					<div class="content-image" <?php echo $backColor; ?>>
						<span class="image-ratio" style="padding-bottom: calc(<?php echo $height1; ?> / <?php echo $width1; ?> * 100%);"></span>
						<img class="lazyload inner-image" src="<?php echo $large1 ?>" data-srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w" data-sizes="auto" alt="<?php echo $alt1 ?>" data-src="<?php echo $large1 ?>" srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w">
						<noscript>					
	  						<img class="" src="<?php echo $large1 ?>" alt="<?php echo $alt1 ?>" />
						</noscript>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 screen">
					<div class="content-image" <?php echo $backColor; ?>>
						<span class="image-ratio" style="padding-bottom: calc(<?php echo $height2; ?> / <?php echo $width2; ?> * 100%);"></span>
						<img class="lazyload inner-image" src="<?php echo $large2 ?>" data-srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w" data-sizes="auto" alt="<?php echo $alt2 ?>" data-src="<?php echo $large2 ?>" srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w">
						<noscript>					
	  						<img class="" src="<?php echo $large2 ?>" alt="<?php echo $alt2 ?>" />
						</noscript>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 screen">
					<div class="content-image" <?php echo $backColor; ?>>
						<span class="image-ratio" style="padding-bottom: calc(<?php echo $height3; ?> / <?php echo $width3; ?> * 100%);"></span>
						<img class="lazyload inner-image" src="<?php echo $large3 ?>" data-srcset="<?php echo $thumb3 ?> 480w, <?php echo $medium3 ?> 768w, <?php echo $large3 ?> 3360w" data-sizes="auto" alt="<?php echo $alt3 ?>" data-src="<?php echo $large3 ?>" srcset="<?php echo $thumb3 ?> 480w, <?php echo $medium3 ?> 768w, <?php echo $large3 ?> 3360w">
						<noscript>					
	  						<img class="" src="<?php echo $large3 ?>" alt="<?php echo $alt3 ?>" />
						</noscript>
					</div>
				</div>

			<?php elseif($image1 && $image2): ?>

				<?php 
					if(strpos($full1, 'gif') !== false):
						$backColor  = "style='color: #F7F7F7;'";
					else:
						$backColor = "style='color:".get_field('color')."'";
					endif;
					?>
						<?php if(strpos($full1, 'gif') !== false): ?>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 screen">
								<div class="content-image" <?php echo $backColor; ?>>
									<span class="image-ratio" style="padding-bottom: calc(<?php echo $height1; ?> / <?php echo $width1; ?> * 60%);"></span>
								<img class="lazyload gif-height inner-image" src="<?php echo $large1 ?>" data-srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w" data-sizes="auto" alt="<?php echo $alt1 ?>" data-src="<?php echo $large1 ?>"  srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w">
								<noscript>					
			  						<img class="" src="<?php echo $large1 ?>" alt="<?php echo $alt1 ?>" />
								</noscript>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 screen">
								<div class="content-image" <?php echo $backColor; ?>>
									<span class="image-ratio" style="padding-bottom: calc(<?php echo $height2; ?> / <?php echo $width2; ?> * 60%);"></span>
								<img class="lazyload gif-height inner-image" src="<?php echo $large2 ?>" data-srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w" data-sizes="auto" alt="<?php echo $alt2 ?>" data-src="<?php echo $large2 ?>" srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w">
								<noscript>					
			  						<img class="" src="<?php echo $large2 ?>" alt="<?php echo $alt2 ?>" />
								</noscript>
								</div>
							</div>
						<? else: ?>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 screen">
								<div class="content-image" <?php echo $backColor; ?>>
									<span class="image-ratio" style="padding-bottom: calc(<?php echo $height1; ?> / <?php echo $width1; ?> * 100%);"></span>
									<img class="lazyload" src="<?php echo $large1 ?>" data-srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w" data-sizes="auto" alt="<?php echo $alt1 ?>" data-src="<?php echo $large1 ?>"  srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w">
									<noscript>					
				  						<img class="" src="<?php echo $large1 ?>" alt="<?php echo $alt1 ?>" />
									</noscript>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 screen">
								<div class="content-image" <?php echo $backColor; ?>>
									<span class="image-ratio" style="padding-bottom: calc(<?php echo $height2; ?> / <?php echo $width2; ?> * 100%);"></span>
									<img class="lazyload" src="<?php echo $large2 ?>" data-srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w" data-sizes="auto" alt="<?php echo $alt2 ?>" data-src="<?php echo $large2 ?>" srcset="<?php echo $thumb2 ?> 480w, <?php echo $medium2 ?> 768w, <?php echo $large2 ?> 2360w">
									<noscript>					
				  						<img class="" src="<?php echo $large2 ?>" alt="<?php echo $alt2 ?>" />
									</noscript>
								</div>
							</div>
						<? endif; ?>

				<?php elseif($image1): ?>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 screen">
						<?php 
						if(strpos($full1, 'gif') !== false):
							$backColor  = "style='color: #F7F7F7;'";
						else:
							$backColor = "style='color:".get_field('color')."'";
						endif;
						?>
					<div class="content-image" <?php echo $backColor ?>>
						<?php if(strpos($full1, 'gif') !== false): ?>
							<span class="image-ratio" style="padding-bottom: calc(<?php echo $height1; ?> / <?php echo $width1; ?> * 100%);"></span>
							<img class="lazyload gif inner-image" src="<?php echo $large1 ?>" data-srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w, <?php echo $full1 ?> 1800w" data-sizes="auto" alt="<?php echo $alt1 ?>" data-src="<?php echo $large1 ?>"  srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w, <?php echo $full1 ?> 1800w">
							<noscript>					
		  						<img class="" src="<?php echo $large1 ?>" alt="<?php echo $alt1 ?>" />
							</noscript>
						<? else: ?>
							<span class="image-ratio" style="padding-bottom: calc(<?php echo $height1; ?> / <?php echo $width1; ?> * 100%);"></span>
							<img class="lazyload inner-image" src="<?php echo $large1 ?>" data-srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w, <?php echo $full1 ?> 1800w" data-sizes="auto" alt="<?php echo $alt1 ?>" data-src="<?php echo $large1 ?>"  srcset="<?php echo $thumb1 ?> 480w, <?php echo $medium1 ?> 768w, <?php echo $large1 ?> 1360w, <?php echo $full1 ?> 1800w">
							<noscript>					
		  						<img class="" src="<?php echo $large1 ?>" alt="<?php echo $alt1 ?>" />
							</noscript>
						<? endif; ?>
					</div>
				</div>

				<?php endif; ?>

			<?php endwhile; ?>

					</div>
					<a href="<?php bloginfo('url') ?>/project" class="inside all-project" data-color="#393939">
						<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 9.4 5.3" style="enable-background:new 0 0 9.4 5.3;" xml:space="preserve">
						<g id="XMLID_5_">
							<line id="XMLID_1_" class="st0" x1="1" y1="2.6" x2="9" y2="2.6"/>
							<line id="XMLID_2_" class="st0" x1="0.8" y1="2.3" x2="3.2" y2="4.7"/>
							<line id="XMLID_4_" class="st0" x1="3.2" y1="0.6" x2="0.8" y2="3"/>
						</g>
						</svg>
						View other projects
					</a>
				</div>
			</section>

		<?php endif; ?>
		<aside class="lines">
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
<?php endwhile; endif; ?>
<?php
get_footer();
?>