<?php
/**
 * The template for displaying archive pages
 *
 * @package Cordero
 */

get_header();

if ( ! is_active_sidebar( 'cordero-sidebar' ) || get_theme_mod( 'sidebar_position' ) === 'below' ) {
	$page_full_width = ' full-width';
} else {
	$page_full_width = '';
}
?>

	<?php cordero_before_primary_content(); ?>

	<div id="primary" class="content-area<?php echo $page_full_width;?>">
		<main id="main" class="site-main post-columns-<?php echo esc_attr( get_theme_mod( 'blog_columns', '2' ) );?>" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<?php
				the_archive_title( '<h1 class="archive-title"' . cordero_schema_prop( 'headline', 'false' ) . '>', '</h1>' );
				the_archive_description( '<div class="archive-description"' . cordero_schema_prop( 'desc', 'false' ) . '>', '</div>' );
				?>
			</header><!-- .archive-header -->

			<ul class="archive-sub-cats">
			<?php
			if ( get_queried_object_id() ) {
				wp_list_categories( array(
					'child_of' => get_queried_object_id(),
					'depth' => 1,
					'orderby' => 'name',
					'title_li' => '',
					'show_option_none' => ''
				) );
			}
			?>
			</ul>

			<div id="grid-loop">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content' ); ?>

				<?php endwhile; ?>

			</div><!-- #grid-loop -->
		
			<?php the_posts_pagination( array(
						'prev_text' => '<i class="dashicons dashicons-arrow-left-alt2"></i>',
						'next_text' => '<i class="dashicons dashicons-arrow-right-alt2"></i>',
					) ); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php cordero_after_primary_content(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
