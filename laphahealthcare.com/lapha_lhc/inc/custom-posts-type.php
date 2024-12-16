<?php

function service_post_type(){
  $service_labels = array(
    'name' => _x('Services', 'post type general name'),
    'singular_name' => _x('service', 'post type singular name'),
    'add_new' => _x('Add New', 'Service'),
    'all_items' => 'All Services',
    'add_new_item' => __("Add Service"),
    'edit_item' => __("Edit Service"),
    'new_item' => __("New Service"),
    'view_item' => __("View Service"),
    'search_items' => __("Search Service"),
    'not_found' =>  __('No Service Found'),
    'not_found_in_trash' => __('No Service found in Trash'),
    'parent_item_colon' => 'Parent Item'
  );
  $service_args = array(
    'labels' => $service_labels,
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
  register_post_type('service', $service_args);
}
add_action('init', 'service_post_type');

function package_post_type(){
  $package_labels = array(
    'name' => _x('Packages', 'post type general name'),
    'singular_name' => _x('package', 'post type singular name'),
    'add_new' => _x('Add New', 'Package'),
    'all_items' => 'All Packages',
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
      'thumbnail',
      'revisions'
    ),
    'menu_position' => 4,
    'show_ui' => true,
    //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
    'show_admin_column' => true,
  );
  register_post_type('package', $package_args);
}
add_action('init', 'package_post_type');

function gallery_post_type(){
  $gallery_labels = array(
    'name' => _x('Gallery', 'post type general name'),
    'singular_name' => _x('gallery', 'post type singular name'),
    'add_new' => _x('Add New', 'Gallery'),
    'all_items' => 'All Galleries',
    'add_new_item' => __("Add Gallery"),
    'edit_item' => __("Edit Gallery"),
    'new_item' => __("New Gallery"),
    'view_item' => __("View Gallery"),
    'search_items' => __("Search Gallery"),
    'not_found' =>  __('No Gallery Found'),
    'not_found_in_trash' => __('No Gallery found in Trash'),
    'parent_item_colon' => 'Parent Item'
  );
  $gallery_args = array(
    'labels' => $gallery_labels,
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
  register_post_type('gallery', $gallery_args);
}
add_action('init', 'gallery_post_type');

function team_post_type(){
  $team_labels = array(
    'name' => _x('Team', 'post type general name'),
    'singular_name' => _x('team', 'post type singular name'),
    'add_new' => _x('Add New', 'Team'),
    'all_items' => 'All Teams',
    'add_new_item' => __("Add Team"),
    'edit_item' => __("Edit Team"),
    'new_item' => __("New Team"),
    'view_item' => __("View Team"),
    'search_items' => __("Search Team"),
    'not_found' =>  __('No Team Found'),
    'not_found_in_trash' => __('No Team found in Trash'),
    'parent_item_colon' => 'Parent Item'
  );
  $team_args = array(
    'labels' => $team_labels,
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
  register_post_type('team', $team_args);
}
add_action('init', 'team_post_type');
