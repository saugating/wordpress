</div>
<!--------------------------------- Content Wrapper Ends ----------------------------------->
<?php
$ic_contact_address = do_shortcode('[get_site_value option=ic_contact_address]');
$ic_contact_email = do_shortcode('[get_site_value option=ic_contact_email]');
$ic_contact_no = do_shortcode('[get_site_value option=ic_contact_no]');

$ic_fb_link = do_shortcode('[get_site_value option=ic_fb_link]');
$ic_insta_link = do_shortcode('[get_site_value option=ic_insta_link]');
$ic_tw_link = do_shortcode('[get_site_value option=ic_tw_link]');
$ic_yt_link = do_shortcode('[get_site_value option=ic_yt_link]');
?>

<!--------------------------------- Footer Wrapper Starts ---------------------------------->
<footer id="footer-wrapper">

  <div class="custom-container remove-top-bottom-padding center">

    <div class="logo-container">
      <a href="<?php echo site_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/LogoG.png">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/LogoText.png">
      </a>
    </div>

    <div class="contact-info">
      <ul>
        <li>
          <?php echo "$ic_contact_address"?>
        </li>
        <li>
          <a href="mailto:<?php echo "$ic_contact_email"?>">
            <?php echo "$ic_contact_email"?>
          </a>
        </li>
        <li>
          <a href="tel:<?php echo "$ic_contact_no"?>">
            <?php echo "$ic_contact_no"?>
          </a>
        </li>
      </ul>
    </div>

    <div class="social-links">
      <ul>
        <li>
          <a href="https://www.facebook.com/" target="_blank">
            <div class="image-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-facebook.svg" alt="">
            </div>
          </a>
        </li>
        <li>
          <a href="https://www.twitter.com/" target="_blank">
            <div class="image-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-twitter.svg" alt="">
            </div>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/" target="_blank">
            <div class="image-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-instagram.svg" alt="">
            </div>
          </a>
        </li>
      </ul>
    </div>

    <div class="footer-nav">
      <?php
      wp_nav_menu(array(
          'theme_location'    => 'footer_menu',
          'depth'             => 4,
      ));
      ?>
    </div>

    <div class="copyright-info">
      <p>
        Copyright &copy; 2021. All Rights Reserved.<br/>
        Crafted by <a href="https://imagiocreations.com/" target="_blank">Imagio Creations</a>.
      </p>
    </div>

  </div>

</footer>
<!---------------------------------- Footer Wrapper Ends ----------------------------------->
</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->

<?php wp_footer(); ?>

<script>
    function openMenuNav() {
        jQuery("#main-side-menu").addClass("menuItemsnav");
        jQuery("#menuOverlay").addClass("menuOverlay");
    }
    function closeMenuNav() {
        jQuery("#main-side-menu").removeClass("menuItemsnav");
        jQuery("#menuOverlay").removeClass("menuOverlay");
    }
</script>

</body>

</html>
