<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="apple-touch-icon-precomposed">
		<link typ="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="logo">
				<a href="<?php echo bloginfo('url'); ?>" class="link-logo inside" data-color="#393939">Alan Coppin</a>
				<div class="breadcrumb">
					<a href="" class="inside" data-color="#393939">
						<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 9.4 5.3" style="enable-background:new 0 0 9.4 5.3;" xml:space="preserve">
						<g id="XMLID_5_">
							<line id="XMLID_1_" class="st0" x1="1" y1="2.6" x2="9" y2="2.6"/>
							<line id="XMLID_2_" class="st0" x1="0.8" y1="2.3" x2="3.2" y2="4.7"/>
							<line id="XMLID_4_" class="st0" x1="3.2" y1="0.6" x2="0.8" y2="3"/>
						</g>
						</svg>
						Back to
						<span class="text-breadcrumb" >Project</span>
					</a>
				</div>
			</div>
			<nav>
				<a href="<?php echo bloginfo('url'); ?>/about" class="inside" id="about">about.</a>
			</nav>
			<!--<div class="burger">
				<div class="element top"></div>
				<div class="element middle"></div>
				<div class="element bottom"></div>
			</div>-->
		</header>
		<aside>
			<div class="bullet">
			</div>
			<?php
				if(get_field('color')){
					$color = 'style="background-color:'.get_field('color').'"';
				}else{
					$color = '';
				}
			?>
			<div class="content-border">
				<div class="border right" <?php echo $color; ?>></div>
				<div class="border bottom" <?php echo $color; ?>></div>
				<div class="border left" <?php echo $color; ?>></div>
				<div class="border top" <?php echo $color; ?>></div>
			</div>
		</aside>
