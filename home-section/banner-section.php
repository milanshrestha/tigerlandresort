<!-- <section id="hero-banner" data-scroll-section class="hero-banner  switch-color light  uk-position-relative">
			<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push;  finite: true">
				<ul class="uk-slideshow-items">
				<?php
				$mob_banner_images = get_field('mob_banner_images', 'option');

				foreach ($mob_banner_images as $mbanner) {
				?>
					<li>
						
						<div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
							<img src="<?php echo $mbanner['m_image']; ?>)">
						</div>
					</li>
					<?php } ?>
					
				</ul>
				<div class="hero-content-holder">
					<div class="uk-container">
						<div class="hero-content ">
							<h1 class="hero-title c-header_title" data-scroll>
								<span class="c-header_title_line"><?php echo get_field('banner_title', 'option'); ?></span>
							</h1>
						</div>
					</div>
				</div>
			</div>
		</section> -->





<section id="hero-banner" data-scroll-section class="hero-banner  switch-color light  uk-position-relative">
	<div class="swiper-container ">
		<div class="swiper-wrapper">
			<?php
			$mob_banner_images = get_field('mob_banner_images', 'option');

			foreach ($mob_banner_images as $mbanner) {
			?>
				<div class="swiper-slide">
					<div>
						<img src="<?php echo $mbanner['m_image']; ?>)" alt="<?php echo get_field('banner_title'); ?> - Tigarland Safari Resort">
					</div>
				</div>
			<?php } ?>

		</div>
		<div class="hero-content-holder">
			<div class="uk-container">
				<div class="hero-content ">
					<h1 class="hero-title c-header_title" data-scroll>
						<span class="c-header_title_line"><?php echo get_field('banner_title', 'option'); ?></span>
					</h1>
				</div>
			</div>
		</div>
	</div>
</section>