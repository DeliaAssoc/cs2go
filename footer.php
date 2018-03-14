<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cold_Storage_2_Go
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="constrain">
			<div class="footer-logo">
				<a href="/">
					<img src="<?php echo get_theme_mod( 'cs2g_footer_logo' ); ?>" alt="">
				</a>
			</div>
			<div class="site-info">
			
				<div class="footer-email comp-info">
					Email: <a href="mailto:<?php echo get_theme_mod( 'cs2g_company_email' ); ?>"><?php echo get_theme_mod( 'cs2g_company_email' ); ?></a>
				</div>
				<div class="address-one comp-info">
					<?php echo get_bloginfo( 'name' ); ?> | <?php echo get_theme_mod( 'cs2g_company_street' ); ?> | <?php echo get_theme_mod( 'cs2g_company_city' ); ?>, <?php echo get_theme_mod( 'cs2g_company_state' ); ?> <?php echo get_theme_mod( 'cs2g_company_zip' ); ?> | Phone: <a href="tel:<?php echo get_theme_mod( 'cs2g_company_phone2' ); ?>"><?php echo get_theme_mod( 'cs2g_company_phone' ); ?></a>
				</div>
				<div class="address-two comp-info">
					<?php echo get_bloginfo( 'name' ); ?> | <?php echo get_theme_mod( 'cs2g_company_street2' ); ?> | <?php echo get_theme_mod( 'cs2g_company_city2' ); ?>, <?php echo get_theme_mod( 'cs2g_company_state2' ); ?> <?php echo get_theme_mod( 'cs2g_company_zip2' ); ?> | Phone: <a href="tel:<?php echo get_theme_mod( 'cs2g_company_phone2' ); ?>"><?php echo get_theme_mod( 'cs2g_company_phone2' ); ?></a>
				</div>
			

			</div><!-- .site-info -->
		</div><!-- .constrain -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
