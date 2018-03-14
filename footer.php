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
		<div class="constrain flexxed">
			<div class="footer-logo">
				<a href="/">
					<img src="<?php echo get_theme_mod( 'cs2g_footer_logo' ); ?>" alt="">
				</a>
			</div>
			<div class="site-info">
			
				<div class="footer-email comp-info">
					Email: <a href="mailto:<?php echo get_theme_mod( 'cs2g_company_email' ); ?>"><?php echo get_theme_mod( 'cs2g_company_email' ); ?></a>
					<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FCold-Storage-2-Go%2F131599540245203&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" ></iframe>
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
