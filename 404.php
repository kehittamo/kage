<?php
/**
 * 404
 *
 * @package kage
 * @since 1.0.0
 */

?>
<?php get_template_part( 'templates/page', 'header' ); ?>

<div class="alert alert-warning">
	<?php esc_html_e( 'Sorry, but the page you were trying to view does not exist.', 'kage' ); ?>
</div>

<?php get_search_form(); ?>
