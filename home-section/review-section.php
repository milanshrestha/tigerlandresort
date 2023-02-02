<section data-scroll-section class="uk-section uk-section-large  section--testimonail uk-text-center">
  <div class="uk-container uk-position-relative">
    <div class="swiper-container ">
      <div class="swiper-wrapper">
      <?php
      $review_args = array('post_type' => 'testimonial', 'posts_per_page' => 10, 'post_status' => 'publish');
      $review_query = new WP_Query($review_args);
      if ($review_query->have_posts()) {
        while ($review_query->have_posts()) {
          $review_query->the_post();
      ?>
        <div class="swiper-slide">
          <div class="testimonial-col">
            <h3>
            <?php echo excerpt("25"); ?>
            </h3>
          </div>
        </div>
        <?php }
      }
      wp_reset_postdata(); ?>
      </div>
    </div>
    
    <a href="https://www.tigerlandsafarinepal.com/new/reviews" class="button-dark">
      <div class="holder">
        <span>View All Reviews </span>
        <span role="none">View All Reviews </span>
      </div>
    </a>
  </div>
</section>