<?php
/**
 * Template part for displaying page content in blocked.php
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

            <?php if ( have_rows( 'blocks' ) ) : ?>
                <?php while( have_rows( 'blocks' ) ) : the_row(); ?>

                    <div id="<?php the_sub_field( 'anchor' ); ?>" class="dotted-block">
                        <div class="dotted-block-image">
                            <?php $image = get_sub_field( 'block_image' ); ?>
                            <img src="<?php echo $image[ 'url' ]; ?>" alt="">

                            <?php $xImages = get_sub_field( 'block_extra_images' );
                                // Create name for gallery
                                $gallery = str_replace( ' ', '', get_sub_field( 'block_title' ) );

                                if ( $xImages ) : ?>
                                    <a href="<?php echo $xImages[0]['url']; ?>" rel="prettyPhoto[<?php echo $gallery; ?>]"><img src="/wp-content/uploads/2018/03/morephotos.png" width="150" height="31" alt="more photos" /></a>
                                    
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
                            <strong><?php the_sub_field( 'block_title' ); ?></strong>
                            <div class="blocks-text"><?php the_sub_field( 'block_text' ); ?></div>
                        </div>
                    </div><!-- .dotted-block -->

                <?php endwhile; ?>
            <?php endif; ?>

		</div><!-- .entry-content -->
		<?php
			if (is_active_sidebar( 'default' ) ) { ?>
				<aside class="sidebar">
					<?php dynamic_sidebar( 'default' ); ?>
				</aside>
			<?php } ?>
	</div><!-- .constrain -->
</section><!-- #post-<?php the_ID(); ?> -->

<script type="text/javascript">	
jQuery(function($){
    $("a[rel^='prettyPhoto']").prettyPhoto();
});</script>
