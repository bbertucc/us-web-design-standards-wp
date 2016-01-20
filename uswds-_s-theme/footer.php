<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uswds_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" role="contentinfo">
		<div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'uswds' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'uswds' ), 'WordPress' ); ?></a>
			<span> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'uswds' ), 'uswds', '<a href="https://www.linkedin.com/in/blakebertuccelli" rel="designer">Blake Bertuccelli</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
