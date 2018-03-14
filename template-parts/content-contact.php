<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cold_Storage_2_Go
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class( 'snow' ); ?>>
	<div class="constrain">
		<div class="entry-content">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php
                the_content();
            ?>
            
            <?php if ( get_theme_mod( 'cs2g_company_tollfree' ) ) : ?>
                <div class="contact-info-block tollfree">
                    <?php echo get_theme_mod( 'cs2g_company_tollfree' ); ?>   
                </div>
            <?php endif; ?>

           <?php if ( get_theme_mod( 'cs2g_company_email' ) ) : ?>
                <div class="contact-info-block email">
                    <?php echo get_theme_mod( 'cs2g_company_email' ); ?>   
                </div>
            <?php endif; ?>

           <?php if ( get_theme_mod( 'cs2g_company_street' ) ) : ?>
                <div class="contact-info-block location-one">
                    <?php echo get_theme_mod( 'cs2g_company_street' ); ?>
                    <?php echo get_theme_mod( 'cs2g_company_city' ); ?>
                    <?php echo get_theme_mod( 'cs2g_company_state' ); ?>
                    <?php echo get_theme_mod( 'cs2g_company_zip' ); ?>
                    Phone: <?php echo get_theme_mod( 'cs2g_company_phone' ); ?>
                    Fax: <?php echo get_theme_mod( 'cs2g_company_fax' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'cs2g_company_street2' ) ) : ?>
                <div class="contact-info-block location-two">
                    <?php echo get_theme_mod( 'cs2g_company_street2' ); ?>
                    <?php echo get_theme_mod( 'cs2g_company_city2' ); ?>
                    <?php echo get_theme_mod( 'cs2g_company_state2' ); ?>
                    <?php echo get_theme_mod( 'cs2g_company_zip2' ); ?>
                    Phone: <?php echo get_theme_mod( 'cs2g_company_phone2' ); ?>
                    Fax: <?php echo get_theme_mod( 'cs2g_company_fax2' ); ?>
                </div>
            <?php endif; ?>

		</div><!-- .entry-content -->
		<?php
			if (is_active_sidebar( 'contact' ) ) { ?>
				<aside class="sidebar">
					<?php dynamic_sidebar( 'contact' ); ?>
				</aside>
			<?php } ?>
	</div><!-- .constrain -->
</section><!-- #post-<?php the_ID(); ?> -->
