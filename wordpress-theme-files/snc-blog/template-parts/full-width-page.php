<?php
/**
 * Template Name: Full width page
 *
 * @package SNC Blog
 */

get_header(); ?>

	<div class="fw-primary">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		<?php endwhile; // End of the loop. ?>
	</div><!-- / .l-primary  -->


<?php get_footer(); ?>
