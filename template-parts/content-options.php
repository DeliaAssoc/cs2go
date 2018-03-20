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
            <div class="dotted-block">
			<?php
                the_content();
            ?>
           </div>

            <?php if ( have_rows( 'options' ) ) : ?>
                <?php while( have_rows( 'options' ) ) : the_row(); ?>

                    <div class="dotted-block">
                        <div class="dotted-block-image">
                            <?php $image = get_sub_field( 'option_image' ); ?>
                            <img src="<?php echo $image[ 'url' ]; ?>" alt="">

                            <?php $xImages = get_sub_field( 'options_extra_images' );
                                // Create name for gallery
                                $gallery = str_replace( ' ', '', get_sub_field( 'option_title' ) );

                                if ( $xImages ) : ?>
                                    <a href="<?php echo $xImages[0]['url']; ?>" rel="prettyPhoto[<?php echo $gallery; ?>]"><img src="http://localhost/cs2go/wp-content/uploads/2018/03/morephotos.png" width="150" height="31" alt="more photos" /></a>
                                    
                                    <!-- Stop foreach from duplucating first image in gallery -->
                                    <?php $xImages = array_slice( $xImages, 1 ); ?>

                                    <?php foreach( $xImages as $xImage ) : ?>
                                        <a href="<?php echo $xImage[ 'url' ]; ?>" rel="prettyPhoto[<?php echo $gallery; ?>]">
                                            <!-- <img src="http://localhost/cs2go/wp-content/uploads/2018/03/blank.gif" alt="" /> -->
                                        </a>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="text-block">
                            <strong><?php the_sub_field( 'option_title' ); ?></strong>
                            <div class="options-text"><?php the_sub_field( 'option_text' ); ?></div>
                        </div>
                    </div>

                <?php endwhile; ?>
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

<script type="text/javascript">	
jQuery(function($){
    $("a[rel^='prettyPhoto']").prettyPhoto();
});</script>
