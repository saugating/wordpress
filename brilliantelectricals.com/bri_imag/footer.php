</div>
<!--------------------------------- Content Wrapper Ends ----------------------------------->
<?php
$ic_fb_link = do_shortcode('[get_site_value option=ic_fb_link]');
$ic_insta_link = do_shortcode('[get_site_value option=ic_insta_link]');
$ic_tw_link = do_shortcode('[get_site_value option=ic_tw_link]');

$ic_location = do_shortcode('[get_site_value option=ic_location]');
$ic_email = do_shortcode('[get_site_value option=ic_email]');
$ic_email_office = do_shortcode('[get_site_value option=ic_email_office]');
$ic_contact = do_shortcode('[get_site_value option=ic_contact]');
$ic_contact_office = do_shortcode('[get_site_value option=ic_contact_office]');
?>

<!--------------------------------- Footer Wrapper Starts ---------------------------------->
<footer id="footer-wrapper">

    <div class="custom-container remove-top-bottom-padding">

      <div class="widget-wrapper">

        <div class="footer-widget">
          <h5 class="widget-title">
            Stay updated with us
          </h5>
          <div class="newsletter-widget">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Newsletter"]'); ?>
          </div>

          <div class="logo-wrapper">
            <a href="<?php echo site_url(); ?>/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/Logo.svg" alt="">
            </a>
          </div>

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

        <div class="footer-widget">
          <ul class="info-widget">
            <p>
              Location
            </p>
            <li>
              <?php echo $ic_location; ?>
            </li>
          </ul>
          <ul class="info-widget">
            <p>
              Phone No
            </p>
            <li>
              <a href="tel:<?php echo $ic_contact; ?>"><?php echo $ic_contact; ?></a>
            </li>
          </ul>
          <ul class="info-widget">
            <p>
              Email Address
            </p>
            <li>
              <a href="mailto:<?php echo $ic_email; ?>"><?php echo $ic_email; ?></a>
            </li>
          </ul>
        </div>

        <div class="footer-widget">
          <ul class="map-widget">
            <li>
              <a href="<?php echo site_url(); ?>/">Home</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/about/">About</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/products/">Products</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/projects/">Projects</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/contact-us/">Contact</a>
            </li>
          </ul>
        </div>

      </div>

    </div>

    <div class="custom-container remove-top-bottom-padding center copyright">
      <div class="">
        &copy; Copyright 2023 Brilliant Led.<br/> Website by <a href="https://imagiocreations.com/" target="_blank">Imagio Creations</a>.
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
