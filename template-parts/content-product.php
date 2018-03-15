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
			<div class="product-main-content">
				<?php the_content(); ?>
			</div>

			<?php if ( have_rows( 'options' ) ) : ?>
				<div class="product-options">
					<ul>
					<?php while ( have_rows( 'options' ) ) : the_row(); ?>
						<li>
							<a href="<?php the_sub_field( 'option_url' ); ?>"><?php the_sub_field( 'option_name' ); ?></a>
						</li>
					<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>

			<?php if ( get_field( 'brochure' ) ) : 
				$file = get_field( 'brochure' ); ?>
				<a target="_blank" class="pdf-dl" href="<?php echo $file[ 'url' ]; ?>">Download Printable <?php echo $file[ 'filename' ]; ?> Brochure</a>
			<?php endif; ?>

			<div class="product-tables">
				<?php the_field( 'product_tables' ); ?>
			</div>
			<?php if ( get_field( 'spec_sheet' ) ) : ?>
				<?php $file = get_field( 'spec_sheet' ); ?>
				<a target="_blank" class="pdf-dl" href="<?php echo $file[ 'url' ]; ?>">Download Printable Specification Sheet</a>
			<?php endif; ?>
		</div><!-- .entry-content -->

		<aside class="sidebar">
			<div class="product-photo">
				<?php the_post_thumbnail(); ?>
			</div>
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
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'spec_sheet' ) ) : ?>
				<?php $file = get_field( 'spec_sheet' ); ?>
				<a target="_blank" class="pdf-dl" href="<?php echo $file[ 'url' ]; ?>">Download Printable Specification Sheet</a>
			<?php endif; ?>
		</aside><!-- .sidebar -->

	</div><!-- .constrain -->
</section><!-- #post-<?php the_ID(); ?> -->
