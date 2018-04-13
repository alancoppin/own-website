<?php

/* TEMPLATE PAGE PRINCIPAL */

get_header();
?>
<!-- START MAIN CONTENT -->
<main>
	<div class="cd-main-content">
		<?php
			$imageHead = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$imageHeadMedium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
			$imageHeadThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
		?>
		<section class="content about">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<span class="title">Front-end developer</span>
					<h2>I'm Alan Coppin</h2>
				</div>
		</section>
		<section class="content about">
			<div class="row">
				<div class="col-xl-8 col-lg-10 col-md-10 col-sm-10 offset-xl-2 offset-lg-1 offset-md-1 offset-sm-1 moving-about">
					<div class="head-about">
						<p>I'm Alan Coppin, 26 years old, Belgian interactive front-end developer with a big interest of design. Driven by my passion for the web, I try to learn and discover new things every day and create unique visuals and experiences.</p>
					</div>
					<div class="col-lg-6 offset-lg-6 col-md-12 content-about">
						<p class="one">I have a great thirst for knowledge and constantly learn new techniques, tools and workflows. I enjoy sharing my experiences and meeting new people. I'm actually learning React and Redux to improve my way to develop web application.</p>

						<p>My skills include HTML5/CSS3, Javascript/jQuery/Ajax, PHP/SQL, Wordpress development (Template/Plugin), Responsive Design, SEO friendly, Google Analytics, Adobe suite, GSAP, Bootstrap, E-commerce (Prestashop-Woocommerce)</p>

						<p>Outside the digital, I love sports, especially football and running. I like running in single track in the middle of nowhere.<br />
							I enjoy fly fishing in some rivers or lakes. Drinking and testing new beers is a real passion, I come from Belgium so it's for me a religion.
						</p>
						<p><a href="mailto:'alancoppin@gmail.com'" class="link">Contact me</a></p>
						</p>
						<ul>
							<li>
								<a href="https://www.linkedin.com/in/coppin-alan-8aa26ba5/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-logo.svg" alt="Linkedin Alan Coppin"></a>
							</li>
							<li>
								<a href="https://twitter.com/CoppinAlan" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-logo.svg" alt="Twitter Alan Coppin"></a>
							</li>
							<li>
								<a href="https://www.behance.net/hello75e0" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/behance-logo.svg" alt="Behance Alan Coppin"></a>
							</li>
							<li>
								<a href="https://github.com/alancoppin"><img src="<?php echo get_template_directory_uri(); ?>/img/github-logo.svg" alt="Github Alan Coppin"></a>
							</li>
							<li>
								<a href="https://codepen.io/alancoppin/"><img src="<?php echo get_template_directory_uri(); ?>/img/codepen.svg" alt="Codepen Alan Coppin"></a>
							</li>
							<li>
								<a href="https://www.instagram.com/alancoppin/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="Instagram Alan Coppin"></a>
							</li>
							<li>
								<a href="https://500px.com/alancoppin"><img src="<?php echo get_template_directory_uri(); ?>/img/500px-logo.svg" alt="500px Alan Coppin"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php echo get_field('content'); ?>
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