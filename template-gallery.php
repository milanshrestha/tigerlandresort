<?php

/**
 * The template name: Gallery
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

<section data-scroll-section class="hero-banner page-banner  medium-banner   switch-color light  uk-position-relative">
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

<section data-scroll-section class="uk-section">
	<div class="uk-container uk-container-large">
		<div class="uk-grid uk-grid-medium" uk-grid uk-lightbox="animation: slide">
			<?php
			$gallery_tempiate_images = get_field('gallery_tempiate_images', $post->ID);
			foreach ($gallery_tempiate_images as $gti) {
			?>
				<div class="uk-width-1-3@m uk-width-1-2@s">
					<div class="gallery-col">
						<a href="<?php echo $gti['gallery_tem_image']; ?>">
							<i class="uk-icon" uk-icon="icon:expand; ratio:1.3"></i>
							<img src="<?php echo $gti['gallery_tem_image']; ?>" alt="gallery-image-1">
						</a>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>

<?php
get_footer();
