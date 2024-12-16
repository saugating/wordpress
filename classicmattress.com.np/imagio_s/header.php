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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1358cc6429.js" crossorigin="anonymous"></script>
    <!------------------------ Fonts Ends ----------------------->
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >

<!------------------------------------- Wrapper Starts ------------------------------------->
<div id="wrapper">
    <!-------------------------------------- Modal Starts -------------------------------------->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div id="video-container" class="video-container">
              <iframe id="youtubevideo" src="" width="640" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button id="close-video" type="button" class="button btn btn-default" data-dismiss="modal">
              <i class="fas fa-times" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--------------------------------------- Modal Ends --------------------------------------->

    <!--------------------------------- Header Wrapper Starts ---------------------------------->
    <header id="header-wrapper">
        <div class="custom-container">
          <div class="menu-nav-container">
            <ul>
              <li>
                <a href="#" onclick="openMenuNav()">
                  <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-menu.svg" alt="">
                  </div>
                  Menu</a>
              </li>
            </ul>
          </div>
          <div class="logo-container">
            <div class="image-container">
              <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/Logo.png" alt="">
              </a>
            </div>
          </div>
          <div class="nav-container">
            <ul>
              <li class="search-toggle">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-search.svg" alt="">
                </a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/contact-us/">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </header>

    <div class="menu-drawer-container">
        <div id="menuOverlay" class="" onclick="closeMenuNav()">
          <div class="menuBack">

          </div>
        </div>
        <div id="main-side-menu" class="menu-side-nav">
            <div id="menu-flexbox">
                <div class="custom-container">
                  <span onclick="closeMenuNav()" class="close-btn">&times;</span>
                  <div class="logo-container">
                    <div class="image-container">
                      <a href="index.php">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/Logo.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="block-container">
                    <div class="block-item">
                      <div class="section-container">
                        <div class="section-title">
                          <span>
                            Corporate Office
                          </span>
                          <h5>
                            Classic Industries PVT. LTD.
                          </h5>
                        </div>
                        <div class="section-body">
                          <ul>
                            <li>Kathmandu, Nepal</li>
                            <li>977-1-4377753 / 4371227</li>
                            <li>info@classicmattress.com.np</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="block=item">
                      <ul class="menu">
                        <li>
                          <a href="<?php echo site_url(); ?>/about-us/">Home</a>
                        </li>
                        <li>
                          <a class="mattress-btn">Mattress</a>
                        </li>
                        <li>
                          <a class="pillow-btn">Pillow</a>
                        </li>
                        <li>
                          <a class="quilt-btn">Quilts</a>
                        </li>
                        <li>
                          <a class="accessories-btn">Accessories</a>
                        </li>
                        <li>
                          <a href="<?php echo site_url(); ?>/contact-us/">Contact</a>
                        </li>
                        <li>
                          <a href="<?php echo site_url(); ?>/find-a-store/">Find A Store</a>
                        </li>
                        <li>
                          <a href="<?php echo site_url(); ?>/careers/">Careers</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="products-submenu">
                    <div class="product-mattress">
                      <div class="close-menu-pro" id="close-menu-mattress">
                        <i class="fa-solid fa-chevron-left"></i>Back
                      </div>
                      <ul>
                        <li>
                          <a>Mattress</a>
                        </li>
                        <li>
                          <a>Mattress</a>
                        </li>
                        <li>
                          <a>Mattress</a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-pillow">
                      <div class="close-menu-pro" id="close-menu-pillow">
                        <i class="fa-solid fa-chevron-left"></i>Back
                      </div>
                      <ul>
                        <li>
                          <a>Pillow</a>
                        </li>
                        <li>
                          <a>Pillow</a>
                        </li>
                        <li>
                          <a>Pillow</a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-quilt">
                      <div class="close-menu-pro" id="close-menu-quilt">
                        <i class="fa-solid fa-chevron-left"></i>Back
                      </div>
                      <ul>
                        <li>
                          <a>Quilts</a>
                        </li>
                        <li>
                          <a>Quilts</a>
                        </li>
                        <li>
                          <a>Quilts</a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-accessories">
                      <div class="close-menu-pro" id="close-menu-accessories">
                        <i class="fa-solid fa-chevron-left"></i>Back
                      </div>
                      <ul>
                        <li>
                          <a>Accessories</a>
                        </li>
                        <li>
                          <a>Accessories</a>
                        </li>
                        <li>
                          <a>Accessories</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

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
