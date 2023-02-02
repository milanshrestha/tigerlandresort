<section class="uk-section our-villa" data-scroll-section>
  <div class="uk-container ">
    <div class="overlay-col uk-position-relative o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
      <a class="o-image" href="<?php echo get_field('link_url', 'option'); ?>" data-scroll>
        <img src="<?php echo get_field('villa_cover_photo', 'option'); ?>" alt="<?php the_title(); ?>">
      </a>
      <div class="overlay-col-content c-section_infos_inner" data-scroll data-scroll-target="#fixed-elements">
        <div class="c-section_infos_inner" data-scroll data-scroll-offset="100">
          <h3 class="title">
            <a href="<?php echo get_field('link_url', 'option'); ?>"><?php echo get_field('villa_title', 'option'); ?></a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>