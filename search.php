<?php
/**
 * Search
 *
 * @package kage
 * @since 1.0.0
 */

?>
<?php get_template_part( 'templates/page', 'header' ); ?>

<?php if ( ! have_posts() ) : ?>
	<div class="alert alert-warning">
		<?php esc_html_e( 'Sorry, no results were found.', 'kage' ); ?>
	</div>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php
while ( have_posts() ) :
	the_post();
?>
	<?php get_template_part( 'templates/content', 'search' ); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
