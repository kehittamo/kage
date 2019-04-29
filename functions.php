<?php
/**
 * Kage includes and constants
 *
 * The $kage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * Also add any constants here.
 *
 * @link https://github.com/roots/sage/pull/1042
 *
 * @package kage
 */

// Includes.
$kage_includes = [
	'lib/extras.php',             // Custom functions.
	'lib/localization.php',       // Polylang fallback.
	'lib/setup.php',              // Theme setup.
	'lib/titles.php',             // Page titles.
	'lib/class-kagewrapping.php', // Theme wrapper class.
];

foreach ( $kage_includes as $file ) {
	$filepath = locate_template( $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( wp_kses_data( pll__( 'Error locating %s for inclusion', 'kage' ) ), $file ), E_USER_ERROR );
	}
	include_once $filepath;
}
unset( $file, $filepath );
