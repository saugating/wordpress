</div>
<!--------------------------------- Content Wrapper Ends ----------------------------------->
<?php
$ic_location = do_shortcode('[get_site_value option=ic_location]');
$ic_contact = do_shortcode('[get_site_value option=ic_contact]');
$ic_contact_office = do_shortcode('[get_site_value option=ic_contact_office]');
?>

<!--------------------------------- Footer Wrapper Starts ---------------------------------->
<footer id="footer-wrapper">
  <div class="common-backdrop" id="book-now">
    <div class="custom-container remove-top-bottom-padding">
      <div class="block-cont">
        <div class="block-item">
          <div class="common-title type-white cst-fade">
            <div class="section-container">
              <h1>Book your Perfect Getaway</h1>
              <h2>Reservation & Booking</h2>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="common-form cst-fade">
            <?php echo do_shortcode('[contact-form-7 id="282" title="Reservation"]');?>
          </div>
        </div>
      </div>
    </div>
    <div class="gradient">
    </div>
    <div class="Garden_image">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/back_01.webp" alt="">
      </div>
    </div>
    <div class="Residence_image">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/back_02.webp" alt="">
      </div>
    </div>
    <div class="Thakali_image">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/back_03.webp" alt="">
      </div>
    </div>
    <div class="Sekuwa_image">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/back_04.webp" alt="">
      </div>
    </div>
  </div>

  <div class="partners-container animation-area">
    <div class="custom-container">
      <div class="partners">
        <div class="image-container ani-reveal-left">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/F00.webp" alt="">
        </div>
      </div>
      <div class="partners">
        <div class="image-container ani-reveal-left">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/F01.webp" alt="">
        </div>
      </div>
      <div class="partners">
        <div class="image-container ani-reveal-left">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/F02.webp" alt="">
        </div>
      </div>
      <div class="partners">
        <div class="image-container ani-reveal-left">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/F03.webp" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="footer-container">
    <div class="custom-container remove-top-bottom-padding">
      <div class="logo-container cst-fade">
        <div class="image-container">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/Logo.svg" alt="">
          </a>
        </div>
      </div>
      <div class="quicklinks cst-fade">
        <div class="upper">
          <ul>
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
        </div>
        <div class="divider">
        </div>
        <div class="lower">
          <ul>
            <li>
              <a href="<?php echo site_url(); ?>/about/">About us</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/our-brands/">Our Brands</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>">Reviews & Awards</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/news-blogs/">News & Blogs</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/careers/">Career</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/contact/">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="common-reservation cst-fade">
        <a href="#book-now">
          Make a Reservation
        </a>
      </div>
      <div class="quickinfos cst-fade">
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
      <div class="outro">
        <div class="">
          &copy; Copyright 2023. All Rights Reserved.
        </div>
        <div class="">
          <ul>
            <li>
              <a href="#">Terms & Conditions</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <div class="">
          Created by <a href="https://imagiocreations.com/" target="_blank" rel="nofollow">Imagio Creations</a>.
        </div>
      </div>
    </div>
  </div>

</footer>
<!---------------------------------- Footer Wrapper Ends ----------------------------------->
</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->


</div>
<!-------------------------------------- Wrapper Ends -------------------------------------->

<script type="text/javascript">
  $("a[href^='#book-now']").click(function(e) {
    e.preventDefault();
    var position = $($(this).attr("href")).offset().top;
    $("body, html").animate({
      scrollTop: position
    } /* speed */ );
  });
  $("a[href^='#applynow']").click(function(e) {
    e.preventDefault();
    var position = $($(this).attr("href")).offset().top;
    $("body, html").animate({
      scrollTop: position
    } /* speed */ );
  });
  $("a[href^='#map_location']").click(function(e) {
    e.preventDefault();
    var position = $($(this).attr("href")).offset().top;
    $("body, html").animate({
      scrollTop: position
    } /* speed */ );
  });
  $( ".wpcf7-select option" ).addClass(function(index) {
       return "icon-" + $(this).text().toLowerCase().split(' ').join('-');
  });
</script>

<script type="text/javascript">
  myID = document.getElementById("myID");
  var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 700) {
      myID.className = "bottomMenu show"
    } else {
      myID.className = "bottomMenu hide"
    }
  };
  window.addEventListener("scroll", myScrollFunc);
</script>

<script type="text/javascript">
  var selectedScheme = 'Default';
  $('.selection').change(function(){
    $('.common-backdrop').removeClass(selectedScheme).addClass($(this).val());
    selectedScheme = $(this).val();
  });
</script>
<?php wp_footer(); ?>

</body>
</html>
