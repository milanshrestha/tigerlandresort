<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tigerland
 */

get_header();
$pid = $post->ID;
$exclude_ids = array($pid);
$categories = get_the_category($pid);
$relatedcat = $categories[0]->slug;
?>

<section data-scroll-section class="hero-banner page-banner  switch-color light  uk-position-relative">
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
	<div class="uk-container uk-container-small ">
		<div class="uk-grid uk-grid-medium" uk-grid>
			<div class="uk-width-expand@m">
				<div class="the-contentarea">
					<?php the_content() ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$gallerys = get_field('post_gallery', $post->ID);

if (is_array($gallerys) || is_object($gallerys) && !empty($gallerys)) {
?>
	<section data-scroll-section>
		<div class="uk-container uk-container-large">
			<div class="heading-title-wrap uk-text-center">
				<h2 class="heading-title">
					Photo Gallery
				</h2>
				<div class="uk-position-relative" uk-slider="autoplay: true">
					<div class="uk-slider-items uk-grid uk-grid-medium" uk-grid uk-lightbox="animation: slide">
						<?php
						foreach ($gallerys as $gallery) { ?>
							<div class="uk-width-1-3@m uk-width-1-2@s">
								<div class="gallery-col single-gallery-col">
									<a href="<?php echo $gallery['post_photo_gallery']; ?>">
										<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
										<img src="<?php echo $gallery['post_photo_gallery']; ?>" alt="<?php the_title(); ?>">
									</a>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>

			</div>
	</section>
<?php } ?>

<section data-scroll-section class="uk-section">
	<div class="uk-container">
		<div class="heading-title-wrap uk-text-center">
			<h2 class="heading-title">
				Other Activities
			</h2>
			<div class="uk-grid uk-grid-medium" uk-grid="">
				<?php

				$related_args = array('category_name' => $relatedcat, 'posts_per_page' => 3, 'post_status' => 'publish', 'post__not_in' => $exclude_ids);
				$related_query = new WP_Query($related_args);
				if ($related_query->have_posts()) {
					while ($related_query->have_posts()) {
						$related_query->the_post();
				?>
						<div class="uk-width-1-3@m uk-width-1-2@s uk-first-column">
							<div class="hotel_facilities-col is-inview" data-scroll="">
								<a href="<?php the_permalink(); ?>">
									<?php
									if (has_post_thumbnail()) {
										$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'big');
										$url = $thumb['0'];
									?> <img src="<?php echo $url ?>" alt="<?php the_title() ?>"> <?php }
																																								?>
									<h3 class="card-title">
										<?php the_title(); ?></h3>
								</a>
							</div>
						</div>
				<?php }
				} ?>
			</div>
		</div>
</section>



<?php
//get_sidebar();
get_footer();
