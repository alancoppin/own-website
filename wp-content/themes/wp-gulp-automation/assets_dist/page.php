<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Choix du modèle de page -->

    	
		<?php 
			get_template_part ('content','page');
		?>


    <?php endwhile; ?>

    <?php endif; ?>


<?php get_footer(); ?>