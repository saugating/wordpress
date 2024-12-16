<?php
/**
 * Created by PhpStorm.
 * User: Sushant Gauchan
 * Date: 2/26/2018
 * Time: 5:07 PM
 */

function values_post_type(){
    $values_labels = array(
        'name' => _x('Values', 'post type general name'),
        'singular_name' => _x('value', 'post type singular name'),
        'add_new' => _x('Add New', 'Value'),
        'all_items' => 'All Values',
        'add_new_item' => __("Add Value"),
        'edit_item' => __("Edit Value"),
        'new_item' => __("New Value"),
        'view_item' => __("View Value"),
        'search_items' => __("Search Value"),
        'not_found' =>  __('No Value Found'),
        'not_found_in_trash' => __('No Value found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $values_args = array(
        'labels' => $values_labels,
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
            // 'excerpt',
            'thumbnail',
            'revisions'
        ),
        /*'taxonomies' => array('category','post_tag'),*/
        'menu_position' => 4,
        'show_ui' => true,
        //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
        'show_admin_column' => true,
    );
    register_post_type('values', $values_args);
}
add_action('init', 'values_post_type');

function crafts_post_type(){
    $crafts_labels = array(
        'name' => _x('Crafts', 'post type general name'),
        'singular_name' => _x('craft', 'post type singular name'),
        'add_new' => _x('Add New', 'Craft'),
        'all_items' => 'All Crafts',
        'add_new_item' => __("Add Craft"),
        'edit_item' => __("Edit Craft"),
        'new_item' => __("New Craft"),
        'view_item' => __("View Craft"),
        'search_items' => __("Search Craft"),
        'not_found' =>  __('No Craft Found'),
        'not_found_in_trash' => __('No Craft found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $crafts_args = array(
        'labels' => $crafts_labels,
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
            // 'excerpt',
            'thumbnail',
            'revisions'
        ),
        /*'taxonomies' => array('category','post_tag'),*/
        'menu_position' => 4,
        'show_ui' => true,
        //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
        'show_admin_column' => true,
    );
    register_post_type('crafts', $crafts_args);
}
add_action('init', 'crafts_post_type');

function products_post_type(){
    $products_labels = array(
        'name' => _x('Products', 'post type general name'),
        'singular_name' => _x('products', 'post type singular name'),
        'add_new' => _x('Add New', 'products'),
        'all_items' => 'All Products',
        'add_new_item' => __("Add Products"),
        'edit_item' => __("Edit Products"),
        'new_item' => __("New Products"),
        'view_item' => __("View Products"),
        'search_items' => __("Search Products"),
        'not_found' =>  __('No Products Found'),
        'not_found_in_trash' => __('No Products found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $products_args = array(
        'labels' => $products_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'thumbnail'
        ),
        /*'taxonomies' => array('category','post_tag'),*/
        'menu_position' => 4,
        'show_ui' => true,
        //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
        'show_admin_column' => true,
    );
    register_post_type('products', $products_args);
}
add_action('init', 'products_post_type');

function modals_post_type(){
    $modals_labels = array(
        'name' => _x('Modals', 'post type general name'),
        'singular_name' => _x('modals', 'post type singular name'),
        'add_new' => _x('Add New', 'modals'),
        'all_items' => 'All Modals',
        'add_new_item' => __("Add Modal"),
        'edit_item' => __("Edit Modal"),
        'new_item' => __("New Modal"),
        'view_item' => __("View Modal"),
        'search_items' => __("Search Modal"),
        'not_found' =>  __('No Modal Found'),
        'not_found_in_trash' => __('No Modal found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $modals_args = array(
        'labels' => $modals_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'thumbnail'
        ),
        /*'taxonomies' => array('category','post_tag'),*/
        'menu_position' => 4,
        'show_ui' => true,
        //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
        'show_admin_column' => true,
    );
    register_post_type('modals', $modals_args);
}
add_action('init', 'modals_post_type');

function aboutgallery_post_type(){
    $aboutgallery_labels = array(
        'name' => _x('About Gallery', 'post type general name'),
        'singular_name' => _x('aboutgallery', 'post type singular name'),
        'add_new' => _x('Add New', 'About Gallery'),
        'all_items' => 'About Gallery',
        'add_new_item' => __("Add About Gallery"),
        'edit_item' => __("Edit About Gallery"),
        'new_item' => __("New About Gallery"),
        'view_item' => __("View About Gallery"),
        'search_items' => __("Search About Gallery"),
        'not_found' =>  __('No About Gallery Found'),
        'not_found_in_trash' => __('No About Gallery found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $aboutgallery_args = array(
        'labels' => $aboutgallery_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'thumbnail'
        ),
        /*'taxonomies' => array('category','post_tag'),*/
        'menu_position' => 4,
        'show_ui' => true,
        //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
        'show_admin_column' => true,
    );
    register_post_type('aboutgallery', $aboutgallery_args);
}
add_action('init', 'aboutgallery_post_type');

function craftgallery_post_type(){
    $craftgallery_labels = array(
        'name' => _x('Craft Gallery', 'post type general name'),
        'singular_name' => _x('craftgallery', 'post type singular name'),
        'add_new' => _x('Add New', 'About Craft'),
        'all_items' => 'About Craft',
        'add_new_item' => __("Add About Craft"),
        'edit_item' => __("Edit About Craft"),
        'new_item' => __("New About Craft"),
        'view_item' => __("View About Craft"),
        'search_items' => __("Search About Craft"),
        'not_found' =>  __('No About Craft Found'),
        'not_found_in_trash' => __('No About Craft found in Trash'),
        'parent_item_colon' => 'Parent Item'
    );
    $craftgallery_args = array(
        'labels' => $craftgallery_labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'thumbnail'
        ),
        /*'taxonomies' => array('category','post_tag'),*/
        'menu_position' => 4,
        'show_ui' => true,
        //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
        'show_admin_column' => true,
    );
    register_post_type('craftgallery', $craftgallery_args);
}
add_action('init', 'Craftgallery_post_type');
