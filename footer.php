<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tigerland
 */

?>

<section class="uk-section site-footer uk-padding-remove-top uk-padding-remove-bottom " data-scroll-section>
	<div class="first-footer">
		<div class="uk-container">
			<div class="uk-grid uk-grid-medium" uk-grid>
				<div class="uk-width-1-4@m uk-width-1-2">
					<div class="footer-link">

						<h5 class="footer-heading"><?php $theme_location = 'footer1';
																				$theme_locations1 = get_nav_menu_locations();

																				$menu_obj = get_term($theme_locations1[$theme_location], 'nav_menu');
																				if (!is_wp_error($menu_obj)) {
																					$menu_name = $menu_obj->name;
																					echo $menu_name;
																				} ?></h5>
						<?php wp_nav_menu(array('theme_location' => 'footer1')); ?>
					</div>
				</div>
				<div class="uk-width-1-4@m uk-width-1-2">
					<div class="footer-link">
						<h5 class="footer-heading"><?php $theme_location2 = 'footer2';
																				$theme_locations2 = get_nav_menu_locations();

																				$menu_obj = get_term($theme_locations2[$theme_location2], 'nav_menu');

																				if (!is_wp_error($menu_obj)) {
																					$menu_name = $menu_obj->name;
																					echo $menu_name;
																				} ?></h5>
						<?php wp_nav_menu(array('theme_location' => 'footer2')); ?>
					</div>
				</div>
				<div class="uk-width-1-4@m uk-width-1-2">
					<div class="footer-link">
						<h5 class="footer-heading"><?php $theme_location3 = 'footer3';
																				$theme_locations3 = get_nav_menu_locations();

																				$menu_obj = get_term($theme_locations3[$theme_location3], 'nav_menu');

																				if (!is_wp_error($menu_obj)) {
																					$menu_name = $menu_obj->name;
																					echo $menu_name;
																				} ?></h5>
						<?php wp_nav_menu(array('theme_location' => 'footer3')); ?>
					</div>

				</div>
				<div class="uk-width-1-4@m uk-width-1-2">
					<div class="footer-link">
						<h5 class="footer-heading">We Accept</h5>
						<div class="payment-options uk-flex uk-flex-middle uk-flex-wrap">
							<div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/mc-logo.svg" alt="mc-logo">
							</div>
							<div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/Visa_Inc_logo.png" alt="mc-logo">
							</div>
							<div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/american_express.svg" alt="american_express">
							</div>
						</div>

						<div class="footer-social">
							<h5 class="footer-heading">Connect With</h5>
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
	<div class="footer-second">
		<div class="uk-container">
			<div class="contact-information">

				<div class=" uk-child-width-1-3@m uk-child-width-1-2@s uk-grid uk-grid-medium uk-grid-divider " uk-grid>
					<div>
						<h2><?php echo get_field('office_address', 'option'); ?></h2>
						<h3><?php echo get_field('e-mail-1', 'option'); ?></h3>
						<h4><?php echo get_field('phone_number_1', 'option'); ?> </h4>
					</div>

					<div>
						<h2> <?php echo get_field('resort_address', 'option'); ?> </h2>
						<h3><?php echo get_field('email_2', 'option'); ?></h3>
						<h4><?php echo get_field('phone_number_2', 'option'); ?> </h4>
					</div>

					<div>
						<h5 class="footer-heading uk-text-center">TigerLand By</h5>
						<div class="uk-text-right uk-flex uk-flex-center uk-flex-middle">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/CG-Holdings-logo.png" alt="CG Holding ">
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<div class="footer-last">
		<div class="uk-container">
			<div class="uk-flex uk-flex-middle uk-flex-between uk-flex-wrap">

				<div class="last-footer-links">
					<p>
						© <?php echo date('Y'); ?> Tigerland Safari Resort. All rights reserved. Websites Design & Development By: <a href="https://www.genesiswtech.com/" target="_blank">Genesiswtech.com</a>
					</p>
				</div>
				<div class="footer-links">
					<?php wp_nav_menu(array('theme_location' => 'footer5')); ?>

				</div>
			</div>
		</div>
	</div>
	<div class="clipart">
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-clipart.png" alt="clipart">
	</div>
</section><!-- #colophon -->
</div><!-- #page -->
<div id="modal-media-video" class="uk-flex-top" uk-modal>
	<div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
		<button class="uk-modal-close-outside" type="button" uk-close></button>
		<iframe src="<?php echo get_field('youtube_video', 'option'); ?>" width="1920" height="1080" uk-video uk-responsive></iframe>
	</div>
</div>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js" crossorigin="anonymous"></script>
<script nomodule src="https://polyfill.io/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll" crossorigin="anonymous"></script>
</body>

</html>