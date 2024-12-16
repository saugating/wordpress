<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!------------------------ Meta Starts ---------------------->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" type="image/x-icon" href="">

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <!------------------------- Meta Ends ----------------------->

    <!----------------------- Fonts Starts ---------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!------------------------ Fonts Ends ----------------------->
    <?php wp_head(); ?>

    <?php
    $ic_fb_link = do_shortcode('[get_site_value option=ic_fb_link]');
    $ic_insta_link = do_shortcode('[get_site_value option=ic_insta_link]');
    $ic_tw_link = do_shortcode('[get_site_value option=ic_tw_link]');
    $ic_location = do_shortcode('[get_site_value option=ic_location]');
    $ic_contact = do_shortcode('[get_site_value option=ic_contact]');
    ?>

</head>

<body <?php body_class(); ?> >

<!------------------------------------- Wrapper Starts ------------------------------------->

<div id="wrapper">

  <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="close-modal">
          <h4>Book an Appointment</h4> <span data-dismiss="modal" class="material-symbols-sharp">close</span>
        </div>
        <div class="section-container">
          <div class="common-form">
            <div class="fields">
              <div class="form-group">
                <input type="text" placeholder="Full Name">
              </div>
              <div class="form-group">
                <input type="text" placeholder="Contact Number">
              </div>
              <div class="form-group">
                <input type="email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <textarea placeholder="Message"></textarea>
              </div>
            </div>
            <div class="form-action">
              <button type="button" name="button" class="co-btn type-fill">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--------------------------------- Header Wrapper Starts ---------------------------------->

    <header id="header-wrapper">
      <div class="top-wrapper">
        <div class="custom-container remove-top-bottom-padding">
          <ul class="info-widget">
            <li>
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/info-location.svg" alt="">
              </div>
              <?php echo $ic_location; ?>
            </li>
            <li>
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/info-phone.svg" alt="">
              </div>
              <a href="tel:<?php echo $ic_contact; ?>"><?php echo $ic_contact; ?></a>
            </li>
          </ul>
          <ul class="social-widget">
            <li>
              <a href="<?php echo $ic_fb_link; ?>" target="_blank">
                <div class="image-container">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-facebook.svg" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo $ic_tw_link; ?>" target="_blank">
                <div class="image-container">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-twitter.svg" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo $ic_insta_link; ?>" target="_blank">
                <div class="image-container">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-instagram.svg" alt="">
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="custom-container">
        <div class="logo-wrapper">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/LogoH.webp" alt="">
          </a>
        </div>
        <div class="nav-bar">
          <div class="close-menu">
            <span class="material-symbols-sharp">
              close
            </span>
          </div>
          <!-- <?php
          wp_nav_menu(array(
              'theme_location'    => 'main_menu',
              'depth'             => 4,

          ));
          ?> -->
          <ul>
            <li>
              <a href="<?php echo site_url(); ?>/">Home</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/about/">About</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/services/">Services</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/blogs/">Blogs</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a>
            </li>
          </ul>
          <ul>
            <li>
              <a href="#" data-toggle="modal" data-target="#bookingModal">Appointment</a>
            </li>
          </ul>
        </div>
        <div class="mobile-toggle">
          <span class="material-symbols-sharp">
            menu
          </span>
        </div>
      </div>
    </header>

    <!---------------------------------- Header Wrapper Ends ----------------------------------->

    <!-------------------------------- Content Wrapper Starts ---------------------------------->
    <div id="content-wrapper">
