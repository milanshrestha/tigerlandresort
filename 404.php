<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tigerland
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section data-scroll-section class="uk-section-large error-404 not-found">
			<div class="uk-container">
				<div class="uk-grid uk-grid-medium" uk-grid>
					<div class="uk-width-expand@m">
						<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tigerland' ); ?></h1>
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'tigerland' ); ?></p>

							</header><!-- .page-header -->
					</div>
				</div>
			</div>
		</section>
		
	</main><!-- #main -->

<?php
get_footer();
