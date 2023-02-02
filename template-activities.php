<?php

/**
 * The template name: Activities
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

<section class="uk-section hotel_facilities_area activities__section" data-scroll-section>
  <div class="uk-container">
    <div class="uk-grid uk-grid-medium" uk-grid>
      <?php
      $featured_args = array('category_name' => 'activities', 'posts_per_page' => 18, 'post_status' => 'publish');
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



<?php
get_footer();
