<?php

/*!------------------------------------- Version Starts -----------------------------------*/
if ( ! defined( '_I_VERSION' ) ) {
  define( '_I_VERSION', '1.0.1' );
}
/*!-------------------------------------- Version Ends ------------------------------------*/

/*!------------------------------------ Includes Starts -----------------------------------*/
include 'inc/custom-posts-type.php';
include 'inc/site-settings.php';
/*!------------------------------------- Includes Ends ------------------------------------*/

/*!------------------------------------- Styles Starts ------------------------------------*/
function theme_stylesheets()
{
  /******** Components Ends **********/
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), _I_VERSION);
  wp_enqueue_style( 'bootstrap');
  wp_register_style('slick', get_stylesheet_directory_uri() . '/css/bowercomponent/slick.css', array(), _I_VERSION);
  wp_enqueue_style( 'slick');
  wp_register_style('slick-theme', get_stylesheet_directory_uri() . '/css/bowercomponent/slick-theme.css', array(), _I_VERSION);
  wp_enqueue_style( 'slick-theme');
  wp_register_style('lightbox', get_stylesheet_directory_uri() . '/css/bowercomponent/lightbox.min.css', array(), _I_VERSION);
  wp_enqueue_style( 'lightbox');
  /******* Components Starts *********/

  /********** Site Starts ***********/
  wp_register_style('global', get_stylesheet_directory_uri() . '/css/global.min.css', array(), _I_VERSION);
  wp_enqueue_style( 'global');
  wp_register_style('thestyles', get_stylesheet_directory_uri() . '/css/thestyles.min.css', array(), _I_VERSION);
  wp_enqueue_style( 'thestyles');
  wp_register_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.min.css', array(), _I_VERSION);
  wp_enqueue_style( 'responsive');
  /*********** Site Ends ************/
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');
/*!-------------------------------------- Styles Ends -------------------------------------*/

/*!--------------------------------------- Js Starts --------------------------------------*/
function thescripts()
{
  /******** Components Starts **********/
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), false, true );
  wp_enqueue_script( 'slick.min-js', get_stylesheet_directory_uri() . '/js/bowercomponent/slick.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'lightbox.min-js', get_stylesheet_directory_uri() . '/js/bowercomponent/lightbox.min.js', array('jquery'), false, true );
  /******* Components Ends *********/
  wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/thescripts.js', array('jquery'), _I_VERSION);
}
add_action('wp_enqueue_scripts', 'thescripts');
/*!---------------------------------------- Js Ends ---------------------------------------*/

/*!---------------------------- Navigation Registration Starts ----------------------------*/
register_nav_menus(
  array(
    'main_menu' => 'Main Menu',
  )
);
/*!----------------------------- Navigation Registration Ends -----------------------------*/

/*!----------------------------------- Thumbnail Size Ends --------------------------------*/
add_image_size('image_large', 1500);
add_image_size('image_med', 1280);
add_image_size('image_small', 720);
add_image_size('image_thumb', 480);
/*!----------------------------------- Thumbnail Size Ends --------------------------------*/

/*---------------------- SVG Upload -------------------------------*/
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
/*---------------------- SVG Upload Ends---------------------------*/
