<?php
/**
 * Template Name: Transparent Header
 * Template Post Type: page
 *
 * A page template with a transparent header and no sidebar.
 *
 * @package Cordero
 */

get_header( 'transparent' );

?>

	<?php cordero_before_primary_content(); ?>

	<div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'no-title' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php cordero_after_primary_content(); ?>

<?php get_footer(); ?>
