<?php
/**
 * The template for displaying refrigerated category page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cold_Storage_2_Go
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section <?php post_class( 'snow' ); ?>>
			<div class="constrain">
				<div class="entry-content">
					<h1 class="entry-title"><?php single_cat_title(); ?></h1>

						
						<?php if (  is_category( 'refrigerated-containers' ) ) : ?>
							<!-- Refrigerated Containers Category Information -->
							<ul>
								<?php global $post;
								$args = array( 'posts_per_page' => -1, 'category_name' => 'refrigerated-containers', 'post_type' => 'products' );
								$myposts = get_posts( $args ); // create array of posts
								$i = count( $myposts ); // get post count

								foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
									<li class="product products-<?php echo $i; ?>">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
											<?php the_title(); ?>
										</a>
									</li>
								<?php endforeach; 
								wp_reset_postdata();?>
							</ul>
							<?php the_field('refrigerated_page_content', 'option'); ?>

						<?php elseif ( is_category( 'insulated-containers' ) ) : ?>
							<!-- Insulated Containers Category Information -->
							<ul>
								<?php global $post;
								$args = array( 'posts_per_page' => -1, 'category_name' => 'insulated-containers', 'post_type' => 'products' );
								$myposts = get_posts( $args ); // create array of posts
								$i = count( $myposts ); // get post count
								
								foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
								<?php endforeach; 
								wp_reset_postdata();?>
							</ul>
								<?php the_field('insulated_page_content', 'option'); ?>
								
						<?php endif; ?>


				</div><!-- .entry-content -->
				<?php
					if (is_active_sidebar( 'default' ) ) { ?>
						<aside class="sidebar">
							<?php dynamic_sidebar( 'default' ); ?>
						</aside>
					<?php } ?>
			</div><!-- .constrain -->
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
