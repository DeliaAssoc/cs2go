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
                <div class="dotted-block">
                    <div class="dotted-block-image">
                        <img src="<?php echo get_theme_mod( 'cs2g_company_tollfree_image' ); ?> " alt="">
                    </div>
                    <div class="text-block phone">
                        <a href="tel:<?php echo get_theme_mod( 'cs2g_company_tollfree' ); ?>"><?php echo get_theme_mod( 'cs2g_company_tollfree' ); ?></a>
                    </div>
                </div>
            <?php endif; ?>

           <?php if ( get_theme_mod( 'cs2g_company_email' ) ) : ?>
                <div class="dotted-block">
                    <div class="dotted-block-image">
                        <img src="<?php echo get_theme_mod( 'cs2g_company_email_image' ); ?> " alt="">
                    </div>
                    <div class="text-block email">
                        <a href="mailto:<?php echo get_theme_mod( 'cs2g_company_email' ); ?>"><?php echo get_theme_mod( 'cs2g_company_email' ); ?></a>
                    </div> 
                </div>
            <?php endif; ?>

           <?php if ( get_theme_mod( 'cs2g_company_street' ) ) : ?>
                <div class="dotted-block locations">
                    <div class="dotted-block-image">
                        <img src="<?php echo get_theme_mod( 'cs2g_company_address_image' ); ?> " alt="">
                    </div>
                    <div class="text-block">
                        <div class="location">
                            <div class="contact-text-item"><?php echo get_bloginfo( 'name' ); ?></div>
                            <div class="contact-text-item"><?php echo get_theme_mod( 'cs2g_company_street' ); ?></div>
                            <div class="contact-text-item"><?php echo get_theme_mod( 'cs2g_company_city' ); ?>
                            <?php echo get_theme_mod( 'cs2g_company_state' ); ?>
                            <?php echo get_theme_mod( 'cs2g_company_zip' ); ?></div>
                            <div class="contact-text-item">Phone: <a href="tel:<?php echo get_theme_mod( 'cs2g_company_phone' ); ?>"><?php echo get_theme_mod( 'cs2g_company_phone' ); ?></a></div>
                            <div class="contact-text-item">Fax: <?php echo get_theme_mod( 'cs2g_company_fax' ); ?></div>
                        </div>
                        <?php if ( get_theme_mod( 'cs2g_company_street2' ) ) : ?>
                            <div class="location">
                                <div class="contact-text-item"><?php echo get_bloginfo( 'name' ); ?></div>
                                <div class="contact-text-item"><?php echo get_theme_mod( 'cs2g_company_street2' ); ?></div>
                                <div class="contact-text-item"><?php echo get_theme_mod( 'cs2g_company_city2' ); ?>
                                <?php echo get_theme_mod( 'cs2g_company_state2' ); ?>
                                <?php echo get_theme_mod( 'cs2g_company_zip2' ); ?></div>
                                <div class="contact-text-item">Phone: <a href="tel:<?php echo get_theme_mod( 'cs2g_company_phone2' ); ?>"><?php echo get_theme_mod( 'cs2g_company_phone2' ); ?></a></div>
                                <div class="contact-text-item">Fax: <?php echo get_theme_mod( 'cs2g_company_fax2' ); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
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
