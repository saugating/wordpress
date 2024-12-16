<?php
/**
 * Template Name: Contact Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
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
  <section class="common-page-intro">
    <div class="custom-container remove-top-bottom-padding type-margin">
      <div class="common-page-title cst-fade">
        <h1><?php echo the_field('page_title')?></h1>
        <p><?php echo the_field('page_description')?></p>
      </div>
      <div class="slider-box cst-fade">
        <div class="image-container">
          <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('section_image');
          }
          else {
            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="lavie-brands animation-area">
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item">
          <div class="section-container">
            <div class="common-logo ani-reveal-left">
              <div class="image-container">
                <img src="<?php the_field('logo', 166); ?>" alt="">
              </div>
            </div>
            <div class="common-title cst-fade">
              <h3><?php echo get_the_title( 166 ); ?></h3>
            </div>
            <div class="common-quickinfos cst-fade">
              <ul>
                <?php if( have_rows('address', 166) ): ?>
                  <?php while( have_rows('address', 166) ): the_row(); ?>
                    <li class="contact_location">
                      <a href="#">
                        <div class="flex-cont">
                          <?php the_sub_field('location'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('phone_number', 166) ): ?>
                  <?php while( have_rows('phone_number', 166) ): the_row(); ?>
                    <li class="contact_phone">
                      <a href="tel:<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('mobile_number', 166) ): ?>
                  <?php while( have_rows('mobile_number', 166) ): the_row(); ?>
                    <li class="contact_mobile">
                      <a href="tel:+<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
              </ul>
            </div>
            <div class="section-links cst-fade">
              <a href="#map_location" class="co-btn type-fill">
                View Map
              </a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-container">
            <div class="common-logo ani-reveal-left">
              <div class="image-container">
                <img src="<?php the_field('logo', 172); ?>" alt="">
              </div>
            </div>
            <div class="common-title cst-fade">
              <h3><?php echo get_the_title( 172 ); ?></h3>
            </div>
            <div class="common-quickinfos cst-fade">
              <ul>
                <?php if( have_rows('address', 172) ): ?>
                  <?php while( have_rows('address', 172) ): the_row(); ?>
                    <li class="contact_location">
                      <a href="#">
                        <div class="flex-cont">
                          <?php the_sub_field('location'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('phone_number', 172) ): ?>
                  <?php while( have_rows('phone_number', 172) ): the_row(); ?>
                    <li class="contact_phone">
                      <a href="tel:<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('mobile_number', 172) ): ?>
                  <?php while( have_rows('mobile_number', 172) ): the_row(); ?>
                    <li class="contact_mobile">
                      <a href="tel:+<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
              </ul>
            </div>
            <div class="section-links cst-fade">
              <a href="#map_location" class="co-btn type-fill">
                View Map
              </a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-container">
            <div class="common-logo ani-reveal-left">
              <div class="image-container">
                <img src="<?php the_field('logo', 248); ?>" alt="">
              </div>
            </div>
            <div class="common-title cst-fade">
              <h3><?php echo get_the_title( 248 ); ?></h3>
            </div>
            <div class="common-quickinfos cst-fade">
              <ul>
                <?php if( have_rows('address', 248) ): ?>
                  <?php while( have_rows('address', 248) ): the_row(); ?>
                    <li class="contact_location">
                      <a href="#">
                        <div class="flex-cont">
                          <?php the_sub_field('location'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('phone_number', 248) ): ?>
                  <?php while( have_rows('phone_number', 248) ): the_row(); ?>
                    <li class="contact_phone">
                      <a href="tel:<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('mobile_number', 248) ): ?>
                  <?php while( have_rows('mobile_number', 248) ): the_row(); ?>
                    <li class="contact_mobile">
                      <a href="tel:+<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
              </ul>
            </div>
            <div class="section-links cst-fade">
              <a href="#map_location" class="co-btn type-fill">
                View Map
              </a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-container">
            <div class="common-logo ani-reveal-left">
              <div class="image-container">
                <img src="<?php the_field('logo', 250); ?>" alt="">
              </div>
            </div>
            <div class="common-title cst-fade">
              <h3><?php echo get_the_title( 250 ); ?></h3>
            </div>
            <div class="common-quickinfos cst-fade">
              <ul>
                <?php if( have_rows('address', 250) ): ?>
                  <?php while( have_rows('address', 250) ): the_row(); ?>
                    <li class="contact_location">
                      <a href="#">
                        <div class="flex-cont">
                          <?php the_sub_field('location'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('phone_number', 250) ): ?>
                  <?php while( have_rows('phone_number', 250) ): the_row(); ?>
                    <li class="contact_phone">
                      <a href="tel:<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
                <?php if( have_rows('mobile_number', 250) ): ?>
                  <?php while( have_rows('mobile_number', 250) ): the_row(); ?>
                    <li class="contact_mobile">
                      <a href="tel:+<?php the_sub_field('number'); ?>">
                        <div class="flex-cont">
                          <?php the_sub_field('number'); ?>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
              </ul>
            </div>
            <div class="section-links cst-fade">
              <a href="#map_location" class="co-btn type-fill">
                View Map
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-backdrop">
    <div class="custom-container remove-top-bottom-padding">
      <div class="block-cont">
        <div class="block-item">
          <div class="common-title cst-fade">
            <div class="section-container">
              <h1>Contact Us</h1>
              <h2><?php echo the_field('contact_title')?></h2>
            </div>
          </div>
          <div class="content cst-fade">
            <p>
              <?php echo the_field('contact_description')?>
            </p>
          </div>
        </div>
        <div class="block-item">
          <div class="common-form type-black cst-fade">
            <?php echo do_shortcode('[contact-form-7 id="281" title="Contact Form"]');?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-location" id="map_location">
    <div class="custom-container">
      <div class="common-title center type-white">
        <div class="section-container cst-fade">
          <h1>Our</h1>
          <h2>Locations</h2>
        </div>
      </div>
      <div class="flex-cont">
        <div class="flex-item common-tab cst-fade">
          <div class="" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link co-btn type-fill active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Lavie Garden</a>
              <a class="nav-link co-btn type-fill" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Lavie Residence & Spa</a>
              <a class="nav-link co-btn type-fill" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lekali Bhoj Thakali</a>
              <a class="nav-link co-btn type-fill" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Jigri Sekuwa</a>
            </div>
          </div>
        </div>
        <div class="flex-item cst-fade">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <iframe src="<?php the_field('map', 166); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <iframe src="<?php the_field('map', 172); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <iframe src="<?php the_field('map', 248); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <iframe src="<?php the_field('map', 250); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="common-stupa">
        <div class="image-container">
          <img src="img/icons/icon_stupa.webp" alt="">
        </div>
      </div>
      <div class="common-flag">
        <div class="image-container">
          <img src="img/icons/icon_flag.svg" alt="">
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
