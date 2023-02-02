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
	      			<div   style="background-image:url(<?php echo get_template_directory_uri()?>/assets/img/all-villa.jpg)"></div>
	      		</div>
	      </div>
	      <div class="hero-content-holder">
	          <div class="uk-container uk-container-small">
	            <div class="hero-content "  >
	              <h1 class="hero-title c-header_title" data-scroll>
	                   <span class="c-header_title_line">Villa </span> 
	              </h1>
	            </div>
	          </div>
	        </div>
        </div>
	</section>

   <section class="  uk-section  uk-text-center " data-scroll-section data-persistent>
     	  <div class="uk-container uk-container-small  " id="fixed-elements">
            <div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
                <div class="uk-width-1-1@m uk-flex uk-flex-middle"> 
                   <div class="c-section_infos_inner" data-scroll  data-scroll-target="#fixed-elements">
                        <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
                            <h3 class="section_infos_inner--title">
			                    Stay in Comfort Wildlife Resorts 
			                </h3>
		                    <div class="c-sections_infos_text ">
		                        <p>
		                           Tigerland Safari Resort offers elite villas in Chitwan located in the serenity of the wild in a Jungle Theme. These deluxe villas include a big size living room, a balcony which allows you to experience the tenderness of the greens and chirps around you. These spaces are done with the decadent interiors and simplistic arrangements to take care of your accommodation related necessities
		                        </p>
		                        <p>
		                           Tigerland Safari Resort offers elite villas in Chitwan located in the serenity of the wild in a Jungle Theme. These deluxe villas include a big size living room, a balcony which allows you to experience the tenderness of the greens and chirps around you. These spaces are done with the decadent interiors and simplistic arrangements to take care of your accommodation related necessities
		                        </p>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>        
     </section>


     <section class="uk-section uk-padding-remove-top"  data-scroll-section data-persistent>
     	<div class="uk-container uk-container-large">
     		<div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-medium uk-grid" uk-grid uk-lightbox="animation: fade" uk-grid data-scroll>
			    <div class="single-gallery-image"  data-scroll>
			        <a class="uk-inline" href="<?php echo get_template_directory_uri()?>/assets/img/room2.jpg" data-caption="Room">
			            <img src="<?php echo get_template_directory_uri()?>/assets/img/room2.jpg" width="1800" height="1200" alt="">
			        </a>
			    </div>
			    <div class="single-gallery-image"  data-scroll>
			         <a class="uk-inline" href="<?php echo get_template_directory_uri()?>/assets/img/Room-Inside _ Balcony.jpg" data-caption="Room">
			            <img src="<?php echo get_template_directory_uri()?>/assets/img/Room-Inside _ Balcony.jpg" width="1800" height="1200" alt="">
			        </a>
			    </div>
			   <div class="single-gallery-image"  data-scroll>
			         <a class="uk-inline" href="<?php echo get_template_directory_uri()?>/assets/img/villa.jpg" data-caption="Room">
			            <img src="<?php echo get_template_directory_uri()?>/assets/img/villa.jpg" width="1800" height="1200" alt="">
			        </a>
			    </div>
			    <div class="single-gallery-image"  data-scroll>
			         <a class="uk-inline" href="<?php echo get_template_directory_uri()?>/assets/img/tharucultural.jpg" data-caption="Room">
			            <img src="<?php echo get_template_directory_uri()?>/assets/img/tharucultural.jpg" width="1800" height="1200" alt="">
			        </a>
			    </div>
			    <div class="single-gallery-image"  data-scroll>
			         <a class="uk-inline" href="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-6.jpg" data-caption="Room">
			            <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery-image-6.jpg" width="1800" height="1200" alt="">
			        </a>
			    </div>
			    <div class="single-gallery-image"  data-scroll>
			         <a class="uk-inline" href="<?php echo get_template_directory_uri()?>/assets/img/Canoeing-3.jpg" data-caption="Room">
			            <img src="<?php echo get_template_directory_uri()?>/assets/img/Canoeing-3.jpg" width="1800" height="1200" alt="">
			        </a>
			    </div>
			</div>
     	</div>
     </section>


 <section class="  uk-section uk-padding-remove-top" data-scroll-section data-persistent>
     	  <div class="uk-container" id="fixed-elements">
            <div class="uk-grid uk-grid-medium" uk-grid>
                <div class="uk-width-1-10@m"> 
                   <div class="c-section_infos_inner" style="width:100%; display: block;" data-scroll  data-scroll-target="#fixed-elements">
                        <div class="c-section_infos_inner uk-text-center" data-scroll data-scroll-offset="200">
                            <h3 class="section_infos_inner--title uk-margin-remove">
			                    Facility
			                </h3>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-10@m"> 
                	<ul class="room-facilities uk-grid uk-grid-medium uk-grid uk-child-width-1-4@m uk-child-width-1-2@s " uk-grid>
                		<li >
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/conciergenew.svg" alt="conciergenew">
							ROOM SERVICE	        
						</li>
						<li>
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/wifi.svg" alt="wifi">
							Free Wifi Hotspot	        
						</li>

						<li>
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/room-service.svg" alt="wifi">
							House Keeping      
						</li>
						<li>
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/ac.svg" alt="wifi">
							AC Room    
						</li>
						<li>
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/tv.svg" alt="wifi">
							32 inch LED TV   
						</li>
						<li>
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/car.svg" alt="wifi">
							Car Parking    
						</li>
						<li>
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/business-conference-hall.png" alt="wifi">
							 Conference/Meeting Hall    
						</li>
						<li>
							<img width="55px" src="<?php echo get_template_directory_uri()?>/assets/img/shower-head.png" alt="shower">
							 Electric Kettle
						</li>
                	</ul>
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
                                Make Your Reservation
                            </h3>
                          <div class="c-sections_infos_text ">
                             <ul>
                               <li>  
                                <i class="fas fa-envelope"></i>                           
                                	info@tigerlandsafarinepal.com 
                               </li>
                               <li>  
                               	 <i class="fa fa-phone"></i>                         
                                	+977-056-411091 /  +977-056-411092 
                               </li>
                             </ul>
                             <a href="#" class="button-dark">
                                <div class="holder">
                                <span>Inquiry Now </span>
                                <span role="none">Inquiry Now </span>
                                </div>
                              </a>

                               <a href="#" class="button-dark button-dark-outline">
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
	</main><!-- #main -->

<?php
get_footer();
