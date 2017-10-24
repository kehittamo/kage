<?php
/**
 * Base
 *
 * @package kage
 * @since 1.0.0
 */

use Kehittamo\Kage\Setup;
use Kehittamo\Kage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<?php get_template_part( 'templates/head' ); ?>
	<body <?php body_class(); ?>>
		<!--[if IE]>
		<div class="alert alert-warning">
			<?php esc_html_e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'kage' ); ?>
		</div>
		<![endif]-->
		<?php
			do_action( 'get_header' );
			get_template_part( 'templates/header' );
		?>
		<div class="wrap container" role="document">
			<div class="content row">
				<main class="main">
					<?php require Wrapper\template_path(); ?>
				</main><!-- /.main -->
				<?php if ( Setup\display_sidebar() ) : ?>
				<aside class="sidebar">
					<?php include Wrapper\sidebar_path(); ?>
				</aside><!-- /.sidebar -->
				<?php endif; ?>
			</div><!-- /.content -->
		</div><!-- /.wrap -->
		<?php
			do_action( 'get_footer' );
			get_template_part( 'templates/footer' );
			wp_footer();
		?>
	</body>
</html>
