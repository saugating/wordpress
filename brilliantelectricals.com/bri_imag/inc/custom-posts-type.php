<?php

function product_post_type(){
  $product_labels = array(
    'name' => _x('Product', 'post type general name'),
    'singular_name' => _x('product', 'post type singular name'),
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

function project_post_type(){
  $project_labels = array(
    'name' => _x('Project', 'post type general name'),
    'singular_name' => _x('project', 'post type singular name'),
    'add_new' => _x('Add New', 'Project'),
    'all_items' => 'All Project',
    'add_new_item' => __("Add Project"),
    'edit_item' => __("Edit Project"),
    'new_item' => __("New Project"),
    'view_item' => __("View Project"),
    'search_items' => __("Search Project"),
    'not_found' =>  __('No Project Found'),
    'not_found_in_trash' => __('No Project found in Trash'),
    'parent_item_colon' => 'Parent Item'
  );
  $project_args = array(
    'labels' => $project_labels,
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
  register_post_type('project', $project_args);
}
add_action('init', 'project_post_type');
