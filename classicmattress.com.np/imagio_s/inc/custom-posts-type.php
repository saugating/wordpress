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

 function product_post_type(){
   $product_labels = array(
     'name' => _x('Product Post', 'post type general name'),
     'singular_name' => _x('Product', 'post type singular name'),
     'add_new' => _x('Add New', 'Product'),
     'all_items' => 'All Product',
     'add_new_item' => __("Add Product"),
     'edit_item' => __("Edit Product"),
     'new_item' => __("New Product"),
     'view_item' => __("View Product"),
     'search_items' => __("Search Product"),
     'not_found' =>  __('No Product Found'),
     'not_found_in_trash' => __('No Product found in Trash'),
     'parent_item_colon' => 'Parent Item'
   );
   $product_args = array(
     'labels' => $product_labels,
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
       'thumbnail',
       'revisions'
     ),

     'menu_position' => 4,
     'show_ui' => true,

     'show_admin_column' => true,
   );
   register_post_type('product', $product_args);
 }
 add_action('init', 'product_post_type');

 function product_custom_taxonomies(){
   $product_labels = array(
     'name' => 'Product Categories',
     'singular_name' => 'Product Category',
     'search_items' => 'Search Product Category',
     'all_items' => 'All Product Category',
     'parent_item' => 'Parent Product Category',
     'parent_item_colon'=>'Parent Product Category:',
     'edit_item' => 'Edit Product Category',
     'update_item' => 'Update Product Category',
     'add_new_item' => 'Add New Product Category',
     'add_new_name' => 'Add Product Category Name',
     'menu_name' => 'Product Category',
   );
   $product_args = array(
     'hierarchical' => true,
     'labels' => $product_labels,
     'show_ui' => true,
     'show_admin_column' => true,
     'query_var' => true,
     'rewrite' => array('slug' => 'product_category'),
   );
   register_taxonomy('product_category', array('product'),$product_args);
 }
 add_action('init', 'product_custom_taxonomies');

 function career_post_type(){
   $career_labels = array(
     'name' => _x('Career Post', 'post type general name'),
     'singular_name' => _x('career', 'post type singular name'),
     'add_new' => _x('Add New', 'Career'),
     'all_items' => 'All Careers',
     'add_new_item' => __("Add Career"),
     'edit_item' => __("Edit Career"),
     'new_item' => __("New Career"),
     'view_item' => __("View Career"),
     'search_items' => __("Search Career"),
     'not_found' =>  __('No Career Found'),
     'not_found_in_trash' => __('No Career found in Trash'),
     'parent_item_colon' => 'Parent Item'
   );
   $career_args = array(
     'labels' => $career_labels,
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
       'thumbnail',
       'revisions'
     ),
     'menu_position' => 4,
     'show_ui' => true,
     //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
     'show_admin_column' => true,
   );
   register_post_type('career', $career_args);
 }
 add_action('init', 'career_post_type');

 function about_post_type(){
   $about_labels = array(
     'name' => _x('About Post', 'post type general name'),
     'singular_name' => _x('about', 'post type singular name'),
     'add_new' => _x('Add New', 'About'),
     'all_items' => 'All Abouts',
     'add_new_item' => __("Add About"),
     'edit_item' => __("Edit About"),
     'new_item' => __("New About"),
     'view_item' => __("View About"),
     'search_items' => __("Search About"),
     'not_found' =>  __('No About Found'),
     'not_found_in_trash' => __('No About found in Trash'),
     'parent_item_colon' => 'Parent Item'
   );
   $about_args = array(
     'labels' => $about_labels,
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
       'thumbnail',
       'revisions'
     ),
     'menu_position' => 4,
     'show_ui' => true,
     //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
     'show_admin_column' => true,
   );
   register_post_type('about', $about_args);
 }
 add_action('init', 'about_post_type');

 function office_post_type(){
   $office_labels = array(
     'name' => _x('Office Post', 'post type general name'),
     'singular_name' => _x('office', 'post type singular name'),
     'add_new' => _x('Add New', 'Office'),
     'all_items' => 'All Offices',
     'add_new_item' => __("Add Office"),
     'edit_item' => __("Edit Office"),
     'new_item' => __("New Office"),
     'view_item' => __("View Office"),
     'search_items' => __("Search Office"),
     'not_found' =>  __('No Office Found'),
     'not_found_in_trash' => __('No Office found in Trash'),
     'parent_item_colon' => 'Parent Item'
   );
   $office_args = array(
     'labels' => $office_labels,
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
       'thumbnail',
       'revisions'
     ),
     'menu_position' => 4,
     'show_ui' => true,
     //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
     'show_admin_column' => true,
   );
   register_post_type('office', $office_args);
 }
 add_action('init', 'office_post_type');
