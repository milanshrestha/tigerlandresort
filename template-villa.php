<?php

/**
 * The template name: Villa
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

<section data-scroll-section class="hero-banner page-banner  switch-color light  uk-position-relative">
  <?php
  if (has_post_thumbnail()) {
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'big');
    $url = $thumb['0'];
  ?>
    <div class="banner-holder uk-position-relative">
      <img src="<?php echo $url ?>" alt="<?php the_title(); ?> - Tigarland Safari Resort">
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

<section class="  uk-section  uk-text-center " data-scroll-section data-persistent>
  <div class="uk-container uk-container-small  " id="fixed-elements">
    <div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
      <div class="uk-width-1-1@m uk-flex uk-flex-middle">
        <div class="c-section_infos_inner" data-scroll data-scroll-target="#fixed-elements">
          <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
            <h3 class="section_infos_inner--title">
              <?php echo get_field('sub_title', $post->ID); ?>
            </h3>
            <div class="c-sections_infos_text ">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="uk-section uk-padding-remove-top" data-scroll-section data-persistent>
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-medium uk-grid" uk-grid uk-lightbox="animation: fade" uk-grid data-scroll>
      <?php
      $villa_gallery_images = get_field('villa_gallery_images', $post->ID);
      foreach ($villa_gallery_images as $vgi) {
      ?>
        <div class="single-gallery-image" data-scroll>
          <a class="uk-inline" href="<?php echo $vgi['g_images']; ?>" data-caption="<?php echo $vgi['g_image_caption']; ?>">
            <img src="<?php echo $vgi['g_images']; ?>" width="1800" height="1200" alt="">
          </a>
        </div>
      <?php } ?>

    </div>
  </div>
</section>


<section class="  uk-section uk-padding-remove-top" data-scroll-section data-persistent>
  <div class="uk-container" id="fixed-elements">
    <div class="uk-grid uk-grid-medium" uk-grid>
      <div class="uk-width-1-10@m">
        <div class="c-section_infos_inner" style="width:100%; display: block;" data-scroll data-scroll-target="#fixed-elements">
          <div class="c-section_infos_inner uk-text-center" data-scroll data-scroll-offset="200">
            <h3 class="section_infos_inner--title uk-margin-remove">
              Facility
            </h3>
          </div>
        </div>
      </div>
      <div class="uk-width-1-10@m">
        <ul class="room-facilities uk-grid uk-grid-medium uk-grid uk-child-width-1-4@m uk-child-width-1-2@s " uk-grid>
          <?php
          $facilities = get_field('facility', $post->ID);
          foreach ($facilities as $fac) {
          ?>
            <li>
              <img width="55px" src="	<?php echo $fac['f_icon']; ?>" alt="conciergenew">
              <?php echo $fac['facility_name']; ?>
            </li>
          <?php } ?>

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
              <img class="c-speed-block_image" src="<?php echo get_field('contact_photo', $post->ID); ?>" alt="Locomotive image from unsplash">
            </div>
          </div>
        </div>
      </div>

      <div class="uk-width-1-2@m uk-flex uk-flex-middle">
        <div class="c-section_infos_inner" data-scroll data-scroll-target="#fixed-elements">
          <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
            <h3 class="section_infos_inner--title">
              <?php echo get_field('contact_title', $post->ID); ?>
            </h3>
            <div class="c-sections_infos_text ">
              <ul>
                <li>
                  <i class="fas fa-envelope"></i>
                  <?php echo get_field('villa_contact_mail', $post->ID); ?>
                </li>
                <li>
                  <i class="fa fa-phone"></i>
                  <?php echo get_field('contact_number', $post->ID); ?>
                </li>
              </ul>
              <!-- <a href="#" class="button-dark">
                                <div class="holder">
                                <span>Inquiry Now </span>
                                <span role="none">Inquiry Now </span>
                                </div>
                              </a> -->

              <a href="<?php echo get_field('contact_page_link', 'option'); ?>" class="button-dark button-dark-outline">
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
    <a href="#" class="button-dark">
      <div class="holder">
        <span>View All Reviews </span>
        <span role="none">View All Reviews </span>
      </div>
    </a>
  </div>
</section>

<?php
get_footer();
