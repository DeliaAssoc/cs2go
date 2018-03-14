<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cold_Storage_2_Go
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cs2g' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="constrain">
			<div class="site-branding">
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'cs2g_logo' ); ?>" /><div class="site-name"><?php bloginfo( 'name' ); ?></div></a></div>
			</div><!-- .site-branding -->
			<div class="header-boasts">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2018/03/main_02.jpg" alt="">
			</div><!-- .header-boasts -->
		</div><!-- .constrain -->
		<nav id="site-navigation" class="main-navigation">
			<div class="constrain">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			</div><!-- .constrain -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
