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
<section class="our-mission">
  <div class="custom-container center">
    <div class="section-container">
      <div class="section-title">
        <h2>
          <!-- <?php the_field('intro_title') ;?> -->
          <!-- Medical, Dental, and Mental health care. -->
          More than just treating patients.<br/>
          We support better healthcare.
        </h2>
      </div>
    </div>
  </div>
</section>
<footer id="footer-wrapper">

    <div class="custom-container remove-top-bottom-padding">

      <div class="footer-widget">
        <div class="logo-wrapper">
          <a href="<?php echo site_url(); ?>/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/LogoH.webp" alt="">
          </a>
        </div>
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
            <a href="tel:<?php echo $ic_contact; ?>"><?php echo $ic_contact; ?></a>,
          </li>
          <li>
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/info-mail.svg" alt="">
            </div>
            <a href="mailto:<?php echo $ic_email; ?>"><?php echo $ic_email; ?></a>
          </li>
        </ul>
      </div>

      <div class="footer-widget">
        <ul class="map-widget">
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
            <a href="<?php echo site_url(); ?>/galleries/">Gallery</a>
          </li>
          <li>
            <a href="<?php echo site_url(); ?>/media-coverages/">Media Coverage</a>
          </li>
          <li>
            <a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a>
          </li>
        </ul>
      </div>

      <div class="footer-widget">
        <h5 class="widget-title">
          Stay Connected
        </h5>
        <div class="newsletter-widget">
          <?php echo do_shortcode('[contact-form-7 id="172" title="Newsletter"]'); ?>
        </div>
        <h5 class="widget-title">
          Follow Us
        </h5>
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

</footer>
<!---------------------------------- Footer Wrapper Ends ----------------------------------->
</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


<?php wp_footer(); ?>

</body>
</html>
