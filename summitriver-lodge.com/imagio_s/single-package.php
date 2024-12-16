<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

    <div id="single-package-page">
      <section class="common-banner-section type-no-mobile">
        <div class="banner-slider">
          <div class="banner-item">
            <?php the_post_thumbnail('full'); ?>
            <div class="text-container">
              <div class="custom-container">
                <div class="common-banner-title">
                  <div class="top-heading">
                    <h6>Packages</h6>
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
          <div class="custom-container small-width-container remove-bottom-padding">
            <div class="section-title remove-bottom-margin add-bottom-border">
              <div class="section-inner">
                <div class="title content">
                  <h4><?php echo the_content(); ?></h4>
                </div>
                <div class="title content">
                  <h4>Need to Know</h4>
                  <ul>
                    <li>Package offerings vary by property and location</li>
                    <li>Check rate details for the full offer inclusions</li>
                    <li>Book by October 31, 2022</li>
                    <li>Promotional Code: ZJL</li>
                    <li>Valid Stay Dates: July 1, 2022 - November 6, 2022</li>
                  </ul>
                </div>
                <div class="title content">
                  <h4>Description</h4>
                  <p>
                    Create new memories this summer with our favorite packages of the season and save.
                    Available at participating properties in the U.S., Canada, Caribbean and Latin America.
                  </p>
                </div>
                <div class="title content">
                  <h4>Whats Included</h4>
                  <ul>
                    <?php while( have_rows('whats_included') ): the_row(); ?>
                      <li>
                        <?php the_sub_field('included_items'); ?>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <div class="title content">
                  <h4>Whats Excluded</h4>
                  <ul>
                    <?php while( have_rows('whats_excluded') ): the_row(); ?>
                      <li>
                        <?php the_sub_field('excluded_items'); ?>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <div class="title content">
                  <h4>How to Book:</h4>
                  <p>
                    Be sure that the Promotional Code appears in the Corporate/Promotional code box when making your online reservation,
                    or call 1-800-228-9290 and ask for the promotional code.
                    For toll-free numbers outside the US please visit Global Reservation Numbers.
                  </p>
                </div>
                <!-- <div class="action">
                  <h4 class="medium-font"><?php the_field('package_price'); ?> + 13% VAT</h4>
                  <ul>
                    <li><?php the_field('package_speciality'); ?></li>
                    <li>13% Vat will Apply</li>
                  </ul>
                  <a href="#" class="co-btn type-large-font type-underline open-enquiry">Make Enquiry</a>
                </div> -->
              </div>
            </div>
          </div>
        </section>

        <!-- <section class="included-excluded">
          <div class="custom-container">
            <div class="block-container">
              <div class="block-item">
                <div class="inner">
                  <div class="text-container">
                    <?php if( have_rows('whats_included') ): ?>
                      <div class="title">
                        <h3>What's Included</h3>
                      </div>
                      <div class="content">
                        <ul>
                          <?php while( have_rows('whats_included') ): the_row(); ?>
                            <li>
                              <p><?php the_sub_field('included_items'); ?></p>
                            </li>
                          <?php endwhile; ?>
                        </ul>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="block-item">
                <div class="inner">
                  <div class="text-container">
                    <?php if( have_rows('whats_excluded') ): ?>
                      <div class="title">
                        <h3>What's Excluded</h3>
                      </div>
                      <div class="content">
                          <ul>
                            <?php while( have_rows('whats_excluded') ): the_row(); ?>
                              <li>
                                <p><?php the_sub_field('excluded_items'); ?></p>
                              </li>
                            <?php endwhile; ?>
                          </ul>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <section class="common-quick-nav">
            <div class="custom-container remove-top-padding">
                <div class="back-container">
                    <ul>
                        <li><a href="<?php echo site_url(); ?>/packages/">back to PACKAGES</a></li>
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
    </div>
<?php endif; ?>

<?php get_footer(); ?>
