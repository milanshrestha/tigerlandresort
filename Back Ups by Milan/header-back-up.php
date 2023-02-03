<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tigerland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="o-scroll" id="js-scroll" data-scroll-container>
		<header id="masthead" class="site-header iat-header-absolute">
			<div class="uk-container uk-container-expand">
				<div class="uk-flex uk-flex-middle uk-flex-between">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$tigerland_description = get_bloginfo('description', 'display');
						if ($tigerland_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $tigerland_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																					?></p>
						<?php endif; ?>
					</div>
					<!-- Bootstrap Navigation -->
					<nav id="site-navigation" class="main-navigation">
				<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
			</nav>
					<!-- Bootstrap Navigation -->
					
					<div class="header-right">
						<a href="https://www.tigerlandsafarinepal.com/booking-form/" target="_blank" class="button-dark">
							<div class="holder">
								<span><?php echo get_field('h_button_text', 'option'); ?></span>
								<span role="none">Book Now </span>
							</div>
						</a>
						<!-- Diable Navigation Button
						<button class="menu-toggle change" aria-label="Open navigation">
							<svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 19h27M0 10h27M0 1h27" stroke="#000" stroke-width="2"></path>
							</svg>
						</button> -->
					</div>
				</div>
			</div>




			<nav id="site-navigation" class="main-navigation">
				<!-- <?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?> -->
			</nav><!-- #site-navigation -->
		</header>




		<!-- Menu -->
		
		<div class="hidden-menu">
			<div class="header-container">
				<div class="uk-container uk-container-large ">
					<div class="uk-flex uk-flex-middle uk-flex-between">
						<div class="hidden-menu-buttons uk-flex">
							<button style="right:80px;" class="close-menu-toggle " aria-label="Close navigation">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M19 1L1 19" stroke="black" stroke-width="1.7619"></path>
									<path d="M19 19L1 1" stroke="black" stroke-width="1.7619"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-nav">
				<div class="uk-container">
					<div class="uk-grid uk-grid-large" uk-grid>
						<div class="uk-width-1-2@m">
							<div class="hidden-nav-items">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>

							</div>
						</div>
						<div class="uk-width-1-2@m">
							<div class="hidden-menu-cta">

								<div class="hidden-menu-cta-title">
									<?php echo get_field('head_title', 'option'); ?>
								</div>
								<p>
									<?php echo get_field('heda_short_description', 'option'); ?>
								</p>
								<a href="<?php echo get_field('contact_link_', 'option'); ?>" class="button-dark">
									<div class="holder">
										<span>Contact Us</span>
										<span role="none">Contact Us</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="hidden-transition" > </div> -->
	</div>