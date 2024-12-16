<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!------------------------ Meta Starts ---------------------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <meta property="og:title" content="Rupa Maker" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://rupamaker.com/" />
    <meta property="og:site_name" content="Rupa Maker" />
    <meta property="og:image" content="https://rupamaker.com/wp-content/uploads/2021/12/Capture.jpg" />
    <meta property="og:image:alt" content="Rupa Maker">
    <meta property="og:description" content="We offer a wide range of selection of statues based on the designs, sizes and styles. Made from copper metal and finished either in gold-plating, silver-plating or copper oxidation.">
    <!------------------------- Meta Ends ----------------------->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G0JP7336YP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-G0JP7336YP');
    </script>

    <!----------------------- Fonts Starts ---------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
    <!------------------------ Fonts Ends ----------------------->
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <!------------------------------------- Wrapper Starts ------------------------------------->
    <div id="wrapper">
        <!-------------------------------------- Modal Starts -------------------------------------->
        <div id="historyModal" class="modal fade type-login-signup" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="flaticon-cancel"></i>
                </button>
                  <div class="modal-body">
                    <?php query_posts('post_type=history&posts_per_page=1'); while(have_posts()): the_post(); ?>
                    <div class="section-container center">
                      <div class="image-container">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="section-title">
                        <h1><?php echo the_title(); ?></h1>
                      </div>
                      <div class="section-body type-mid">
                        <p>
                          <?php the_field('history_intro'); ?>
                        </p>
                      </div>
                      <div class="section-body">
                        <div class="image-container">
                          <img src="<?php the_field('banner_image'); ?>" alt=""/>
                        </div>
                      </div>
                      <div class="section-body type-mid justify">
                        <p>
                          <?php the_field('history_content'); ?>
                        </p>
                      </div>
                      <div class="section-body">
                        <div class="block-container c2">
                          <div class="block-item">
                            <div class="image-container">
                              <img src="<?php the_field('history_image_first'); ?>" alt=""/>
                            </div>
                          </div>
                          <div class="block-item">
                            <div class="image-container">
                              <img src="<?php the_field('history_image_second'); ?>" alt=""/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="section-body type-mid justify">
                        <?php the_field('history_content_last'); ?>
                      </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
              </div>
          </div>
        </div>
        <!--------------------------------------- Modal Ends --------------------------------------->

        <!--------------------------------- Header Wrapper Starts ---------------------------------->
        <header id="header-wrapper">

          <div class="custom-container remove-top-bottom-padding">
              <div class="logo-nav-wrapper">
                  <div class="mobile-toggle">
                    <div class="image-container">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-menu.svg" alt="" onclick="openMenuNav()">
                    </div>
                  </div>
                  <div class="logo-container">
                      <a href="<?php echo site_url(); ?>">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/LogoG.png">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/LogoText.png">
                      </a>
                  </div>
                  <div class="nav-container">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'right_menu',
                        'depth'             => 4,

                    ));
                    ?>
                  </div>
              </div>
          </div>

        </header>

        <div class="menu-nav-container">
            <div id="menuOverlay" class="" onclick="closeMenuNav()">
              <div class="menuBack">

              </div>
            </div>
            <div id="main-side-menu" class="menu-side-nav">
                <div id="menu-flexbox">
                    <div class="shopping-cart">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'footer_menu',
                            'depth'             => 4,

                        ));
                        ?>
                        <span onclick="closeMenuNav()" class="close-btn">&times;</span>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------- Header Wrapper Ends ----------------------------------->



        <!-------------------------------- Content Wrapper Starts ---------------------------------->
        <div id="content-wrapper">
