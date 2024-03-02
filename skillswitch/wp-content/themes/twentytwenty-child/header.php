<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' media='all' />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

<header id="site-header" class="header-footer-group">
	<div class="logobox">
		<div class="sitelogo"><?php twentytwenty_site_logo(); ?></div>
	</div>
	<div class="header_area">
		<div class="logosec">
			<div class="header-navigation-wrapper">

				<?php
				if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
					?>

						<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">

							<ul class="primary-menu reset-list-style">

							<?php
							if ( has_nav_menu( 'primary' ) ) {

								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
									)
								);

							} elseif ( ! has_nav_menu( 'expanded' ) ) {

								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										'walker'   => new TwentyTwenty_Walker_Page(),
									)
								);

							}
							?>

							</ul>

						</nav><!-- .primary-menu-wrapper -->
						<div class="callnow"><?php dynamic_sidebar( 'sidebar-53' ); ?></div>
					<?php
				}

				?>

			</div>
			<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
				<span class="toggle-inner">
				<i class="fa-solid fa-bars"></i>
				</span>
			</button><!-- .nav-toggle -->
		</div>
	</div>
</header>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
