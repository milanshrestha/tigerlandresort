<section class=" hotel_facilities_area" data-scroll-section>
  <div class="uk-container">
    <div class="uk-grid uk-grid-medium" uk-grid data-scroll>
    <?php
      $features1 = get_field('select_facility_row_2', 'option');
      foreach ($features1 as $feature) {
        $feature_posts1[] = $feature['service_2'];
      }
      
      ?>
      <?php
      $featured_args = array('post__in' => $feature_posts1, 'posts_per_page' => 3, 'post_status' => 'publish');
      $featured_query = new WP_Query($featured_args);
      if ($featured_query->have_posts()) {
        while ($featured_query->have_posts()) {
          $featured_query->the_post();
      ?>
          <div class="uk-width-1-3@m uk-width-1-2@s">
            <div class="hotel_facilities-col" data-scroll>
              <a href="<?php the_permalink(); ?>">
                <?php
                if (has_post_thumbnail()) {
                  $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'big');
                  $url = $thumb['0'];
                ?> <img src="<?php echo $url ?>" alt="<?php the_title() ?>"> <?php }
                                                                              ?>
                <h3 class="card-title">
                  <?php the_title(); ?>
                </h3>
              </a>
            </div>
          </div>
      <?php }
      }
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>
