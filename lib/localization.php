<?php
/**
 * Localization
 *
 * The idea is to substitute file based po/mo l11n with
 * database based l11n. This is accomplished via Polylang
 * and Polylang Theme Strings, which automatically scans
 * the theme and adds the strings for localization.
 *
 * @package kage
 */

/**
 * Fallback Polylang (preserve functionality without the plugins)
 *
 * @cred improved from https://github.com/aucor/aucor-starter
 */
if ( ! function_exists( 'pll__' ) ) :
	function pll__( $s ) {
		return $s;
	}
	function pll_e( $s ) {
		echo $s;
	}
	function pll_esc_html_e( $s ) {
		return esc_html_e($s);
	}
	function pll_esc_html__( $s ) {
		return esc_html($s);
	}
	function pll_esc_attr_e( $s ) {
		return esc_attr_e($s);
	}
	function pll_esc_attr__( $s ) {
		return esc_attr($s);
	}
	function pll_current_language() {
		return 'fi';
	}
	function pll_get_post_language( $id ) {
		return 'fi';
	}
	function pll_get_post( $post_id, $slug = '' ) {
		return $post_id;
	}
	function pll_get_term( $term_id, $slug = '' ) {
		return $term_id;
	}
	function pll_translate_string( $str, $lang = '' ) {
		return $str;
	}
	function pll_home_url( $slug = '' ) {
		return get_home_url();
	}
endif;
