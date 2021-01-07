<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<div class="footer-grid">
		<?php dynamic_sidebar('footer-widgets'); ?>
		<div class="column large-12 small-12 copyright">
			<p><?php the_field('copyright', 'options'); ?></p>
		</div>
		<div class="column large-12 small-12 link">
			<?php the_field('created-by','options');  ?>
		</div>
</footer>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
