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
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&family=Taviraj:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!------------------------ Fonts Ends ----------------------->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<!------------------------------------- Wrapper Starts ------------------------------------->

<?php
$ic_fb_link = do_shortcode('[get_site_value option=ic_fb_link]');
$ic_insta_link = do_shortcode('[get_site_value option=ic_insta_link]');
$ic_ta_link = do_shortcode('[get_site_value option=ic_ta_link]');

$ic_location = do_shortcode('[get_site_value option=ic_location]');
$ic_contact = do_shortcode('[get_site_value option=ic_contact]');
$ic_contact_office = do_shortcode('[get_site_value option=ic_contact_office]');
?>

<div id="wrapper">

    <!--------------------------------- Header Wrapper Starts ---------------------------------->


    <header id="mobile-wrapper">
        <div class="outer">
          <div class="common-header">
            <div class="custom-container">
              <div class="logo-cart-container">
                <div class="nav-container">
                  <ul>
                    <li onclick="openCartNav()">
                      <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_menu.svg"/>
                      </div>
                      Menu
                    </li>
                  </ul>
                </div>
                <div class="logo-container">
                  <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/Logo.svg">
                  </a>
                </div>
                <div class="side-widgets">
                  <div class="socials">
                    <ul>
                      <li>
                        <a href="<?php echo $ic_fb_link; ?>" target="_blank">
                          <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fb.svg" alt="">
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo $ic_insta_link; ?>" target="_blank">
                          <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_in.svg" alt="">
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo $ic_ta_link; ?>" target="_blank">
                          <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_ta.svg" alt="">
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="reservation">
                    <a href="#book-now">
                      <div class="flex-cont">
                        <div class="image-container">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_re.svg" alt="">
                        </div>
                        <div>
                          Book<br/>Now
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cart-nav-container">
            <div id="cartOverlay" class="" onclick="closeCartNav()">
            </div>
            <div id="cart-side-menu" class="cart-side-nav">
              <div id="cart-flexbox">
                <div class="common-header">
                  <div class="custom-container">
                    <div class="logo-cart-container">
                      <div class="nav-container">
                        <ul>
                          <li onclick="closeCartNav()">
                            <div class="image-container">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_close.svg"/>
                            </div>
                            Close
                          </li>
                        </ul>
                      </div>
                      <div class="logo-container">
                        <a href="<?php echo site_url(); ?>">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/LogoW.svg">
                        </a>
                      </div>
                      <div class="side-widgets">
                        <div class="reservation">
                          <a href="#book-now" onclick="closeCartNav()">
                            <div class="flex-cont">
                              <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_reW.svg" alt="">
                              </div>
                              <div>
                                Book<br/>Now
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flag">
                  <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_flag.svg" alt="">
                  </div>
                </div>
                <div class="nav-menu">
                  <div class="custom-container">
                    <div class="flex-cont">
                      <div class="flex-item">
                        <ul>
                          <li>
                            <h2><a href="<?php echo site_url(); ?>">Home</a></h2>
                          </li>
                          <li>
                            <h2><a href="<?php echo site_url(); ?>/about/">About Us</a></h2>
                          </li>
                          <li>
                            <h2><a href="<?php echo site_url(); ?>/news-blogs/">News & Blogs</a></h2>
                          </li>
                          <li>
                            <h2><a href="<?php echo site_url(); ?>/careers/">Career</a></h2>
                          </li>
                          <li>
                            <h2><a href="<?php echo site_url(); ?>/contact/">Contact Us</a></h2>
                          </li>
                        </ul>
                      </div>
                      <div class="flex-item">
                        <ul>
                          <li>
                            <h2><a href="<?php echo site_url(); ?>/our-brands/">Our Brands</a></h2>
                          </li>
                        </ul>
                        <ul class="sub-brands">
                          <li>
                            <a href="<?php echo get_the_permalink( 166 ); ?>">Lavie Garden</a>
                          </li>
                          <li>
                            <a href="<?php echo get_the_permalink( 172 ); ?>">Lavie Residence & Spa</a>
                          </li>
                          <li>
                            <a href="<?php echo get_the_permalink( 248 ); ?>">Lekali Bhoj Thakali</a>
                          </li>
                          <li>
                            <a href="<?php echo get_the_permalink( 250 ); ?>">Jigri Sekuwa</a>
                          </li>
                        </ul>
                        <div class="socials">
                          <ul>
                            <li>
                              <a href="<?php echo $ic_fb_link; ?>" target="_blank">
                                <div class="image-container">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fb.svg" alt="">
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="<?php echo $ic_insta_link; ?>" target="_blank">
                                <div class="image-container">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_in.svg" alt="">
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="<?php echo $ic_ta_link; ?>" target="_blank">
                                <div class="image-container">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_ta.svg" alt="">
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="quickinfos">
                          <ul>
                            <li>
                              <a>
                                <div class="flex-cont">
                                  <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_map.svg" alt="">
                                  </div>
                                  <?php echo $ic_location; ?>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="tel:<?php echo $ic_contact; ?>">
                                <div class="flex-cont">
                                  <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_call.svg" alt="">
                                  </div>
                                  <?php echo $ic_contact; ?>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="tel:<?php echo $ic_contact_office; ?>">
                                <div class="flex-cont">
                                  <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_phone.svg" alt="">
                                  </div>
                                  <?php echo $ic_contact_office; ?>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="stupa">
                      <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_stupa.webp" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="myID" class="bottomMenu hide">
          <div class="common-header">
            <div class="custom-container">
              <div class="logo-cart-container">
                <div class="nav-container">
                  <ul>
                    <li onclick="openCartNav()">
                      <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_menu.svg"/>
                      </div>
                      Menu
                    </li>
                  </ul>
                </div>
                <div class="for-reservation">
                  <div class="inner common-form type-black">
                    <?php echo do_shortcode('[contact-form-7 id="447" title="Header Form"]');?>
                    <!-- <?php echo do_shortcode('[contact-form-7 id="424" title="Untitled"]');?> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>

    <!---------------------------------- Header Wrapper Ends ----------------------------------->

    <!-------------------------------- Content Wrapper Starts ---------------------------------->
    <div id="content-wrapper">
