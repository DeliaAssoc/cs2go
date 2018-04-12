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
			<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->

			<div class="product-secondary-content">
				<?php the_field( 'secondary_content' ); ?>
			</div>

            <h1><?php the_title(); ?></h1>

            <?php if ( get_field( 'landing_page_slider' ) ) : ?>
                <div class="slider">
                    <?php $slider = get_field( 'landing_page_slider' ); ?>
                    <?php echo do_shortcode( $slider ); ?>
                </div>
            <?php endif; ?>

			<div class="product-cta-btns flexxed">
				<a href="/purchase" class="purchase btn-lg blue-bg">Purchase a Container</a>
				<a href="/rent" class="rent btn-lg blue-bg">Rent a Container</a>
			</div>

            <div class="product-main-content">
                <?php the_content(); ?>
            </div>

            <?php if ( have_rows( 'uses', 'option' ) ) : ?>
                <div class="uses">
                    <h2>Uses Include:</h2>
                    <div class="flexxed">
                    <?php while ( have_rows( 'uses', 'option' ) ) : the_row(); ?>

                        <div class="use-item">
                            <?php the_sub_field( 'use_item', 'option' ); ?>
                        </div>

                    <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="page-template-blocked lp-testimonials">
                <?php if ( have_rows( 'testimonials' ) ) : ?>
                    <div class="dotted-block">
                        <h3>Here's what people are saying about our containers:</h3>
                    </div>
                    <?php while( have_rows( 'testimonials' ) ) : the_row(); ?>

                        <div class="dotted-block">
                            <div class="dotted-block-image">
                                <?php $image = get_sub_field( 'testimonial_image' ); ?>
                                <img src="<?php echo $image[ 'url' ]; ?>" alt="">
                            </div>
                            <div class="text-block">
                                <strong><?php the_sub_field( 'testimonial_client_name' ); ?></strong>
                                <div class="blocks-text"><?php the_sub_field( 'testimonial_content' ); ?></div>
                            </div>
                        </div><!-- .dotted-block -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="product-cta-btns flexxed">
				<a href="/purchase" class="purchase btn-lg blue-bg">Purchase a Container</a>
				<a href="/rent" class="rent btn-lg blue-bg">Rent a Container</a>
			</div>
		</div><!-- .entry-content -->

        <?php if ( have_rows( 'sidebar_products', 'option' ) ) : ?>
            <?php while ( have_rows( 'sidebar_products', 'option' ) ) : the_row(); ?>

            <aside class="sidebar">
                <a class="product-photo" href="<?php the_sub_field( 'product_url', 'option' ); ?>">
                    <?php $image = get_sub_field( 'product_image', 'option' ); ?>
                    <img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo $image[ 'alt' ]; ?>">
                </a>

                <?php if ( have_rows( 'product_standard_features', 'option' ) ) : ?>
                    <div class="standard-features">
                        <h3>Standard Features</h3>
                        <ul>
                            <?php while ( have_rows( 'product_standard_features', 'option' ) ) : the_row(); ?>
                                <li>
                                    <?php the_sub_field( 'feature', 'option' ); ?>
                                </li>
                            <?php endwhile; ?>
                            <a href="<?php the_sub_field( 'product_url', 'option' ); ?>">Click for more information.</a>
                        </ul>
                    </div><!-- .standard-features -->
			    <?php endif; ?>
            </aside>

            <?php endwhile; ?>
        <?php endif; ?>

	</div><!-- .constrain -->
</section><!-- #post-<?php the_ID(); ?> -->

<script type="text/javascript">	
jQuery(function($){
    $("a[rel^='prettyPhoto']").prettyPhoto();
});</script>