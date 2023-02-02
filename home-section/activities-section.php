<section data-scroll-section class="uk-section uk-padding-remove-top">
  <div class="uk-container uk-container-large">
    <div class="heading-title-wrap uk-text-center">
      <h2 class="heading-title">
        Activities
      </h2>
    </div>
    <div class="activities-wrap">
      <div class=" activities ">
        <div class="swiper-wrapper">
          <?php
          $activities_args = array('category_name' => 'activities', 'order' => 'DESC', 'posts_per_page' => 9, 'post_status' => 'publish');
          $activities_query = new WP_Query($activities_args);

          if ($activities_query->have_posts()) {
            while ($activities_query->have_posts()) {
              $activities_query->the_post();

          ?>
              <div class="swiper-slide">
                <div class="activitity-col uk-position-relative">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                      $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'big');
                      $url = $thumb['0'];
                    ?> <img src="<?php echo $url ?>" alt="<?php the_title() ?>"> <?php }
                                                                              ?>
                  </a>
                  <div class="activitity-col-wrap">
                    <h3>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
          <?php }
          }
          wp_reset_postdata(); ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>