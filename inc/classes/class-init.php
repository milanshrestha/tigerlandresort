<?php
defined('ABSPATH') or die('No script kiddies please!!');

if (!class_exists('classInitial')) {

    class classInitial
    {
        function __construct()
        {
            $this->mainFunction();
            add_action('init', array($this, 'tigerland_register_menu'));
            add_action('init', array($this, 'tigerland_register_menu1'));
            add_action('init', array($this, 'tigerland_register_menu2'));
            add_action('init', array($this, 'tigerland_register_menu3'));
            add_action('init', array($this, 'tigerland_register_menu4'));
            add_action('pre_get_posts', array($this, 'tigerland_include_custom_post_types_in_search_results'));
        }

        function mainFunction()
        {

            require get_template_directory() . '/inc/classes/class-review.php';
       

            function convertSingleArray($multi_array)
            {

                if (is_array($multi_array) || is_object($multi_array)) {
                    $singleArray = [];
                    foreach ($multi_array as $childArray) {
                        foreach ($childArray as $value) {
                            $singleArray[] = $value;
                        }
                    }
                    return $singleArray;
                }
            }
            function excerpt($limit)
            {
                $excerpt = explode(' ', get_the_excerpt(), $limit);

                if (count($excerpt) >= $limit) {
                    array_pop($excerpt);
                    $excerpt = implode(" ", $excerpt) . '...';
                } else {
                    $excerpt = implode(" ", $excerpt);
                }

                $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

                return $excerpt;
            }
        }
        function tigerland_include_custom_post_types_in_search_results($query)
        {
            if ($query->is_main_query() && $query->is_search() && !is_admin()) {
                $query->set('post_type', array('post'));
            }
        }


        function tigerland_register_menu()
        {
            register_nav_menu('footer1', __('Footer_Menu1'));
        }
        function tigerland_register_menu1()
        {
            register_nav_menu('footer2', __('Footer_Menu2'));
        }
        function tigerland_register_menu2()
        {
            register_nav_menu('footer3', __('Footer_Menu3'));
        }
        function tigerland_register_menu3()
        {
            register_nav_menu('footer4', __('Footer_Menu4'));
        }
        function tigerland_register_menu4()
        {
            register_nav_menu('footer5', __('Lower_Menu'));
        }
    }
    new classInitial();
}
