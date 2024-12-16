<?php
/**
 * Created by PhpStorm.
 * User: Sushant Gauchan
 * Date: 2/26/2018
 * Time: 5:07 PM
 */



function banner_post_type(){
    $banner_labels = array(
        'name' => _x('Banner Post', 'post type general name'),
        'singular_name' => _x('Banner', 'post type singular name'),
        'add_new' => _x('Add New', 'Banner'),
        'all_items' => 'All Banner',
        'add_new_item' => __("Add Banner"),
        'edit_item' => __("Edit Banner"),
        'new_item' => __("New Banner"),
        'view_item' => __("View Banner"),
        'search_items' => __("Search Banner"),
        'not_found' =>  __('No Banner Found'),
        'not_found_in_trash' => __('No Banner found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $banner_args = array(
        'labels' => $banner_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),

        'menu_position' => 4,
        'show_ui' => true,

        'show_admin_column' => true,
    );
    register_post_type('banner', $banner_args);
}
add_action('init', 'banner_post_type');

function banner_custom_taxonomies(){
    $banner_labels = array(
        'name' => 'Banner Categories',
        'singular_name' => 'Banner Category',
        'search_items' => 'Search Banner Category',
        'all_items' => 'All Banner Category',
        'parent_item' => 'Parent Banner Category',
        'parent_item_colon'=>'Parent Banner Category:',
        'edit_item' => 'Edit Banner Category',
        'update_item' => 'Update Banner Category',
        'add_new_item' => 'Add New Banner Category',
        'add_new_name' => 'Add Banner Category Name',
        'menu_name' => 'Banner Category',
    );
    $banner_args = array(
        'hierarchical' => true,
        'labels' => $banner_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'banner_category'),
    );
    register_taxonomy('banner_category', array('banner'),$banner_args);
}
add_action('init', 'banner_custom_taxonomies');

function experiences_post_type(){
    $experiences_labels = array(
        'name' => _x('Experiences Post', 'post type general name'),
        'singular_name' => _x('Experiences', 'post type singular name'),
        'add_new' => _x('Add New', 'Experiences'),
        'all_items' => 'All Experiences',
        'add_new_item' => __("Add Experiences"),
        'edit_item' => __("Edit Experiences"),
        'new_item' => __("New Experiences"),
        'view_item' => __("View Experiences"),
        'search_items' => __("Search Experiences"),
        'not_found' =>  __('No Experiences Found'),
        'not_found_in_trash' => __('No Experiences found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $experiences_args = array(
        'labels' => $experiences_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),

        'menu_position' => 4,
        'show_ui' => true,

        'show_admin_column' => true,
    );
    register_post_type('experiences', $experiences_args);
}
add_action('init', 'experiences_post_type');

function room_post_type(){
    $room_labels = array(
        'name' => _x('Room Post', 'post type general name'),
        'singular_name' => _x('Room', 'post type singular name'),
        'add_new' => _x('Add New', 'Room'),
        'all_items' => 'All Room',
        'add_new_item' => __("Add Room"),
        'edit_item' => __("Edit Room"),
        'new_item' => __("New Room"),
        'view_item' => __("View Room"),
        'search_items' => __("Search Room"),
        'not_found' =>  __('No Room Found'),
        'not_found_in_trash' => __('No Room found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $room_args = array(
        'labels' => $room_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),

        'menu_position' => 4,
        'show_ui' => true,

        'show_admin_column' => true,
    );
    register_post_type('room', $room_args);
}
add_action('init', 'room_post_type');

function testimonial_post_type(){
    $testimonial_labels = array(
        'name' => _x('Testimonial Post', 'post type general name'),
        'singular_name' => _x('Testimonial', 'post type singular name'),
        'add_new' => _x('Add New', 'Testimonial'),
        'all_items' => 'All Testimonial',
        'add_new_item' => __("Add Testimonial"),
        'edit_item' => __("Edit Testimonial"),
        'new_item' => __("New Testimonial"),
        'view_item' => __("View Testimonial"),
        'search_items' => __("Search Testimonial"),
        'not_found' =>  __('No Testimonial Found'),
        'not_found_in_trash' => __('No Testimonial found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $testimonial_args = array(
        'labels' => $testimonial_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),

        'menu_position' => 4,
        'show_ui' => true,

        'show_admin_column' => true,
    );
    register_post_type('testimonial', $testimonial_args);
}
add_action('init', 'testimonial_post_type');

function faq_post_type(){
    $faq_labels = array(
        'name' => _x('Faq Post', 'post type general name'),
        'singular_name' => _x('Faq', 'post type singular name'),
        'add_new' => _x('Add New', 'Faq'),
        'all_items' => 'All Faq',
        'add_new_item' => __("Add Faq"),
        'edit_item' => __("Edit Faq"),
        'new_item' => __("New Faq"),
        'view_item' => __("View Faq"),
        'search_items' => __("Search Faq"),
        'not_found' =>  __('No Faq Found'),
        'not_found_in_trash' => __('No Faq found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $faq_args = array(
        'labels' => $faq_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),

        'menu_position' => 4,
        'show_ui' => true,

        'show_admin_column' => true,
    );
    register_post_type('faq', $faq_args);
}
add_action('init', 'faq_post_type');

function faq_custom_taxonomies(){
    $faq_labels = array(
        'name' => 'Faq Categories',
        'singular_name' => 'Faq Category',
        'search_items' => 'Search Faq Category',
        'all_items' => 'All Faq Category',
        'parent_item' => 'Parent Faq Category',
        'parent_item_colon'=>'Parent Faq Category:',
        'edit_item' => 'Edit Faq Category',
        'update_item' => 'Update Faq Category',
        'add_new_item' => 'Add New Faq Category',
        'add_new_name' => 'Add Faq Category Name',
        'menu_name' => 'Faq Category',
    );
    $faq_args = array(
        'hierarchical' => true,
        'labels' => $faq_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'faq_category'),
    );
    register_taxonomy('faq_category', array('faq'),$faq_args);
}
add_action('init', 'faq_custom_taxonomies');

function package_post_type(){
    $package_labels = array(
        'name' => _x('Package Post', 'post type general name'),
        'singular_name' => _x('Package', 'post type singular name'),
        'add_new' => _x('Add New', 'Package'),
        'all_items' => 'All Package',
        'add_new_item' => __("Add Package"),
        'edit_item' => __("Edit Package"),
        'new_item' => __("New Package"),
        'view_item' => __("View Package"),
        'search_items' => __("Search Package"),
        'not_found' =>  __('No Package Found'),
        'not_found_in_trash' => __('No Package found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $package_args = array(
        'labels' => $package_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),

        'menu_position' => 4,
        'show_ui' => true,

        'show_admin_column' => true,
    );
    register_post_type('package', $package_args);
}
add_action('init', 'package_post_type');
