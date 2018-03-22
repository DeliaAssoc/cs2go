<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cold_Storage_2_Go
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class( 'snow' ); ?>>
	<div class="constrain">

		<?php cs2g_post_thumbnail(); ?>

		<div class="entry-content">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						cs2g_posted_on();
						cs2g_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php
				if ( is_singular() ) :
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cs2g' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );
				else :
					the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read More</a>
				<?php endif;



			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cs2g' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php
			if (is_active_sidebar( 'news' ) ) { ?>
				<aside class="sidebar">
					<?php dynamic_sidebar( 'news' ); ?>
				</aside>
		<?php } ?>

	</div><!-- .constrain -->
</section><!-- #post-<?php the_ID(); ?> -->
