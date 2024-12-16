</div>
<!--------------------------------- Content Wrapper Ends ----------------------------------->

<?php
$ic_lodge_area          = do_shortcode('[get_site_value option=ic_lodge_area]');
$ic_lodge_city          = do_shortcode('[get_site_value option=ic_lodge_city]');
$ic_landline_no1        = do_shortcode('[get_site_value option=ic_landline_no1]');
$ic_mobile_no1          = do_shortcode('[get_site_value option=ic_mobile_no1]');
$ic_contact_email       = do_shortcode('[get_site_value option=ic_contact_email]');
$ic_social_text         = do_shortcode('[get_site_value option=ic_social_text]');
$ic_fb_link             = do_shortcode('[get_site_value option=ic_fb_link]');
$ic_insta_link          = do_shortcode('[get_site_value option=ic_insta_link]');
$ic_tik_link            = do_shortcode('[get_site_value option=ic_tik_link]');
?>

<!--------------------------------- Footer Wrapper Starts ---------------------------------->
<footer id="footer-wrapper">
    <div class="custom-container">
        <div class="footer-container">

            <div class="footer-item type-nav">
                <div class="content">
                    <?php

                    wp_nav_menu( array(
                            'theme_location'    => 'footer_menu',
                            'depth'             => 3,
                            'container'         => 'nav',
                        )
                    );

                    ?>
                </div>
            </div>
            <div class="footer-item">
                <div class="title">
                    <h4>Contact Us</h4>
                </div>

                <div class="content">
                    <div class="content-item">
                        <ul>
                            <?php
                            if(!empty($ic_lodge_area)){
                                echo '<li>Lodge: '. $ic_lodge_area.'</li>';
                            }
                            ?>
                            <?php
                            if(!empty($ic_lodge_city)){
                                echo '<li>'. $ic_lodge_city.'</li>';
                            }
                            ?>
                        </ul>
                        <ul>
                            <?php
                            if(!empty($ic_contact_email)){
                                echo '<li>Email: <a href="#" class="open-enquiry"> '. $ic_contact_email .'</a></li>';
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="content-item">
                        <ul>
                            <li><?php echo $ic_social_text; ?></li>
                        </ul>
                        <ul class="type-social">
                            <li><a href="<?php echo $ic_fb_link; ?>" target="_blank"><i class="flaticon-facebook"></i></a></li>
                            <li><a href="<?php echo $ic_insta_link; ?>" target="_blank"><i class="flaticon-instagram"></i></a></li>
                            <li><a href="<?php echo $ic_tik_link; ?>" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-item">
                <div class="title">
                    <h4>Call for Reservations</h4>
                </div>

                <div class="content">
                    <ul>
                        <?php
                        if(!empty($ic_landline_no1)){
                            echo '<li> Contact: '.$ic_landline_no1.' </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="copy-container">
            <p>© <?php echo date("Y"); ?> All rights reserved. Website by <a href="https://imagiocreations.com/" target="_blank">Imagio Creations</a></p>
        </div>

    </div>
</footer>
<!---------------------------------- Footer Wrapper Ends ----------------------------------->
</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


<?php wp_footer(); ?>

</body>
</html>
