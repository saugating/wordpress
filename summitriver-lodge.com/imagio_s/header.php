<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SQD059GM4J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SQD059GM4J');
</script>
    <!------------------------ Meta Starts ---------------------->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" type="image/x-icon" href="https://summitriver-lodge.com/wp-content/themes/starter/imagio_s/img/logo/summit_icon.ico">

    <meta property="og:title" content="Summit River Lodge - Kurintar"/>
    <meta property="og:image" content="https://summitriver-lodge.com/wp-content/themes/starter/imagio_s/img/background/meta_image.jpg"/>
    <meta property="og:image:alt" content="Summit River Lodge - Kurintar">
    <meta property="og:description" content="Summit River Lodge is a eco-friendly oasis located in the countryside, between Kathmandu and Pokhara . With just 16 rooms, and over 20,000 square feet of nature, enjoy the luscious environment of the mid-hills of Nepal in the peaceful abode we have built over years.">
    <!------------------------- Meta Ends ----------------------->


    <!----------------------- Fonts Starts ---------------------->
    <script src="https://kit.fontawesome.com/1358cc6429.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <!------------------------ Fonts Ends ----------------------->


    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?> >

<!------------------------------------- Wrapper Starts ------------------------------------->
<div id="wrapper">

    <!-------------------------------------- Modal Starts -------------------------------------->
    <div id="enquiryModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="flaticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-loading-area">
                        <div class="title">
                            <h4>For Queries & Reservations</h4>
                        </div>
                        <div class="content">
                            <div class="common-form">
                                <?php echo do_shortcode('[contact-form-7 id="229" title="Enquire"]')?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------- Modal Ends --------------------------------------->



    <!--------------------------------- Header Wrapper Starts ---------------------------------->
    <header id="header-wrapper">
        <div class="custom-container type-header">
            <div class="logo-toggle-wrapper">
                <div class="toggle-container">
                    <div class="common-toggle type-login">
                        <div class="inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="logo-container">
                    <a href="<?php echo site_url(); ?>">
                        <span>Summit</span> River Lodge
                        <!--<img src="img/logo/logo.png">-->
                    </a>
                </div>

                <div class="inquire-container">
                    <div class="inquire-item">
                        <a href="#" class="co-btn type-border invert open-enquiry">
                            Enquire Now
                        </A>
                    </div>
                    <div class="inquire-item">
                        <i class="far fa-envelope open-enquiry"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="navigation-wrapper">
        <div class="navigation-wrapper-inner">
            <div class="nav-header">
                <div class="custom-container type-header">
                    <div class="common-toggle type-logout toggle-active">
                        <div class="inner">
                            <i class="flaticon-close"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-body">
                <div class="custom-container medium-width-container">
                    <div class="block-container">
                        <div class="block-item">
                            <div class="nav-container">
                                <!--<ul>
                                    <li picindex="0"><a href="our_sory_page.php">Our Story</a></li>
                                    <li picindex="1"><a href="room_page.php">Accommodation</a></li>
                                    <li picindex="2"><a href="dining_page.php">Dining</a></li>
                                    <li picindex="3"><a href="experiences_page.php">Experiences</a></li>
                                    <li picindex="4"><a href="gallery_page.php">Gallery</a></li>
                                    <li picindex="5"><a href="contact_page.php">Contact</a></li>
                                </ul>-->
                                <?php

                                wp_nav_menu( array(
                                        'theme_location'    => 'main_menu',
                                        'depth'             => 3,
                                        'container'         => 'nav',
                                    )
                                );

                                ?>
                            </div>
                        </div>

                        <div class="block-item">
                            <div class="nav-image-container">
                                <div class="image-item">
                                    <div class="inner">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner_1.jpg">
                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="inner">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rooms/river_suite_1.jpg">
                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="inner">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner_4.jpg">
                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="inner">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/activities/act_1.jpg">
                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="inner">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner_3.jpg">
                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="inner">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner_5.jpg">
                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="inner">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner_5.jpg">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="svg-container">
                        <svg width="1440" height="432" viewBox="0 0 1440 432" fill="none" xmlns="http://www.w3.org/2000/svg" class="line">
                            <path opacity="0.2" d="M-114 337C-114 337 248 531 512 362C706.537 237.467 747.5 191.5 975 217C1202.5 242.5 1444.5 86 1452.5 1" stroke="#fff"></path>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!---------------------------------- Header Wrapper Ends ----------------------------------->


    <!--<div class="whatsapp">
        <i class="fab fa-whatsapp"></i>
    </div>-->

    <!-------------------------------- Content Wrapper Starts ---------------------------------->
    <div id="content-wrapper">
