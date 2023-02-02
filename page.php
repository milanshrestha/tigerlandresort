<?php
/**
 * The template for displaying all pages
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

		<section data-scroll-section class="uk-section-large">
			<div class="uk-container uk-container-small">
				<div class="uk-grid uk-grid-medium" uk-grid>
					<div class="uk-width-expand@m">
						
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
					
				</div>
			</div>
		</section>


<?php
//get_sidebar();
get_footer();
