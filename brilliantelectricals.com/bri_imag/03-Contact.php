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

get_header(); ?>

<div id="contact-page">
  <section class="common-banner type-small">
    <?php if( have_rows('banner') ): ?>
      <?php while( have_rows('banner') ): the_row(); ?>
        <div class="image-container">
          <img src="<?php echo the_sub_field('image')?>" alt="">
        </div>
        <div class="custom-container remove-top-bottom-padding">
          <div class="section-title">
            <h1 class="type-white"><?php echo the_sub_field('title')?></h1>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <section>
    <div class="custom-container">
      <div class="block-wrapper">
        <div class="item-wrapper">
          <div class="section-container">
            <div class="section-title">
              <h4>Follow Us</h4>
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
            <div class="section-body">
              <div class="con-wrapper">
                <?php if( have_rows('contact_info') ): ?>
                  <?php while( have_rows('contact_info') ): the_row(); ?>
                    <div class="con-item">
                      <div class="section-container">
                        <div class="section-title">
                          <h4><?php echo the_sub_field('title')?></h4>
                        </div>
                        <div class="section-body">
                          <p><?php echo the_sub_field('location')?></p>
                          <ul>
                            <li>
                              Contact:
                              <a href="tel:<?php echo the_sub_field('contact')?>">
                                <?php echo the_sub_field('contact')?>
                              </a>
                            </li>
                            <li>
                              Email:
                              <a href="mailto:<?php echo the_sub_field('email')?>">
                                <?php echo the_sub_field('email')?>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="item-wrapper">
          <div class="section-container">
            <div class="section-title">
              <h2>Send us a Message</h2>
            </div>
            <div class="section-body">
              <p>
                Leave your personal information here to get informed and we will get back to you.
              </p>
              <div class="common-form">
                <?php echo do_shortcode('[contact-form-7 id="106" title="Contact"]'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
