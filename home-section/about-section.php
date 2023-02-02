<section class="about__section uk-section  -fixed  switch-color dark" data-scroll-section data-persistent>
  <div class="uk-container uk-container-expand-right uk-padding-remove-right" >
    <div class="uk-grid uk-grid-medium" uk-grid>

    <div class="uk-width-1-2@m" data-scroll>
        <div class="heading-title-wrap c-section_infos_inner c-section_infos -padding" data-scroll data-scroll-offset="300">
          <h2 class="heading-title">
            <?php echo get_field('title', 'option'); ?>
          </h2>
          <div class="c-sections_infos_text ">
          <p>
            <?php echo get_field('about_short_description', 'option'); ?>
          </p>
          </div>
         
          <a href="<?php echo get_field('about_link', 'option'); ?>" class="button-dark">
            <div class="holder">
              <span><?php echo get_field('about_button_text', 'option'); ?></span>
              <span role="none"><?php echo get_field('about_button_text', 'option'); ?></span>
            </div>
          </a>
        </div>
      </div>

      <div class="uk-width-1-2@m ">
        <div class="c-fixed_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
          <div class="c-fixed" data-scroll data-scroll-sticky data-scroll-target="#fixed-target" style="background-image:url(<?php echo get_field('about_image', 'option'); ?>)">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

