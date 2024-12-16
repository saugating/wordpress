<?php

// function brand_post_type(){
//   $brand_labels = array(
//     'name' => _x('Brand', 'post type general name'),
//     'singular_name' => _x('brand', 'post type singular name'),
//     'add_new' => _x('Add New', 'Brand'),
//     'all_items' => 'All Brands',
//     'add_new_item' => __("Add Brand"),
//     'edit_item' => __("Edit Brand"),
//     'new_item' => __("New Brand"),
//     'view_item' => __("View Brand"),
//     'search_items' => __("Search Brand"),
//     'not_found' =>  __('No Brand Found'),
//     'not_found_in_trash' => __('No Brand found in Trash'),
//     'parent_item_colon' => 'Parent Item'
//   );
//   $brand_args = array(
//     'labels' => $brand_labels,
//     'public' => true,
//     'has_archive' => true,
//     'publicly_queryable' => true,
//     'query_var' => true,
//     'rewrite' => true,
//     'capability_type' => 'post',
//     'hierarchical' => false,
//     'supports' => array(
//       'title',
//       'editor',
//       'thumbnail',
//       'revisions'
//     ),
//     'menu_position' => 4,
//     'show_ui' => true,
//     //'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
//     'show_admin_column' => true,
//   );
//   register_post_type('brand', $brand_args);
// }
// add_action('init', 'brand_post_type');

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

function review_post_type(){
  $review_labels = array(
    'name' => _x('Review', 'post type general name'),
    'singular_name' => _x('review', 'post type singular name'),
    'add_new' => _x('Add New', 'Review'),
    'all_items' => 'All Reviews',
    'add_new_item' => __("Add Review"),
    'edit_item' => __("Edit Review"),
    'new_item' => __("New Review"),
    'view_item' => __("View Review"),
    'search_items' => __("Search Review"),
    'not_found' =>  __('No Review Found'),
    'not_found_in_trash' => __('No Review found in Trash'),
    'parent_item_colon' => 'Parent Item'
  );
  $review_args = array(
    'labels' => $review_labels,
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
  register_post_type('review', $review_args);
}
add_action('init', 'review_post_type');

function review_custom_taxonomies(){
  $review_labels = array(
    'name' => 'Review Categories',
    'singular_name' => 'Review Category',
    'search_items' => 'Search Review Category',
    'all_items' => 'All Review Category',
    'parent_item' => 'Parent Review Category',
    'parent_item_colon'=>'Parent Review Category:',
    'edit_item' => 'Edit Review Category',
    'update_item' => 'Update Review Category',
    'add_new_item' => 'Add New Review Category',
    'add_new_name' => 'Add Review Category Name',
    'menu_name' => 'Review Category',
  );
  $review_args = array(
    'hierarchical' => true,
    'labels' => $review_labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'review_category'),
  );
  register_taxonomy('review_category', array('review'),$review_args);
}
add_action('init', 'review_custom_taxonomies');

function career_post_type(){
  $career_labels = array(
    'name' => _x('Career', 'post type general name'),
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
