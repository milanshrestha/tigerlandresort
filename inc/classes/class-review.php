<?php
defined('ABSPATH') or die('No script kiddies please!!');

if (!class_exists('tigherLandReview')) {

    class tigherLandReview
    {
        function __construct()
        {

            add_action('init', array($this, 'tigerland_resort_Testimonial_init'));
        }

     
        function tigerland_resort_testimonial_init()
        {
            $labels = array(
                'name' => _x('Testimonials', 'Post type general name', 'textdomain'),
                'singular_name' => _x('Testimonial', 'Post type singular name', 'textdomain'),
                'menu_name' => _x('Testimonials', 'Admin Menu text', 'textdomain'),
                'name_admin_bar' => _x('Testimonial', 'Add New on Toolbar', 'textdomain'),
                'add_new' => __('Add New', 'textdomain'),
                'add_new_item' => __('Add New Testimonial', 'textdomain'),
                'new_item' => __('New Testimonial', 'textdomain'),
                'edit_item' => __('Edit Testimonial', 'textdomain'),
                'view_item' => __('View Testimonial', 'textdomain'),
                'all_items' => __('All Testimonials', 'textdomain'),
                'search_items' => __('Search Testimonials', 'textdomain'),
                'parent_item_colon' => __('Parent Testimonials:', 'textdomain'),
                'not_found' => __('No Testimonial  found.', 'textdomain'),
                'not_found_in_trash' => __('No Testimonial found in Trash.', 'textdomain'),
                'featured_image' => _x('Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
                'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
                'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
                'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
                'archives' => _x('Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
                'insert_into_item' => _x('Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
                'uploaded_to_this_item' => _x('Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
                'filter_items_list' => _x('Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
                'items_list_navigation' => _x('Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
                'items_list' => _x('Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
            );

            $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'testimonial'),
                'show_in_nav_menus' => true,
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title', 'editor', 'thumbnail'),
                'menu_icon' => 'dashicons-businessman'
            );

            register_post_type('testimonial', $args);
        }
    }
    new tigherLandReview();
}
