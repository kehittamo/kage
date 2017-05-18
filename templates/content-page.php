<?php
/**
 * Content page
 *
 * @package kage
 * @since 1.0.0
 */

?>
<?php the_content(); ?>
<?php wp_link_pages( [ 'before' => '<nav class="page-nav"><p>' . __( 'Pages:', THEME_SLUG ), 'after' => '</p></nav>' ] ); ?>
