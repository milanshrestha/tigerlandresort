<?php

/**
 * The template name: About Us 
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

<section class="uk-section uk-text-center" data-scroll-section>
	<div class="uk-container" data-scroll>
		<div class="about-intro c-section_infos_inner the-contentarea" data-scroll data-scroll-offset="200">

			<?php the_content(); ?>

		</div>

		<div class="slider-wrap">
			<div uk-slider>
				<div class="uk-position-relative">
					<div class="uk-slider-container uk-light">
						<ul class="uk-slider-items uk-child-width-1-1@m">
							<?php
							$about_gallerys = get_field('about_gallery', $post->ID);
							foreach ($about_gallerys as $ag) {
							?>

								<li>
									<img src="<?php echo $ag['about_image']; ?>" alt="<?php the_title(); ?> ">
								</li>
							<?php } ?>

						</ul>
					</div>
					<div class="uk-hidden@s uk-light">
						<a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
						<a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
					</div>
					<div class="uk-visible@s">
						<a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
						<a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="  uk-section uk-padding-remove-bottom accomodation-wrap " data-scroll-section data-persistent>
	<div class="uk-container uk-container-expand-left uk-padding-remove-left" id="fixed-elements">
		<div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
			<div class="uk-width-1-2@m">
				<div class="c-speed-block" data-scroll data-scroll-speed="2">
					<div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
						<div class="o-image" data-scroll>
							<img class="c-speed-block_image" src="<?php echo get_field('story_image', $post->ID); ?>" alt="Locomotive image from unsplash">
						</div>
					</div>
				</div>
			</div>

			<div class="uk-width-1-2@m uk-flex uk-flex-middle">
				<div class="c-section_infos_inner" data-scroll data-scroll-target="#fixed-elements">
					<div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
						<h3 class="section_infos_inner--title">
							<?php echo get_field('story_title', $post->ID); ?>
						</h3>
						<div class="c-sections_infos_text ">
							<?php echo get_field('short_description', $post->ID); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





<?php
get_footer();
