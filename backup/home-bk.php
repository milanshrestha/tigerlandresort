<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tigerland
 */

get_header();
?>

	<section id="hero-banner" data-scroll-section class="hero-banner  switch-color light  uk-position-relative">
	      <div class="swiper-container " >
	      	<div class="swiper-wrapper" >
	      		<div class="swiper-slide">
	      			<div   style="background-image:url(<?php echo get_template_directory_uri()?>/assets/img/banner1.jpg)"></div>
	      		</div>
            <div class="swiper-slide">
              <div   style="background-image:url(<?php echo get_template_directory_uri()?>/assets/img/banner2.jpg)"></div>
            </div>
	      </div>
	      <div class="hero-content-holder">
	          <div class="uk-container uk-container-small">
	            <div class="hero-content "  >
	              <h1 class="hero-title c-header_title" data-scroll>
	                   <span class="c-header_title_line">Tigerland Safari Resort Chitwan</span> 
	              </h1>
	            </div>
	          </div>
	        </div>
        </div>
	</section>


   <section class="about__section uk-section  -fixed  switch-color dark" data-scroll-section data-persistent>
        <div class="uk-container uk-container-expand-right uk-padding-remove-right" id="fixed-elements">
            <div class="uk-grid uk-grid-medium" uk-grid>
                    <div class="uk-width-1-2@m">
            				<div class="c-section_infos_inner c-section_infos -padding"  data-scroll data-scroll-sticky data-scroll-target="#fixed-elements">
				                    <h3 class="section_infos_inner--title">
				                        Tigerland Safari Resort
				                    </h3>
				                    <div class="c-sections_infos_text ">
				                        <p>
				                           A Jungle Themed Lodge with 35 individual Air-Conditioned Villa Cottages situated alongside a tributary of Rapti river spread within 8 acres of land overlooks the Chitwan National Park . This lodge is located in a small village of the local community called Tharus which offers a breathtaking view of the national park forest and also the jungle wild animals and birds from the close view.  
				                        </p>

				                    </div>
				                     <a href="#" class="button-dark">
        											<div class="holder">
        											<span>Our Story</span>
        											<span role="none">Our Story</span>
        											</div>
        										</a>
				                </div>
                        </div>
                    <div class="uk-width-1-2@m ">
				        <div class="c-fixed_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                            <div class="c-fixed_target" id="fixed-target"></div>
                            <div class="c-fixed" data-scroll data-scroll-sticky data-scroll-target="#fixed-target" style="background-image:url(<?php echo get_template_directory_uri()?>/assets/img/Welcome.jpg)">
                            	
                            </div>
                        </div>
			        </div>
            </div>
        </div>
    </section>

<!-- 
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
    			                           Accomodation
    			                    </h3>
    			                    <div class="c-sections_infos_text ">
    			                        <p>
    			                           The Jeep safari ends on the banks of the Rapti river where a traditional canoe, hollowed out of the trunk of a kapok tree aka Red Silk Cotton tree, will waft you downriver to view aquatic birds, crocodiles and the animals on the river banks.
    			                        </p>
    			                    </div>
    			                     <a href="#" class="button-dark">
              										<div class="holder">
              										<span>View More</span>
              										<span role="none">View More</span>
              										</div>
              									</a>
                            </div>
                        </div>
                    </div>
            </div>
            </div>        
     </section>
 -->
      

     <section class="uk-section hotel_facilities_area uk-padding-remove-bottom"  data-scroll-section> 
      	<div class="uk-container">
      		<div class="uk-grid uk-grid-medium" uk-grid>
              <div class="uk-width-1-2@m" data-scroll>
                <div class="heading-title-wrap c-section_infos_inner" data-scroll data-scroll-offset="200">
                  <h2 class="heading-title">
                   Find your sanctuary experience
                  </h2>
                  <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua..
                  </p>
                </div>
              </div>  
          </div>	
          <div class="uk-grid uk-grid-medium uk-flex-center" uk-grid data-scroll>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/resturant.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Resturant
                      </h3>
                    </a>
                </div>
            </div>
             <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/junglesafari.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Jungle Safari
                      </h3>
                    </a>
                </div>
            </div>
              <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/private-dinning.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Private Dinning
                      </h3>
                    </a>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/resturant.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Resturant
                      </h3>
                    </a>
                </div>
            </div>
             <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/junglesafari.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Jungle Safari
                      </h3>
                    </a>
                </div>
            </div>
              <div class="uk-width-1-3@m uk-width-1-2@s">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/private-dinning.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Private Dinning
                      </h3>
                    </a>
                </div>
            </div>
          </div>
      	</div>
      </section>



       <!-- <section class=" hotel_facilities_area"  data-scroll-section> 
        <div class="uk-container">
          <div class="uk-grid uk-grid-medium" uk-grid data-scroll>
            <div class="uk-width-1-3@m">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/conf.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Conference Hall
                      </h3>
                    </a>
                </div>
            </div>
             <div class="uk-width-1-3@m">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/tharucultural.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          Cultural Performance
                      </h3>
                    </a>
                </div>
            </div>
              <div class="uk-width-1-3@m">
                <div class="hotel_facilities-col" data-scroll>
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri()?>/assets/img/Vehicles.jpg" alt="homepage_grid_ebony">
                      <h3 class="card-title"> 
                          PickUp & Drop
                      </h3>
                    </a>
                </div>
            </div>
          </div>
        </div>
      </section> -->
      

      <section class="uk-section" data-scroll-section>
        <div class="uk-container ">
            <div class="overlay-col uk-position-relative o-image_wrapper"  data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                <a class="o-image" href="#"  data-scroll>
                <img src="<?php echo get_template_directory_uri()?>/assets/img/villa.jpg"> 
              </a>
                <div class="overlay-col-content c-section_infos_inner" data-scroll  data-scroll-target="#fixed-elements">
                   <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
                        <h3 class="title">
                          <a href="#">Our Villa</a>
                        </h3>
                       
                   </div>
                  
                </div>
            </div>
        </div>
      </section>

       <section class="  uk-section video-section-wrap " data-scroll-section data-persistent>
        <div class="uk-container uk-container-expand-right uk-padding-remove-right" id="fixed-elements">
            <div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
               <div class="uk-width-1-2@m uk-flex uk-flex-middle"> 
                       <div class="c-section_infos_inner" data-scroll  data-scroll-target="#fixed-elements">
                            <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
                                <h3 class="section_infos_inner--title">
                                   Watch Video
                                </h3>
                                <div class="c-sections_infos_text ">
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                       tempor incididunt ut labore et dolore magna aliqua. 
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-2@m">
                        <div class="c-speed-block" data-scroll data-scroll-speed="2">
                            <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                                <div uk-lightbox class="o-image uk-position-relative" data-scroll>
                                    <img class="c-speed-block_image " src="<?php echo get_template_directory_uri()?>/assets/img/video-image.jpg" alt=" image from unsplash">
                                     <a    href="#modal-media-video" uk-toggle>
                                        <i class="uk-icon" uk-icon="icon:play-circle; ratio:2.8" ></i>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>  
            </div>
            </div>        
     </section>


    <section data-scroll-section class="uk-section uk-padding-remove-top">
       <div class="uk-container uk-container-large">
            <div class="heading-title-wrap uk-text-center" >
                <h2 class="heading-title">
                    Activities 
                </h2>
              </div>
              <div class="activities-wrap">
                 <div class="swiper activities">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="activitity-col uk-position-relative">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/activity-image-1.jpg">
                            </a>
                            <div class="activitity-col-wrap">
                              <h3>
                               <a href="#">
                                  Bird Watching 
                               </a>
                              </h3>
                            </div>
                          </div> 
                        </div>
                         <div class="swiper-slide">
                          <div class="activitity-col uk-position-relative">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/tharucultural.jpg">
                            </a>
                            <div class="activitity-col-wrap">
                              <h3>
                               <a href="#">
                                  Cultural Performance
                               </a>
                              </h3>
                            </div>
                          </div> 
                        </div>
                         <div class="swiper-slide">
                          <div class="activitity-col uk-position-relative">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/Live-BBQ.jpg">
                            </a>
                            <div class="activitity-col-wrap">
                              <h3>
                               <a href="#">
                                  Live BBQ
                               </a>
                              </h3>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                  </div>
              </div>
       </div>
     </section>

     <section class="  uk-section uk-padding-remove-top plan-your-trip-wrap " data-scroll-section data-persistent>
        <div class="uk-container uk-container-expand-left uk-padding-remove-left" id="fixed-elements">
            <div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="c-speed-block" data-scroll data-scroll-speed="2">
                            <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                                <div class="o-image" data-scroll>
                                    <img class="c-speed-block_image" src="<?php echo get_template_directory_uri()?>/assets/img/loby.jpg" alt="Locomotive image from unsplash">
                                </div>
                            </div>
                        </div>
                    </div>  

                     <div class="uk-width-1-2@m uk-flex uk-flex-middle"> 
                       <div class="c-section_infos_inner" data-scroll  data-scroll-target="#fixed-elements">
                            <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
                                 <h3 class="section_infos_inner--title">
                                   Let us plan your trip
                                </h3>
                              <div class="c-sections_infos_text ">
                                 <ul>
                                   <li>
                                    <i class="fas fa-palette"></i>                                      
                                    Expert advice & guidance
                                   </li>
                                   <li>
                                    <i class="fas fa-file-alt"></i>
                                     Personalised itineraries
                                   </li>
                                   <li>
                                    <i class="far fa-bell"></i>
                                     Tailored services
                                   </li>
                                 </ul>
                                 <a href="#" class="button-dark">
                                    <div class="holder">
                                    <span>Plan Your Trip</span>
                                    <span role="none">Plan Your Trip</span>
                                    </div>
                                  </a>

                                   <a href="#" class="button-dark button-dark-outline">
                                    <div class="holder">
                                    <span>Contact Us </span>
                                    <span role="none">Contact Us </span>
                                    </div>
                                  </a>
                              </div>
                              
                            </div>
                        </div>
                    </div>
            </div>
            </div>        
     </section>

      <section data-scroll-section class="uk-section uk-section-large  section--testimonail uk-text-center">
       <div class="uk-container uk-position-relative">
        <div class="swiper-container " >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-col">
                     <h3>
                          A place to be in Chitwan Amazing atmosphere with humble and ready to help attitude staff. The rooms were spotlessly clean and extremely luxurious with 5 star amenities.
                   </h3>
                 </div>
              </div>
              <div class="swiper-slide">
               <div class="testimonial-col">
                     <h3>
                        Why I Love Tigerland Safari Resort!!! If you ever happen to be in Chitwan, finding some resorts to stay in... This place is undoubtedly the Best Resort to stay in. The staff, th
                   </h3>
                 </div>
              </div>
          </div>
        </div>
       <a href="#" class="button-dark">
              <div class="holder">
              <span>View All Reviews </span>
              <span role="none">View All Reviews </span>
              </div>
            </a>
        </div>
     </section> 




     <div id="modal-media-video" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
             <iframe src="https://www.youtube.com/embed/tApaT6uviyc" width="1920" height="1080" uk-video uk-responsive></iframe>
        </div>
    </div>

<?php
get_footer();
