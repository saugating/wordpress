<?php

/*!------------------------------------- Version Starts -----------------------------------*/
if ( ! defined( '_I_VERSION' ) ) {
    define( '_I_VERSION', '1.0.5' );
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
    wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), false, true);
    wp_enqueue_script( 'gsap');
    wp_register_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array(), false, true);
    wp_enqueue_script( 'scrolltrigger');
    wp_register_style('slick', get_stylesheet_directory_uri() . '/css/bowercomponent/slick.css', array(), _I_VERSION);
    wp_enqueue_style( 'slick');
    wp_register_style('slick-theme', get_stylesheet_directory_uri() . '/css/bowercomponent/slick-theme.css', array(), _I_VERSION);
    wp_enqueue_style( 'slick-theme');
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
    /******** Components Ends **********/
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'slick.min-js', get_stylesheet_directory_uri() . '/js/bowercomponent/slick.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'lightbox.min-js', get_stylesheet_directory_uri() . '/js/bowercomponent/lightbox.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'in-view.min-js', get_stylesheet_directory_uri() . '/js/bowercomponent/in-view.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'jquery.animateNumber.min-js', get_stylesheet_directory_uri() . '/js/bowercomponent/jquery.animateNumber.min.js', array('jquery'), false, true );
    /******* Components Starts *********/
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/thescripts.js', array('jquery'), _I_VERSION);
    wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), _I_VERSION);
}
add_action('wp_enqueue_scripts', 'thescripts');
/*!---------------------------------------- Js Ends ---------------------------------------*/



/*!---------------------------- Navigation Registration Starts ----------------------------*/
register_nav_menus(
    array(
        'right_menu'  => 'Right Menu',
        'footer_menu' => 'Footer Menu',
    )
);
/*!----------------------------- Navigation Registration Ends -----------------------------*/


/*!----------------------------------- Thumbnail Size Ends --------------------------------*/
add_image_size('section_image', 1920, 1080, true);
add_image_size('custom_blog_image', 1280, 720, true);
add_image_size('gallery_thumb', 500, 350, true);
add_image_size('custom_blog_thumb', 250, 250, true);
/*!----------------------------------- Thumbnail Size Ends --------------------------------*/

/*---------------------- SVG Upload -------------------------------*/
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
/*---------------------- SVG Upload Ends-------------------------------*/
