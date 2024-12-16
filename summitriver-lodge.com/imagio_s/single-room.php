<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

    <div id="single-room-page">
      <section class="common-banner-section type-no-mobile">
        <div class="banner-slider">
          <div class="banner-item">
            <?php the_post_thumbnail('full'); ?>
            <div class="text-container">
              <div class="custom-container">
                <div class="common-banner-title">
                  <div class="top-heading">
                    <h6>Accommodation</h6>
                  </div>
                  <div class="title">
                    <h1><?php echo the_title(); ?></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

        <section class="common-title-section">
            <div class="custom-container remove-bottom-padding small-width-container">
                <div class="section-title remove-bottom-margin add-bottom-border">
                    <div class="section-inner">
                        <div class="title content">
                            <?php echo the_content(); ?>
                        </div>

                        <div class="action">
                            <h4 class="medium-font"><?php the_field( 'price' )?></h4>

                            <?php if( get_field('disclaimer') ): ?>
                                <?php the_field('disclaimer'); ?>
                            <?php endif; ?>


                            <a href="#" class="co-btn type-large-font type-underline open-enquiry">Make Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="common-gallery-section">
            <div class="custom-container">
                <div class="gallery-container">
                    <?php
                    $images = rwmb_meta( 'tia_gallery', array( 'size' => 'full' ) );
                    foreach ( $images as $image ) {  ?>
                        <div class="gallery-item">
                            <div class="inner">
                                <a href="<?php echo $image['url']?>" data-lightbox="photo-gallery" data-title="">
                                    <img src="<?php echo $image['url']?>">
                                </a>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>

        <section class="room-features-section">
            <div class="custom-container smallest-width-container remove-top-padding">
                <div class="section-title">
                    <h3>Facilities & Amenities</h3>
                </div>
                <div class="room-features-container">
                    <ul>
                        <?php if ( 'true' == get_field('wifi') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wifi.svg" alt="">
                                <h5>Wifi</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('led_television') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/tv.svg" alt="">
                                <h5>Led Television</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('air_conditioning') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/ac.svg" alt="">
                                <h5>Air Conditioning</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('safe_locker') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/safe.svg" alt="">
                                <h5>Safe Locker</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('hair_dryer') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/dryer.svg" alt="">
                                <h5>Hair Dryer</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('work_desk') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/desk.svg" alt="">
                                <h5>Work Desk</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('king_size_bed') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/kingsize-bed.svg" alt="">
                                <h5>King Size Bed</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('balcony') ): ?>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/balcony.svg" alt="">
                                <h5>Balcony</h5>
                            </li>
                        <?php endif; ?>

                        <?php if ( 'true' == get_field('wardrobe') ): ?>
                            <li>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wardrobe.png" alt="">
                                <h5>Wardrobe</h5>
                            </li>
                        <?php endif; ?>
                        <!-- <?php /*if ( 'true' == get_field('laundry_machine') ): */?>
                            <li>
                                <img src="<?php /*echo get_stylesheet_directory_uri(); */?>/img/icons/laundry-machine-.png" alt="">
                                <h5>Laundry Service</h5>
                            </li>
                        --><?php /*endif; */?>
                    </ul>
                </div>
            </div>
        </section>

        <section class="common-testimonial-section">
            <div class="custom-container remove-top-padding">
                <div class="testimonial-container">
                    <?php query_posts('post_type=testimonial&posts_per_page=-1'); while(have_posts()): the_post(); ?>
                        <div class="testimonial-item">
                            <div class="text-container">
                                <div class="title">
                                    <h4><?php echo the_title(); ?></h4>
                                </div>
                                <div class="content">
                                    <?php echo the_content(); ?>
                                </div>
                                <div class="name">
                                    <h6>- <?php the_field( 'author_name' )?></h6>
                                </div>
                            </div>
                            <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/trip-advisor.png">
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </section>

        <section class="common-quick-nav">
            <div class="custom-container remove-top-padding">
                <div class="back-container">
                    <ul>
                        <li><a href="<?php echo site_url(); ?>/accomodation">back to STAY</a></li>
                    </ul>
                </div>
                <div class="nav-container">
                    <ul>
                        <?php $prev_post = get_previous_post(); if (!empty( $prev_post )): ?>
                            <li class="type-left"><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="flaticon-left-1"></i> <?php echo $prev_post->post_title; ?></a></li>
                        <?php endif; ?>


                        <?php $next_post = get_next_post(); if (!empty( $next_post )): ?>
                            <li class="type-right"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?> <i class="flaticon-right"></i></a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </section>

        <!--<section class="contact-section">
            <div class="custom-container full-width type-medium-width">
                <div class="section-title type-one">
                    <h3>Choose how to book</h3>
                    <div class="content">
                        <p>All the premium rooms are provided with</p>
                    </div>
                </div>

                <div class="info-container">
                    <ul>
                        <li><img src="img/icons/cal.svg" alt=""><h6>Enquire For Booking</h6></li>
                        <li><img src="img/icons/call-us.svg" alt=""><h6>Call Us</h6><span>+977 9849551030</span></li>
                        <li><img src="img/icons/mail.svg" alt=""><h6>Email Us At</h6><span>info@summitriverlodge.com</span></li>
                    </ul>
                </div>
            </div>
        </section>-->
    </div>

<?php endif; ?>

<?php get_footer(); ?>
