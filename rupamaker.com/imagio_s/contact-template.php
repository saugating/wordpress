<?php

/**
 * Template Name: Contact Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 */

$ic_contact_address = do_shortcode('[get_site_value option=ic_contact_address]');
$ic_contact_email = do_shortcode('[get_site_value option=ic_contact_email]');
$ic_contact_no = do_shortcode('[get_site_value option=ic_contact_no]');
$ic_google_map_link = do_shortcode('[get_site_value option=ic_google_map_link]');


$postid = get_the_ID();
get_header(); ?>

<div id="contact-page">

  <section class="common-banner">
    <div class="banner-slider-section">
      <div class="banner-slider">
        <div class="banner-item type-small">
          <div class="image-container">
            <img src="<?php the_field('banner_image'); ?>" alt=""/>
          </div>
          <div class="text-container center">
            <div class="custom-container">
              <div class="section-container">
                <div class="section-title">
                  <h2 class="type-white"><?php the_field('banner_title'); ?></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="background-overlay">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-imgparallax">
    <div class="custom-container remove-bottom-padding">
      <div class="block-container c2">
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h1>
                <?php the_field('contact_title'); ?>
              </h1>
            </div>
            <div class="section-body">
              <p>
                <?php the_field('contact_text'); ?>
              </p>
            </div>
            <div class="section-body type-contact-location">
                <strong>Location: </strong>
                <div>
                  Rupa Makers  Pvt. Ltd.<br>
                  PO Box 4140<br>
                  Bouddha, Kathmandu<br>
                  Nepal
                </div>
            </div>
            <div class="section-body">
              <p>
                <strong>Contact Number: </strong>
                <?php echo "$ic_contact_no"?>
              </p>
            </div>
            <div class="section-body">
              <p>
                <strong>Email: </strong>
                <?php echo "$ic_contact_email"?>
              </p>
            </div>
            <div class="section-links">
              <a href="#" class="co-btn with-hyphen">Get Directions</a>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="section-container">
            <iframe src="<?php echo "$ic_google_map_link"?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="enquiry">
    <div class="custom-container remove-bottom-padding">
      <?php echo do_shortcode('[contact-form-7 id="150" title="Contact Us"]'); ?>
    </div>
  </section>

  <section class="common-subscribe">
    <div class="custom-container">
      <div class="image-container">
        <img src="<?php the_field('newsletter_image'); ?>" alt="">
      </div>
      <div class="section-container type-medium center">
        <div class="section-title">
          <h1 class="type-white">
            <?php the_field('newsletter_title'); ?>
          </h1>
        </div>
        <div class="section-body add-top-margin">
          <p>
            <?php the_field('newsletter_text'); ?>
          </p>
        </div>
        <div class="section-links">
          <?php echo do_shortcode('[contact-form-7 id="9" title="Newsletter"]'); ?>
        </div>
      </div>
    </div>
    <div class="backimage before-footer">
      <div class="image-container backtop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Ico12.png" alt="">
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
