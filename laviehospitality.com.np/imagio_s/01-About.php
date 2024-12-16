<?php
/**
* Template Name: About Us Template
*
* @package WordPress
* @subpackage Imagio Creations
* @since Imagio Creations 2021
* @author Imagio Creations
*/
$postid = get_the_ID();
get_header(); ?>

<div id="about-page">
  <section class="common-page-intro type-nomargin">
    <div class="custom-container remove-top-bottom-margin">
      <div class="common-page-title">
        <h1><?php echo the_field('page_title')?></h1>
        <p><?php echo the_field('page_description')?></p>
      </div>
      <div class="flex-cont cst-fade">
        <div class="flex-item imgscroll1">
          <div class="inner">
            <div class="image-container">
              <img src="<?php the_field('about_image_one'); ?>" alt="">
            </div>
          </div>
        </div>
        <div class="flex-item imgscroll3">
          <div class="inner">
            <div class="image-container">
              <img src="<?php the_field('about_image_two'); ?>" alt="">
            </div>
          </div>
          <div class="inner">
            <div class="image-container">
              <img src="<?php the_field('about_image_three'); ?>" alt="">
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="inner">
            <div class="image-container">
              <img src="<?php the_field('about_image_four'); ?>" alt="">
            </div>
          </div>
        </div>
        <div class="flex-item imgscroll3">
          <div class="inner">
            <div class="image-container">
              <img src="<?php the_field('about_image_five'); ?>" alt="">
            </div>
          </div>
          <div class="inner">
            <div class="image-container">
              <img src="<?php the_field('about_image_six'); ?>" alt="">
            </div>
          </div>
        </div>
        <div class="flex-item imgscroll1">
          <div class="inner">
            <div class="image-container">
              <img src="<?php the_field('about_image_seven'); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="block-cont">
        <div class="block-item">
          <div class="image-container">
            <img src="<?php the_field('logo', 166); ?>" alt="">
          </div>
        </div>
        <div class="block-item">
          <div class="image-container">
            <img src="<?php the_field('logo', 172); ?>" alt="">
          </div>
        </div>
        <div class="block-item">
          <div class="image-container">
            <img src="<?php the_field('logo', 248); ?>" alt="">
          </div>
        </div>
        <div class="block-item">
          <div class="image-container">
            <img src="<?php the_field('logo', 250); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mission-new">
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item">
          <div class="image-container cst-fade">
            <img src="<?php the_field('mission_image');?>" alt="">
          </div>
        </div>
        <div class="flex-item">
          <div class="inner">
            <div class="common-title cst-fade">
              <div class="section-container">
                <h1>Our</h1>
                <h2>Mission</h2>
              </div>
            </div>
            <div class="divider cst-fade">
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fly_home.svg" alt="">
              </div>
            </div>
            <div class="content cst-fade">
              <p><?php the_field('mission');?></p>
            </div>
          </div>
          <div class="inner">
            <div class="common-title cst-fade">
              <div class="section-container">
                <h1>Our</h1>
                <h2>Vision</h2>
              </div>
            </div>
            <div class="divider cst-fade">
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fly_home.svg" alt="">
              </div>
            </div>
            <div class="content cst-fade">
              <p><?php the_field('vision');?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="hospitality-section">
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item">
          <div class="inner">
            <div class="common-title cst-fade">
              <div class="section-container">
                <h2 class="type-white"><?php the_field('our_story_title');?></h2>
                <h1 class="type-white">Hospitality</h1>
              </div>
            </div>
            <div class="content cst-fade">
              <?php the_field('our_story_description');?>
            </div>
          </div>
        </div>
        <div class="flex-item cst-fade">
          <div class="common-inner-image-wrap">
            <div class="image-wrap imgscroll1">
              <div class="image-container">
                <img src="<?php the_field('our_story_image_one');?>" alt="">
              </div>
            </div>
            <div class="image-wrap imgscroll2">
              <div class="image-container">
                <img src="<?php the_field('our_story_image_two');?>" alt="">
              </div>
            </div>
            <div class="image-wrap imgscroll3">
              <div class="image-container">
                <img src="<?php the_field('our_story_image_three');?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="core-section animation-area">
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item ani-reveal-left">
          <div class="image-container">
            <img src="<?php the_field('our_core_image');?>" alt="">
          </div>
        </div>
        <div class="flex-item">
          <div class="inner center">
            <div class="common-title cst-fade">
              <div class="section-container">
                <h2>Our Core</h2>
                <h1>Values</h1>
              </div>
            </div>
            <div class="divider cst-fade">
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fly_home.svg" alt="">
              </div>
            </div>
            <div class="block-cont">
              <?php if( have_rows('our_core_value') ): ?>
                <?php while( have_rows('our_core_value') ): the_row(); ?>
                  <?php if( have_rows('our_value') ): ?>
                    <?php while( have_rows('our_value') ): the_row(); ?>
                      <div class="block-item">
                        <div class="common-title cst-fade">
                          <h3><?php the_sub_field('title');?></h3>
                        </div>
                        <div class="content cst-fade">
                          <p><?php the_sub_field('content');?></p>
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query();?>
                  <?php endif; wp_reset_query();?>
                <?php endwhile; wp_reset_query();?>
              <?php endif; wp_reset_query();?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="common-flag">
      <div class="image-container">
        <img src="img/icons/icon_flag.svg" alt="">
      </div>
    </div>
  </section>
  <section class="team-section">
    <div class="message-section">
      <div class="custom-container">
        <div class="flex-cont">
          <div class="flex-item">
            <div class="image-container">
              <img src="<?php the_field('testimonial_image');?>" alt="">
            </div>
          </div>
          <div class="flex-item">
            <div class="inner">
              <div class="image-container cst-fade">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_quote.svg" alt="">
              </div>
              <div class="title cst-fade">
                <h3><?php the_field('testimonial_description');?></h3>
              </div>
              <div class="name cst-fade">
                <h3><?php the_field('testimonial_name');?></h3>
                <h4><?php the_field('testimonial_designation');?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="common-gallery">
      <div class="custom-container">
        <div class="common-title cst-fade">
          <div class="section-container">
            <h1>Leaderships</h1>
            <h2>Our Managment team</h2>
          </div>
        </div>
        <div class="slider-box animation-area">
          <div class="team-gallery-container">
            <div class="item-slider">
              <?php
              $the_query = new WP_Query( array(
                  'post_type' => 'team',
                  'posts_per_page' => -1,
              ) );
              while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
              <div class="item">
                <div class="image-container ani-reveal-left">
                  <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('section_image_medium');
                  }
                  else {
                    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
                  }
                  ?>
                </div>
                <div class="title cst-fade">
                  <h3><?php echo get_the_title(); ?></h3>
                </div>
                <div class="section-info cst-fade">
                  <ul>
                    <li><?php echo the_field('designation'); ?></li>
                    <li><?php echo the_field('company'); ?></li>
                  </ul>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="maps-section">
    <div class="custom-container remove-right-padding">
        <div class="block-wrapper">
            <div class="block-item">
                <div class="common-title">
                    <div class="section-container">
                        <h1>Our</h1>
                        <h2>Outlets</h2>
                        <h3>
                            <?php the_field('outlets_description');?>
                        </h3>
                    </div>
                </div>
                <div class="common-tab">
                    <div class="" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a href="<?php echo get_the_permalink( 166 ); ?>" class="nav-link co-btn type-fill" id="v-pills-home-tab">
                                <?php echo get_the_title( 166 ); ?>
                                <div class="marker">
                <span class="material-symbols-sharp">
                  location_on
                </span>
                                    <div class="cst-div">
                                        <div class="inner">
                                            <?php echo get_the_title( 166 ); ?>
                                            <div class="image-container">
                                                <?php echo get_the_post_thumbnail( 166, 'section_image_medium' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo get_the_permalink( 172 ); ?>" class="nav-link co-btn type-fill" id="v-pills-profile-tab">
                                <?php echo get_the_title( 172 ); ?>
                                <div class="marker">
                <span class="material-symbols-sharp">
                  location_on
                </span>
                                    <div class="cst-div">
                                        <div class="inner">
                                            <?php echo get_the_title( 172 ); ?>
                                            <div class="image-container">
                                                <?php echo get_the_post_thumbnail( 172, 'section_image_medium' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo get_the_permalink( 248 ); ?>" class="nav-link co-btn type-fill" id="v-pills-messages-tab">
                                <?php echo get_the_title( 248 ); ?>
                                <div class="marker">
                <span class="material-symbols-sharp">
                  location_on
                </span>
                                    <div class="cst-div">
                                        <div class="inner">
                                            <?php echo get_the_title( 248 ); ?>
                                            <div class="image-container">
                                                <?php echo get_the_post_thumbnail( 248, 'section_image_medium' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo get_the_permalink( 250 ); ?>" class="nav-link co-btn type-fill" id="v-pills-settings-tab">
                                <?php echo get_the_title( 250 ); ?>
                                <div class="marker">
                <span class="material-symbols-sharp">
                  location_on
                </span>
                                    <div class="cst-div">
                                        <div class="inner">
                                            <?php echo get_the_title( 250 ); ?>
                                            <div class="image-container">
                                                <?php echo get_the_post_thumbnail( 250, 'section_image_medium' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="marker">
                <span class="material-symbols-sharp">
                  location_on
                </span>
                                    <div class="cst-div">
                                        <div class="inner">
                                            <?php echo get_the_title( 250 ); ?>
                                            <div class="image-container">
                                                <?php echo get_the_post_thumbnail( 250, 'section_image_medium' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="marker">
                <span class="material-symbols-sharp">
                  location_on
                </span>
                                    <div class="cst-div">
                                        <div class="inner">
                                            <?php echo get_the_title( 250 ); ?>
                                            <div class="image-container">
                                                <?php echo get_the_post_thumbnail( 250, 'section_image_medium' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section-links">
                    <a href="<?php echo site_url(); ?>/our-brands/" class="co-btn type-fill" id="defaultbtn">Explore all Brands</a>
                </div>
                <div class="map-ns">
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/MapNS.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
