<?php
/**
 * Comments
 *
 * @package kage
 * @since 1.0.0
 */

if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="comments">
	<?php if ( have_comments() ) : ?>
	<h2><?php printf( _nx( '%1$s response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'kage' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?></h2>

	<ol class="comment-list">
		<?php
		wp_list_comments(
			[
				'style'      => 'ol',
				'short_ping' => true,
			]
		);
?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav>
		<ul class="pager">
			<?php if ( get_previous_comments_link() ) : ?>
			<li class="previous"><?php previous_comments_link( pll__( '&larr; Older comments', 'kage' ) ); ?></li>
			<?php endif; ?>
			<?php if ( get_next_comments_link() ) : ?>
			<li class="next"><?php next_comments_link( pll__( 'Newer comments &rarr;', 'kage' ) ); ?></li>
			<?php endif; ?>
		</ul>
	</nav>
	<?php endif; ?>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() !== '0' && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<div class="alert alert-warning">
		<?php pll_esc_html_e( 'Comments are closed.', 'kage' ); ?>
	</div>
	<?php endif; ?>

	<?php comment_form(); ?>
</section>
