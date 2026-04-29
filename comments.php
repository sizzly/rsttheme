<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package PicoStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<!-- Blog Comments Section -->
<?php
	wp_list_comments(
		array(
			'style'      => 'div',
			'callback'   => 'my_theme_comment_callback',
			'short_ping' => true,
		)
	);
?>
