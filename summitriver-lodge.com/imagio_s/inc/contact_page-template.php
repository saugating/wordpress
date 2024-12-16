<?php

/**
 * Template Name: Contact Us Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 */

$postid = get_the_ID();

get_header();
$ic_area                = do_shortcode('[get_site_value option=ic_area]');
$ic_city                = do_shortcode('[get_site_value option=ic_city]');
$ic_contact_no          = do_shortcode('[get_site_value option=ic_contact_no]');
$ic_contact_no1          = do_shortcode('[get_site_value option=ic_contact_no1]');
$ic_contact_no2          = do_shortcode('[get_site_value option=ic_contact_no2]');
$ic_lodgecontact_no      = do_shortcode('[get_site_value option=ic_lodgecontact_no]');
$ic_contact_email       = do_shortcode('[get_site_value option=ic_contact_email]');
$ic_contact_person      = do_shortcode('[get_site_value option=ic_contact_person]');
$ic_fb_link             = do_shortcode('[get_site_value option=ic_fb_link]');
$ic_insta_link          = do_shortcode('[get_site_value option=ic_insta_link]');
$ic_google_map_link_cb  = do_shortcode('[get_site_value option=ic_google_map_link_cb]');
?>

<div id="contact-page">
    <p style="pointer-events: none; opacity: 0; position: absolute; top: 0">Inspired by nature’s best, Barahsinghe (Barahsinghe Eight Dutch Malts )is the perfect embodiment of nature and technology working in harmony. We know beer tastes best when all its ingredients come from the heart of nature, and the beer that tastes good only feels good when brewed with the very nature’s wellbeing in mind.</p>
    <p style="pointer-events: none; opacity: 0; position: absolute; top: 0">Barahsinghe Pilsner beer uses a combination of three malts, Pilsner malt, Vienna malt and Aromatic caramel malt. Pilsner malt gives the beer its malty-sweet flavor with gentle notes of honey while Vienna Malt exhibits the rich orange colour with a toasty or biscuity malt aroma to the beer and gives it’s dry yet refreshing finish. Aromatic caramel malt further adds a stronger “caramely” flavor, hinting of a light cream toffee, nut and honey while adding a correspondingly darker color. Each malt is knilled at a different temperature to elaborate its crafty nature.</p>
    <p style="pointer-events: none; opacity: 0; position: absolute; top: 0">It is a bottom-fermenting beer, which means the fermenting takes place at the wort’s bottom. It is also a dry hopped beer which means additional hops are added during fermentation rather than during mashing. Amongst all our beers, Pilsner takes the longest time to ferment</p>

    <div class="common-element-container">
        <div class="element-item type-bush">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/elements/element_1.png">
        </div>
    </div>

    <section class="contact-section common-relative">
        <div class="custom-container remove-bottom-padding remove-right-padding">
            <div class="section-content co">
                <div class="block-container">
                    <div class="block-item">
                        <div class="section-title">
                            <div class="floating-container">
                                <h5 class="large-font">Contact Us</h5>
                            </div>
                            <h1>Stay In  Touch</h1>
                            <div class="content">
                                <p>Thanks for getting in touch with us, Feel free to contact us any time.</p>
                            </div>
                        </div>

                        <div class="location-container">
                            <div class="location-item">
                                <div class="title">
                                    <h6>Location</h6>
                                </div>
                                <div class="content">
                                    <ul>
                                        <?php
                                        if(!empty($ic_area)){
                                            echo '<li>'. $ic_area.'</li>';
                                        }
                                        ?>
                                        <?php
                                        if(!empty($ic_city)){
                                            echo '<li>'. $ic_city.'</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="location-item">
                                <div class="title">
                                    <h6>Contact Number</h6>
                                </div>
                                <div class="content">
                                    <ul>
                                        <?php
                                        if(!empty($ic_contact_no)){
                                            echo '<li><a href="tel:'.$ic_contact_no.'">+977 - '.$ic_contact_no.'</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="location-item">
                                <div class="title">
                                    <h6>Email us at</h6>
                                </div>
                                <div class="content">
                                    <ul>
                                        <?php
                                        if(!empty($ic_contact_email)){
                                            echo '<li><a href="mailto:'.$ic_contact_email.'">'.$ic_contact_email.'</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="location-item">
                                <div class="content">
                                    <div class="social-container">
                                        <ul>
                                            <?php
                                            if(!empty($ic_fb_link)){
                                                echo '<li><a href="'.$ic_fb_link.'" target="_blank"><i class="flaticon-facebook"></i></a></li>';
                                            }
                                            if(!empty($ic_insta_link)){
                                                echo '<li><a href="'.$ic_insta_link.'" target="_blank"><i class="flaticon-instagram"></i></a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="location-item">
                                <div class="content">
                                    <a class="co-btn type-text type-2" href="<?php echo $ic_google_map_link_cb ?>" target="_blank">View On Map</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="block-item">
                        <div class="map-container">
                            <?php
                            if(!empty($ic_google_map_link_cb)) {?>
                                <a href="<?php echo $ic_google_map_link_cb ?>" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/elements/contact.png">
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="form-section common-relative">
        <div class="common-element-container">
            <div class="element-item type-bottle type-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/elements/element_bottle_2.png">
            </div>
        </div>
        <div class="custom-container small-width-container">
            <div class="section-content common-relative">
                <div class="form-container">
                    <div class="section-title type-black">
                        <h3>STAY IN  TOUCH</h3>
                    </div>

                    <div class="common-form">
                        <?php echo do_shortcode( '[contact-form-7 id="28" title="Contact Form"]' ); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>



</div>

<?php include ('footer.php') ?>
