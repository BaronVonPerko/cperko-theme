<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cperko
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		<div class="site-info">
			<span>&copy; <?php echo date("Y"); ?> ChrisPerko.net </span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- browser-sync : remove for production -->
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='https://HOST:8082/browser-sync/browser-sync-client.js?v=2.18.2'><\/script>".replace("HOST", location.hostname));
//]]></script>

</body>
</html>
