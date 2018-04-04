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
			<div class="product-main-content">
				<?php the_content(); ?>
			</div>

			<?php if ( get_field( 'brochure' ) ) : 
				$brochure = get_field( 'brochure' ); ?>
				<a target="_blank" class="pdf-dl" href="<?php echo $brochure[ 'url' ]; ?>">Download Brochure</a>
			<?php endif; ?>

			<?php if ( have_rows( 'options' ) ) : ?>
				<div class="product-options">
					<a href="/options"><h2>Options Available<span style="font-size: .75em;">- Click on an option to learn more</span></h2></a>
					<ul>
					<?php while ( have_rows( 'options' ) ) : the_row(); ?>
						<li>
							&bull; <a href="<?php the_sub_field( 'options_url' ); ?>"><?php the_sub_field( 'option_name' ); ?></a>
						</li>
					<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>

			<div class="product-secondary-content">
				<?php the_field( 'secondary_content' ); ?>
			</div>

			<?php if ( get_field( 'product_specs' ) ) : ?>
				<div class="product-tables">
					<h2>Product Specifications</h2>
					<?php the_field( 'product_specs' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( have_rows( 'product_tables' ) ) : ?>
				<div class="product-tables">
					<h2>Product Specifications</h2>
					<?php while ( have_rows( 'product_tables' ) ) : the_row(); ?>
						<div class="single-prod-table">
							<?php echo do_shortcode( get_sub_field( 'table_shortcode' ) ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>	

			<?php if ( get_field( 'spec_sheet' ) ) : ?>
				<?php $specSheet = get_field( 'spec_sheet' ); ?>
				<a target="_blank" class="pdf-dl" href="<?php echo $specSheet[ 'url' ]; ?>">Download Specification Sheet</a>
			<?php endif; ?>

			<div class="product-cta-btns flexxed">
				<a href="/purchase" class="purchase btn-lg blue-bg">Purchase a Container</a>
				<a href="/rent" class="rent btn-lg blue-bg">Rent a Container</a>
			</div>
		</div><!-- .entry-content -->

		<aside class="sidebar">
			<div class="product-photo">
				<?php the_post_thumbnail(); ?>
			</div>

			<?php $images = get_field( 'product_photos' );
				if ( $images ) : ?>
					<a href="<?php echo $images[0]['url']; ?>" rel="prettyPhoto[product]"><img src="/wp-content/uploads/2018/03/morephotos.png" width="150" height="31" alt="more photos" /></a>
					<?php foreach( $images as $image ) : ?>
						<a href="<?php echo $image[ 'url' ]; ?>" rel="prettyPhoto[product]">
							<!-- <img src="http://localhost/cs2go/wp-content/uploads/2018/03/blank.gif" alt="" /> -->
					</a>
					<?php endforeach; ?>
				<?php endif; ?>

			<?php if ( have_rows( 'standard_features' ) ) : ?>
				<div class="standard-features">
					<h3>Standard Features</h3>
					<ul>
						<?php while ( have_rows( 'standard_features' ) ) : the_row(); ?>
							<li>
								<?php the_sub_field( 'feature' ); ?>
							</li>
						<?php endwhile; ?>
					</ul>
				</div><!-- .standard-features -->
			<?php endif; ?>
			<?php if ( get_field( 'spec_sheet' ) ) : ?>
				<?php $specSheet = get_field( 'spec_sheet' ); ?>
				<a target="_blank" class="pdf-dl" href="<?php echo $specSheet[ 'url' ]; ?>">Download Specification Sheet</a>
			<?php endif; ?>
			
		</aside><!-- .sidebar -->
	</div><!-- .constrain -->
</section><!-- #post-<?php the_ID(); ?> -->

<script type="text/javascript">	
jQuery(function($){
    $("a[rel^='prettyPhoto']").prettyPhoto();
});</script>