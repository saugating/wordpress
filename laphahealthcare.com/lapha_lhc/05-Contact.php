<?php
/**
 * Template Name: Contact Template
 *
 * @package WordPress
 */
$postid = get_the_ID();

$ic_fb_link = do_shortcode('[get_site_value option=ic_fb_link]');
$ic_insta_link = do_shortcode('[get_site_value option=ic_insta_link]');
$ic_tw_link = do_shortcode('[get_site_value option=ic_tw_link]');

$ic_location = do_shortcode('[get_site_value option=ic_location]');
$ic_email = do_shortcode('[get_site_value option=ic_email]');
$ic_email_office = do_shortcode('[get_site_value option=ic_email_office]');
$ic_contact = do_shortcode('[get_site_value option=ic_contact]');
$ic_contact_office = do_shortcode('[get_site_value option=ic_contact_office]');

get_header(); ?>

<div id="contact-page">
  <div class="custom-container type-small">
    <div class="contact-title">
      <div class="common-title">
        <div class="section-container">
          <div class="section-info">
            <ul>
              <li>
                <?php echo the_title(); ?>
              </li>
            </ul>
          </div>
          <div class="section-title">
            <h1>
              <?php the_field( 'intro_title' )?>
            </h1>
          </div>
          <div class="section-body">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="socials">
        <h5 class="widget-title">
          Follow Us:
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
  </div>
  <div class="custom-container remove-top-bottom-padding">
    <div class="contact-details">
      <div class="contact-wrapper">
        <div class="contact-item">
          <div class="section-container">
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/info-location.svg" alt="">
            </div>
            <div class="section-title">
              <h5>Location</h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <?php echo $ic_location; ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="contact-item">
          <div class="section-container">
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/info-mail.svg" alt="">
            </div>
            <div class="section-title">
              <h5>Email</h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <a href="mailto:<?php echo $ic_email; ?>"><?php echo $ic_email; ?></a>
                </li>
                <li>
                  <a href="mailto:<?php echo $ic_email_office; ?>"><?php echo $ic_email_office; ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="contact-item">
          <div class="section-container">
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/info-phone.svg" alt="">
            </div>
            <div class="section-title">
              <h5>Phone</h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <a href="tel:<?php echo $ic_contact; ?>"><?php echo $ic_contact; ?></a>,
                </li>
                <li>
                  <a href="tel:<?php echo $ic_contact_office; ?>"><?php echo $ic_contact_office; ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="custom-container type-small">
    <div class="map-wrapper">
      <div class="map-item">
        <!-- <iframe src="<?php the_field( 'maps_url' )?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1765.8189984647738!2d85.31613350590997!3d27.72846124390257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191ed757779f%3A0xa3fb7fed922d73e8!2sSamakhusi%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1684494964645!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
      </div>
      <div class="map-item">
        <div class="section-container">
          <div class="section-title">
            <h3>Visit us or<br/>Send us a message</h3>
          </div>
          <div class="section-body">
            <div class="common-form">
              <?php echo do_shortcode('[contact-form-7 id="171" title="Contact form"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
