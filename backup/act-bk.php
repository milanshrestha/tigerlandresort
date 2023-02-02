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
	                   <span class="c-header_title_line">Activities </span> 
	              </h1>
	            </div>
	          </div>
	        </div>
        </div>
	</section>

	 <section class="uk-section hotel_facilities_area activities__section"  data-scroll-section> 
      	<div class="uk-container">
          <div class="uk-grid uk-grid-medium" uk-grid >
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/activity-image-1.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Bird Watching
                      </h3>
                    </a>
                </div>
            </div>
             <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/activity-image-2.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Cultural Performance
                      </h3>
                    </a>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/activity-image-3.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Crocodile Bredding Center
                      </h3>
                    </a>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/activity-image-3.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Crocodile Bredding Center
                      </h3>
                    </a>
                </div>
            </div>
             <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/activity-image-3.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Crocodile Bredding Center
                      </h3>
                    </a>
                </div>
            </div>
             <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/activity-image-3.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Crocodile Bredding Center
                      </h3>
                    </a>
                </div>
            </div>
          </div>
      	</div>
      </section>


	</main><!-- #main -->

<?php
get_footer();
