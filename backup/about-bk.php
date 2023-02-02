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
	                   <span class="c-header_title_line">About Us </span> 
	              </h1>
	            </div>
	          </div>
	        </div>
        </div>
	</section>

	<section class="uk-section uk-text-center" data-scroll-section>
		<div class="uk-container" data-scroll>
			<div class="about-intro c-section_infos_inner" data-scroll data-scroll-offset="200">
				<h2 >
					A Jungle Themed Lodge with 35 individual Air-Conditioned Villa Cottages situated alongside a tributary of Rapti river spread within 8 acres of land overlooks the Chitwan National Park . This lodge is located in a small village of the local community called Tharus which offers a breathtaking view of the national park forest and also the jungle wild animals and birds from the close view. 
				</h2>
			</div>

			<div class="slider-wrap">
				<div uk-slider>
				    <div class="uk-position-relative">
				        <div class="uk-slider-container uk-light">
				             <ul class="uk-slider-items uk-child-width-1-1@m">
							        <li>
							            <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-1.jpg"  alt="">
							        </li>
							        
							         <li>
							            <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-3.jpg"  alt="">
							        </li>
							        <li>
							            <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-4.jpg"  alt="">
							        </li>
							         <li>
							            <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-5.jpg"  alt="">
							        </li>
							    </ul>
				        </div>
				        <div class="uk-hidden@s uk-light">
				            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
				        </div>
				        <div class="uk-visible@s">
				            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</section>

	   <section class="  uk-section uk-padding-remove-bottom accomodation-wrap " data-scroll-section data-persistent>
     	  <div class="uk-container uk-container-expand-left uk-padding-remove-left" id="fixed-elements">
            <div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="c-speed-block" data-scroll data-scroll-speed="2">
                            <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                                <div class="o-image" data-scroll>
                                    <img class="c-speed-block_image" src="<?php echo get_template_directory_uri()?>/assets/img/homepage_intro_2.jpg" alt="Locomotive image from unsplash">
                                </div>
                            </div>
                        </div>
                    </div>	

                     <div class="uk-width-1-2@m uk-flex uk-flex-middle"> 
                       <div class="c-section_infos_inner" data-scroll  data-scroll-target="#fixed-elements">
                            <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
                                <h3 class="section_infos_inner--title">
    			                          Our story unfolds
    			                    </h3>
    			                    <div class="c-sections_infos_text ">
    			                        <p>
    			                           The architecture and interiors of the lodge seamlessly blend with the jungle. The architecture includes use of local bamboo, sustainable wood in furnishing and decoration highlighted with elegant interiors. The lodge is river facing imbued with a sense of serenity. 
    			                        </p>
    			                        <p>
    			                           There are several ways to explore Chitwan’s wilderness. Jeep safari, Boat safari, Jungle walks, Elephant safari and walk with elephants will keep one amused. Village visits on foot or bullock are also organized to provide a sneak peek into the cultural aspect of Chitwan. Tharu cultural dance performance by a local group is organized inside the lodge in the evenings. The property celebrates environmental and animal consciousness in all aspects of operations.
    			                        </p>
    			                        <p>
    			                           Tigerland Safari is proud of its Ecological Initiatives which includes natural setting and use of local materials that blends with the environment, construction and design inspired by local culture and themes, minimum footprint on the environment by building individual rooms on stilts and the use of solar power as the primary source of energy.
    			                        </p>
    			                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>        
     </section>




	</main><!-- #main -->

<?php
get_footer();
