<?php

/**
 * The template name: Contact Us
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

<section style="height: auto;" data-scroll-section class="hero-banner page-banner  medium-banner   switch-color light  uk-position-relative">
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

<section data-scroll-section class="uk-section ">
	<div class="uk-container ">
		<div class="uk-grid uk-grid-medium" uk-grid>
			<div class="uk-width-3-5@m">
				<div class="contact-form-wrap">
					<?php echo do_shortcode(get_field('contact_form_shortcode', 'option')); ?>
				</div>

			</div>
			<div class="uk-width-2-5@m uk-flex uk-flex-middle">
				<div class="contact-address-information">
					<h3>Contact Info</h3>
					<div class="contact_title">
						<div>
							<strong> City Office</strong>
							<ul>
								<li>
									<i class="zmdi zmdi-pin"></i>
									<?php echo get_field('office_address', 'option'); ?>
								</li>
								<li>
									<i class="zmdi zmdi-phone"></i>
									<?php echo get_field('phone_number_1', 'option'); ?>
								</li>
								<li>
									<i class="zmdi zmdi-phone"></i>
									<?php echo get_field('e-mail-1', 'option'); ?>
								</li>
							</ul>
						</div>
						<div>
							<strong> Resort </strong>
							<ul>
								<li>
									<i class="zmdi zmdi-pin"></i>
									<?php echo get_field('resort_address', 'option'); ?>
								</li>
								<li>
									<i class="zmdi zmdi-phone"></i>
									<?php echo get_field('phone_number_2', 'option'); ?>
								</li>
								<li>
									<i class="zmdi zmdi-email"></i>
									<?php echo get_field('email_2', 'option'); ?>
								</li>
							</ul>
						</div>
						<div class="footer-social">
							<?php
							$fb = get_field('facebook', 'option');
							$tw =  get_field('twitter', 'option');
							$yt =  get_field('youtube', 'option');
							$in =  get_field('instagram', 'option');

							if (!empty($fb)) { ?>
								<a href="<?php echo $fb; ?>" class="uk-icon " uk-icon="icon:facebook; ratio:1.1;" target="_blank"></a>
							<?php } ?>
							<?php if (!empty($tw)) { ?>
								<a href="<?php echo $tw; ?>" class="uk-icon " uk-icon="icon:twitter; ratio:1.1;" target="_blank"></a>
							<?php } ?>
							<?php if (!empty($yt)) { ?>
								<a href="<?php echo $yt; ?>" class="uk-icon " uk-icon="icon:youtube;  ratio:1.1;" target="_blank"></a>
							<?php } ?>
							<?php if (!empty($in)) { ?>
								<a href="<?php echo $in; ?>" class="uk-icon " uk-icon="icon:instagram;  ratio:1.1;" target="_blank"></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$map = get_field('map_embedded', 'option');
if (!empty($map)) { ?>
	<section data-scroll-section class="contact-map">
		<?php echo get_field('map_embedded', 'option'); ?>
	</section>
<?php } ?>


<?php
get_footer();
