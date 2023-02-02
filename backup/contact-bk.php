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
	                   <span class="c-header_title_line">Contact us </span> 
	              </h1>
	            </div>
	          </div>
	        </div>
        </div>
	</section>

	<section data-scroll-section class="uk-section ">
		<div class="uk-container ">
			<div class="uk-grid uk-grid-medium" uk-grid>
				<div class="uk-width-3-5@m">
					<div class="contact-form-wrap">
						<form action="/contact-us/#wpcf7-f1487-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init"><div style="display: none;">
							<input type="hidden" name="_wpcf7" value="1487">
							<input type="hidden" name="_wpcf7_version" value="5.5.6">
							<input type="hidden" name="_wpcf7_locale" value="en_US">
							<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1487-o1">
							<input type="hidden" name="_wpcf7_container_post" value="0">
							<input type="hidden" name="_wpcf7_posted_data_hash" value=""></div><p><label> Your name<br>
							<span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p><p><label> Your email<br>
							<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p><p><label> Phone Number<br>
							<span class="wpcf7-form-control-wrap your-phone"><input type="number" name="your-phone" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" aria-invalid="false"></span> </label></p><p><label> Your Subject<br>
							<span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p><p><label> Your message (optional)<br>
							<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p><p><input type="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p><div class="wpcf7-response-output" aria-hidden="true"></div>
						</form>
					</div>
				</div>
				<div class="uk-width-2-5@m uk-flex uk-flex-middle">
					<div class="contact-address-information">
							<h3>Contact Info</h3>
						<div class="contact_title">
							<div>
								<strong> City Office</strong>
								<ul>
									<li>
										<i class="zmdi zmdi-pin"></i>
										Apsara Marga, Lazimpat, Kathmandu,Nepal
									</li>
									<li>
										<i class="zmdi zmdi-phone"></i>
											+977/1/4002261-62
									</li>
								</ul>
							</div>
							<div>
								<strong> Resort </strong>
								<ul>
									<li>
										<i class="zmdi zmdi-pin"></i>
										Chitwan National Park Jagatpur, Chitwan, Nepal
									</li>
									<li>
										<i class="zmdi zmdi-phone"></i>
											+977-056-411091 +977-056-411092
									</li>
									<li>
										<i class="zmdi zmdi-email"></i>
											info@tigerlandsafarinepal.com
									</li>
								</ul>
							</div>
							<div class="footer-social">
								<a href="#" class="uk-icon " uk-icon="icon:facebook; ratio:1.1;"></a>
								<a href="#" class="uk-icon " uk-icon="icon:twitter; ratio:1.1;"></a>
								<a href="#" class="uk-icon " uk-icon="icon:youtube;  ratio:1.1;"></a>
								<a href="#" class="uk-icon " uk-icon="icon:instagram;  ratio:1.1;"></a>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<section data-scroll-section class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.8633724337164!2d84.30374231539163!3d27.56675043826271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994f655b71e863f%3A0x616d0bb4eaf229b2!2z4KSf4KS-4KSH4KSX4KSwIOCksuCliOCkguCkoSDgpLjgpKvgpL7gpLDgpYAg4KSw4KS_4KS44KWL4KSw4KWN4KSf!5e0!3m2!1sne!2snp!4v1647369402411!5m2!1sne!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>

	</main><!-- #main -->

<?php
get_footer();
