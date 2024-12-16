</div>
<!--------------------------------- Content Wrapper Ends ----------------------------------->
<?php

$ic_google_map_link = do_shortcode('[get_site_value option=ic_google_map_link]');
$ic_fb_link = do_shortcode('[get_site_value option=ic_fb_link]');
$ic_insta_link = do_shortcode('[get_site_value option=ic_insta_link]');
$ic_yt_link = do_shortcode('[get_site_value option=ic_yt_link]');
?>

<!--------------------------------- Footer Wrapper Starts ---------------------------------->
<footer id="footer-wrapper">

    <div class="custom-container">

      <div class="footer-widget-container">
        <div class="footer-widget">
          <div class="section-container">
            <div class="image-container">
              <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/Logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="footer-widget">
          <div class="section-container">
            <div class="section-title">
              <p>
                <?php echo "$ic_google_map_link"?>
              </p>
            </div>
            <div class="section-body">
              <div class="share-item">
                <ul>
                  <li>
                    <a href="<?php echo "$ic_fb_link"?>" target="_blank" class="s-facebook">
                      <i class="fa-brands fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo "$ic_insta_link"?>" target="_blank" class="s-instagram">
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo "$ic_yt_link"?>" target="_blank" class="s-youtube">
                      <i class="fa-brands fa-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-widget">
          <div class="section-container">
            <div class="section-title">
              <h5>About Us</h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/about-us/">About Us</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/about-us/">Mission & Vision</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-widget">
          <div class="section-container">
            <div class="section-title">
              <h5>Products</h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/products/">Product Category</a>
                </li>
                <li>
                  <a href="single.php">Product Details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-widget">
          <div class="section-container">
            <div class="section-title">
              <h5>Company</h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/careers/">Careers</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/find-a-store/">Business & Commercial</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-widget">
          <div class="section-container">
            <div class="section-title">
              <h5>Contact Us</h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/contact-us/">Company Details</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/contact-us/">Contact Form</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright-container">
        <div class="section-container">
          <div class="section-body">
            <p>
              Copyright &copy;. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>

    </div>

</footer>

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
<!---------------------------------- Footer Wrapper Ends ----------------------------------->
</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


<?php wp_footer(); ?>

</body>
</html>
