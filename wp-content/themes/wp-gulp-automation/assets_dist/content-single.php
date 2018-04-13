<?php

/* TEMPLATE SINGLE PROJECT */

get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<!-- START MAIN CONTENT -->
	<div class="cd-main-content">
		<?php echo get_field('content'); ?>
	</div>
<!-- END MAIN CONTENT -->
<?php endwhile; endif; ?>
<?php
get_footer();
?>