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
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!------------------------ Fonts Ends ----------------------->
    <?php wp_head(); ?>

    <?php
    $ic_fb_link = do_shortcode('[get_site_value option=ic_fb_link]');
    $ic_insta_link = do_shortcode('[get_site_value option=ic_insta_link]');
    $ic_location = do_shortcode('[get_site_value option=ic_location]');
    $ic_contact = do_shortcode('[get_site_value option=ic_contact]');
    $ic_email = do_shortcode('[get_site_value option=ic_email]');
    ?>

</head>

<body <?php body_class(); ?> >

<!------------------------------------- Wrapper Starts ------------------------------------->

<div id="wrapper">
    <!--------------------------------- Header Wrapper Starts ---------------------------------->

    <header id="header-wrapper">
      <div class="top-wrapper">
        <div class="custom-container">
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
            <li>
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/info-mail.svg" alt="">
              </div>
              <a href="mailto:<?php echo $ic_email; ?>"><?php echo $ic_email; ?></a>
            </li>
          </ul>
          <ul class="social-widget">
            <li>
              <a href="<?php echo $ic_fb_link; ?>" target="_blank">
                <div class="image-container">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-facebook.svg" alt="">
                </div>
                Facebook
              </a>
            </li>
            <li>
              <a href="<?php echo $ic_insta_link; ?>" target="_blank">
                <div class="image-container">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-instagram.svg" alt="">
                </div>
                Instagram
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="menu-wrapper">
        <div class="custom-container">
          <div class="back-wrapper">
            <div class="logo-wrapper">
              <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/Logo.svg" alt="">
              </a>
            </div>
            <div class="nav-bar">
              <div class="close-menu">
                <span class="material-symbols-sharp">
                  close
                </span>
              </div>
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/about/">About</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/products/">Products</a>
                </li>
              </ul>
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/projects/">Projects</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/contact-us/">Contact</a>
                </li>
                <!-- <li class="search-toggle"> -->
              </ul>
            </div>
            <div class="mobile-toggle">
              <span class="material-symbols-sharp">
                menu
              </span>
            </div>
          </div>
        </div>
      <div>
    </header>

    <div id="search-wrapper" style="">
        <div class="search-container">
            <div class="custom-container">
                <div id="search" class="fields">
                  <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
                    <div class="form-action">
                      <button class="co-btn" type="submit" value="Search">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-search.svg" alt="">
                      </button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="close-container">
            <div class="custom-container">
                <ul class="search-close">
                    <li>Close</li>
                </ul>
            </div>
        </div>
    </div>

    <!---------------------------------- Header Wrapper Ends ----------------------------------->

    <!-------------------------------- Content Wrapper Starts ---------------------------------->
    <div id="content-wrapper">
