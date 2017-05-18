<?php
/**
 * Wrapper
 *
 * @package kage
 * @since 1.0.0
 * @link https://roots.io/sage/docs/theme-wrapper/
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */

namespace Kehittamo\Kage\Wrapper;

/**
 * Template path
 */
function template_path() {

	return KageWrapping::$main_template;
}

/**
 * Sidebar path
 */
function sidebar_path() {

	return new KageWrapping( 'templates/sidebar.php' );
}

/**
 * KageWrapping
 *
 * @package kage
 */
class KageWrapping
{
	/**
	 * Stores the full path to the main template file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string $main_template Full path to the main template file.
	 */
	public static $main_template;

	/**
	 * Basename of template file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string $slug Basename of template file.
	 */
	public $slug;

	/**
	 * Array of templates.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string $templates Array of templates.
	 */
	public $templates;

	/**
	 * Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string $base Base name of the template file.
	 */
	public static $base;

	/**
	 * Define the wrapper.
	 *
	 * @param string $template Template file.
	 */
	public function __construct( $template = 'base.php' ) {

		$this->slug = basename( $template, '.php' );
		$this->templates = [ $template ];

		if ( self::$base ) {
			$str = substr( $template, 0, -4 );
			array_unshift( $this->templates, sprintf( $str . '-%s.php', self::$base ) );
		}
	}

	/**
	 * To string
	 */
	public function __toString() {

		$this->templates = apply_filters( 'kage/wrap_' . $this->slug, $this->templates );
		return locate_template( $this->templates );
	}

	/**
	 * Wrap
	 *
	 * @param mixed $main Main.
	 */
	public static function wrap( $main ) {

		// Check for other filters returning null.
		if ( ! is_string( $main ) ) {
			return $main;
		}

		self::$main_template = $main;
		self::$base = basename( self::$main_template, '.php' );

		if ( 'index' === self::$base ) {
			self::$base = false;
		}

		return new KageWrapping();
	}
}
add_filter( 'template_include', [ __NAMESPACE__ . '\\KageWrapping', 'wrap' ], 109 );
