<?php
/**
 * Titles
 *
 * @package kage
 * @since 1.0.0
 */

namespace Kehittamo\Kage\Titles;

/**
 * Page titles
 */
function title() {

	if ( is_home() ) {
		if ( get_option( 'page_for_posts', true ) ) {
			return get_the_title( get_option( 'page_for_posts', true ) );
		} else {
			return pll__( 'Latest Posts', 'kage' );
		}
	} elseif ( is_archive() ) {
		return get_the_archive_title();
	} elseif ( is_search() ) {
		return sprintf( pll__( 'Search Results for %s', 'kage' ), get_search_query() );
	} elseif ( is_404() ) {
		return pll__( 'Not Found', 'kage' );
	} else {
		return get_the_title();
	}
}
