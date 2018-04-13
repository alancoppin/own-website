<?php
get_header();
?>
<div class="welcoming">
	<p>I'm Alan Coppin</p>
	<p>Front-end developer</p>
</div>
<span id="typed"></span>
<main id="content">
	<div class="cd-main-content">
	<div class="wrapper" data-color="#393939">
		<?php

			$args = array(
						'post_type' => 'project',
						'orderby' => 'date',
						'order' => 'DESC',
						'nopaging' => true
					);

			query_posts( $args );

			$i = 1;
			$active='';

			if( have_posts() ) : while ( have_posts() ) : the_post();

				$imgProject = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );

			?>
				<div class="slide" id="<?php the_field('link'); ?>">
					<a href="<?php the_permalink(); ?>" class="inside not" data-color="<?php the_field('color'); ?>">
					<div class="content-view-slide">
						<div class="view-slide" style="background:url(<?php echo $imgProject[0]; ?>)">
							 <div class="overlay" style="background-color:<?php the_field('color'); ?>"></div>
						</div>
					</div>
					<div class="text-slide">
						<div class="head-text">
							<span class="number-slide">0<?php echo $i; ?>.</span>
							<span class="type-slide"><?php echo get_field('tag'); ?></span>
						</div>
						<h2 class="title-slide">
							<?php
								$title = get_the_title();
								$length = strlen($title);

								for($x=0;$x<$length;$x++){
									if($title[$x]==' '){
										echo '<span class="letter">&nbsp</span>';
									}else{
										echo '<span class="letter">'.$title[$x].'</span>';
									}
								}
							?>
						</h2>
						<div class="desc-slide">
							<p><?php the_field('description') ?></p>
						</div>
					</div>
					</a>
				</div>

		<?
				$i++;
			endwhile; endif;
			wp_reset_query();
		?>
	</div>
	<nav class="slides">
		<?php

			$args = array(
						'post_type' => 'project',
						'orderby' => 'date',
						'order' => 'DESC',
						'nopaging' => true
					);

			query_posts( $args );

			$o=1;
			$activeNav = '';

			if( have_posts() ) : while ( have_posts() ) : the_post();
			?>

				<div class="nav-slides" data-id="<?php the_field('link'); ?>" data-color="<?php the_field('color'); ?>">
					<div class="after"></div>
					<span class="number"><?php the_title() ?></span>
				</div>

			<?
				$o++;
			endwhile; endif;
				wp_reset_query();
			?>
	</nav>
	<div class="scroll">
		<span class="text-scroll">Scroll</span>
	</div>
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
</main>
<?php
get_footer();
?>
