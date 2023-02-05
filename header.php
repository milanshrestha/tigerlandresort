<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tigerland
 * @AlwaysCoolMilan
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">	
	
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<!-- <div class="o-scroll" id="js-scroll" data-scroll-container> -->
		<header id="masthead" class="site-header iat-header-absolute fixed-top ms-navbar-scroll">
			<div class="uk-container uk-container-expand">
				<div class="uk-flex uk-flex-middle uk-flex-between">
					<!-- Site Logo -->
					<div class="site-branding bg-white ms-tgl-logo"> 
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
							</h1>
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
						
						<!-- Site Navigation -->
<nav id="site-navigation" class="navbar navbar-expand-md navbar-light fw-bold bg-light bg-transparent main-navigation" role="navigation">
						  <div class="container d-flex clearfix">
						  
							 
							<?php
							wp_nav_menu(
								array(
									'theme_location'	=> 'menu-1',
									'menu_id'        	=> 'primary-menu',
									'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav nav-fill navbar-nav mr-auto',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker(),
									
								)
							);
							?>
										
							<div class="header-right">
								<a href="https://www.tigerlandsafarinepal.com/booking-form/" target="_blank" class="button-dark">
									<div class="holder">
										<span><?php echo get_field('h_button_text', 'option'); ?></span>
										<span role="none">Book Now </span>
									</div>
								</a>
							</div>
							 
							 
							 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
							<span class="navbar-toggler-icon"></span>
							</button>
							 
						   </div>
						 
						</nav>
						
					</div>				
				</div>
							
			<!-- </div> -->
			
		</header>
