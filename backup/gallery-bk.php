<?php
/**
 * 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tigerland
 */

get_header();
?>

	<main id="primary" class="site-main">
	   <section id="hero-banner" data-scroll-section class="hero-banner page-banner  switch-color light  uk-position-relative">
	      <div class="swiper-container " >
	      	<div class="swiper-wrapper" >
	      		<div class="swiper-slide">
	      			<div   style="background-image:url(<?php echo get_template_directory_uri()?>/assets/img/page-image-gallery.jpg)"></div>
	      		</div>
	      </div>
	      <div class="hero-content-holder">
	          <div class="uk-container uk-container-small">
	            <div class="hero-content "  >
	              <h1 class="hero-title c-header_title" data-scroll>
	                   <span class="c-header_title_line">Gallery</span> 
	              </h1>
	            </div>
	          </div>
	        </div>
        </div>
	</section>

	<section data-scroll-section class="uk-section">
		<div class="uk-container uk-container-large">
			<div class="uk-grid uk-grid-medium" uk-grid uk-lightbox="animation: slide">
				<div class="uk-width-1-3@m uk-width-1-2@s">
					<div class="gallery-col">
						<a href="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-1.jpg">
							<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
							<img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-1.jpg" alt="gallery-image-1">
						</a>
					</div>
				</div>
				<div class="uk-width-1-3@m uk-width-1-2@s">
					<div class="gallery-col">
						<a href="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-2.jpg">
							<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
							<img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-2.jpg" alt="gallery-image-1">
						</a>
					</div>
				</div>
				<div class="uk-width-1-3@m uk-width-1-2@s">
					<div class="gallery-col">
						<a href="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-3.jpg">
							<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
							<img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-3.jpg" alt="gallery-image-1">
						</a>
					</div>
				</div>
				<div class="uk-width-1-3@m uk-width-1-2@s">
					<div class="gallery-col">
						<a href="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-4.jpg">
							<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
							<img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-4.jpg" alt="gallery-image-1">
						</a>
					</div>
				</div>
				<div class="uk-width-1-3@m uk-width-1-2@s">
					<div class="gallery-col">
						<a href="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-5.jpg">
							<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
							<img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-5.jpg" alt="gallery-image-1">
						</a>
					</div>
				</div>
				<div class="uk-width-1-3@m uk-width-1-2@s">
					<div class="gallery-col">
						<a href="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-6.jpg">
							<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
							<img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-6.jpg" alt="gallery-image-1">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	</main><!-- #main -->

<?php
get_footer();
