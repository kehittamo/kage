<?php
/**
 * Entry meta
 *
 * @package kage
 * @since 1.0.0
 */

?>
<time class="updated" datetime="<?php esc_attr_e( get_post_time( 'c', true ) ); ?>"><?php esc_html_e( get_the_date() ); ?></time>
<p class="byline author vcard"><?php esc_html_e( 'By', THEME_SLUG ); ?> <a href="<?php esc_attr_e( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author" class="fn"><?php esc_html_e( get_the_author() ); ?></a></p>
