<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tigerland
 */

get_header();
?>
<!-- Banner-Section -->
<?php include('home-section/banner-section.php'); ?>
<!-- Banner-Section -->

<!-- About-section -->
<?php include('home-section/about-section.php'); ?>
<!-- About-section -->

<!-- Feature-section-1 -->
<?php include('home-section/feature-section-1.php'); ?>
<!-- Feature-section-1 -->

<!-- Villa Section -->
<?php include('home-section/villa-section.php'); ?>
<!-- Villa Section -->

<!-- Feature Section-2 -->
<?php include('home-section/feature-section-2.php'); ?>
<!-- Feature Section-2 -->

<!-- Video-section -->
<?php include('home-section/video-section.php'); ?>
<!-- Video-section -->

<!-- Activities-section -->
<?php include('home-section/activities-section.php'); ?>
<!-- Activities-section -->


<!-- Lower-section -->
<?php include('home-section/lower-section.php'); ?>
<!-- Lower-section -->

<!-- Review-section -->
<?php include('home-section/review-section.php'); ?>
<!-- Review-section -->



<?php
get_footer();
