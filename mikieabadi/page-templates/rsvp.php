<?php
/**
 * Template Name: RSVP Page
 *
 * Description: Template for rsvp page
 *
 * @package WordPress
 * @subpackage mikieabadi
 * @since mikieabadi 1.0
 */

get_header(); ?>

	<?php get_sidebar( 'front' ); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div style="clear: both"></div>

<?php get_footer(); ?>