<section class="  uk-section uk-padding-remove-top plan-your-trip-wrap " data-scroll-section data-persistent>
  <div class="uk-container uk-container-expand-left uk-padding-remove-left" id="fixed-elements">
    <div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
      <div class="uk-width-1-2@m">
        <div class="c-speed-block" data-scroll data-scroll-speed="2">
          <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
            <div class="o-image" data-scroll>
              <img class="c-speed-block_image" src="<?php echo get_field('lower_image', 'option'); ?>" alt="<?php the_title(); ?>">
            </div>
          </div>
        </div>
      </div>

      <div class="uk-width-1-2@m uk-flex uk-flex-middle">
        <div class="c-section_infos_inner" data-scroll data-scroll-target="#fixed-elements">
          <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
            <h3 class="section_infos_inner--title">
              <?php echo get_field('lower_front_title', 'option'); ?>
            </h3>
            <div class="c-sections_infos_text ">
              <ul>
                <li>
                  <i class="fas fa-envelope"></i>
                  <?php echo get_field('email', 'option'); ?>
                </li>
                <li>
                  <i class="fa fa-phone"></i>
                  <?php echo get_field('contact_number', 'option'); ?>
                </li>
              </ul>
              <!-- <a href="#" class="button-dark">
                <div class="holder">
                  <span>Plan Your Trip</span>
                  <span role="none">Plan Your Trip</span>
                </div>
              </a> -->

              <a href="<?php echo get_field('contact_page_link', 'option'); ?>" class="button-dark button-dark-outline">
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