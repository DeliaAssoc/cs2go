<?php
/**
 * Template part for displaying page content in procats.php
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
                
				if ( have_rows( 'product_categories' ) ) : ?>
					<div class="flexxed">
                    <?php while ( have_rows( 'product_categories' ) ) : the_row(); ?>

                        <a class="procat-btn" href="<?php the_sub_field( 'category_url' ); ?>"><img src="<?php the_sub_field( 'category_image' ); ?>" alt=""><div class="title"><?php the_sub_field( 'category_title' ); ?></div></a>

					<?php endwhile; ?>
					</div>
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
