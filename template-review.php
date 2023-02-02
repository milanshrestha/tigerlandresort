<?php

/**
 * The template name: Review
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
	 <section  data-scroll-section class="hero-banner page-banner  medium-banner   switch-color light  uk-position-relative">
    <?php
        if (has_post_thumbnail()) {
          $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'big');
          $url = $thumb['0'];
        ?>
          <div class="banner-holder uk-position-relative">
            <img src="<?php echo $url ?>">
             <div class="hero-content-holder">
                <div class="uk-container uk-container-small">
                  <div class="hero-content ">
                    <h1 class="hero-title c-header_title" data-scroll>
                      <span class="c-header_title_line"><?php the_title(); ?> </span>
                    </h1>
                  </div>
                </div>
              </div>
          </div>
        <?php } ?>

  </section>

	<section data-scroll-section class="uk-section">
		<div class="uk-container">
			<div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid  data-scroll data-scroll-offset="200">
			<div>	
					<div class="testimonial-slide">
                        <p>
                            mind blowing Marvellous!!!!!!!! Its was so beautiful to visit there the friendly staff made my days all well and the good accomodation facility made it all good.I am so pleased to visit here tha ks for the pleasent environment will visit again 
                        </p>
                        <div class="user-detail">
                            <strong>Jaxon Clarke</strong>
                            Kensington, London
                        </div>
                    </div>
			</div>
			<div>	
					<div class="testimonial-slide">
                        <p>
								Why I Love Tigerland Safari Resort!!! If you ever happen to be in Chitwan, finding some resorts to stay in... This place is undoubtedly the Best Resort to stay in. The staff, the food, the ambience, the rooms, everything are absolute CLASS!!! I stayed in this resort between 13-14 June and I am still thrilled. The experience which this resort gave me is unforgettable...

                        </p>
                        <div class="user-detail">
                            <strong>Jaxon Clarke</strong>
                            Kensington, London
                        </div>
                    </div>
			</div>
			<div>	
					<div class="testimonial-slide">
                        <p>
							A place to be in Chitwan Amazing atmosphere with humble and ready to help attitude staff. The rooms were spotlessly clean and extremely luxurious with 5 star amenities.
                        </p>
                        <div class="user-detail">
                            <strong>Jaxon Clarke</strong>
                            Kensington, London
                        </div>
                    </div>
			</div>
		</div>
		</div>
	</section>

<?php
get_footer();
