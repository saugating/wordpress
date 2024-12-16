<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

  <div id="single-product-page">

    <section class="products-intro">
      <div class="custom-container">
        <div class="block-container">
          <div class="block-item">
            <div class="image-container">
              <?php the_post_thumbnail('section_image_medium'); ?>
            </div>
          </div>
          <div class="block-item">
            <div class="section-container">
              <div class="section-title">
                <h4><?php the_title(''); ?></h4>
              </div>
              <div class="section-body">
                <?php the_content(''); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="products-overview">
      <div class="custom-container">
        <div class="block-container">
          <?php if( have_rows('overview') ): ?>
            <?php while( have_rows('overview') ): the_row(); ?>
              <div class="block-item">
                <div class="section-container center">
                  <?php if( have_rows('overview_items') ): ?>
                    <?php
                    while( have_rows('overview_items') ): the_row(); ?>
                    <div class="section-title">
                      <h4><?php the_sub_field('details'); ?></h4>
                    </div>
                    <div class="section-body">
                      <?php the_sub_field('title'); ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="products-gallery">
      <div class="gallery-item">
        <div class="my-gallery grid-container">
          <?php if( have_rows('gallery') ): ?>
            <?php while( have_rows('gallery') ): the_row(); ?>
              <figure class="grid-item">
                <?php
                    $image = get_sub_field('images');
                    if( $image ):

                      // Image variables.
                      $url = $image['url'];
                      $title = $image['title'];
                      $alt = $image['alt'];
                      $caption = $image['caption'];

                      // Thumbnail size attributes.
                      $size = 'section_image';
                      $thumb = $image['sizes'][ $size ];
                      $width = $image['sizes'][ $size . '-width' ];
                      $height = $image['sizes'][ $size . '-height' ];

                      // Begin caption wrap.
                      if( $caption ): ?>
                      <div class="wp-caption">
                      <?php endif; ?>

                      <a href="<?php echo esc_url($url); ?>" data-lightbox="photo-gallery">
                        <img src="<?php echo esc_url($thumb); ?>" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/placeholder-image.webp'">
                      </a>

                      <?php
                      // End caption wrap.
                      if( $caption ): ?>
                      <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>

              </figure>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="products-details">
      <div class="custom-container">
        <div class="common-tabs-container">
          <div class="tabs-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Description</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Measurement & Dimensions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Layers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Packaging & Shipping</a>
              </li>
            </ul>
          </div>
          <div class="tabs-body type-small-padding">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="section-container">
                  <div class="section-body">
                    <?php if( have_rows('description') ): ?>
                      <!--<ul>-->
                        <?php while( have_rows('description') ): the_row(); ?>
                          <!--<li>-->
                            <?php the_sub_field('descriptions_list'); ?>
                          <!--</li>-->
                        <?php endwhile; ?>
                      <!--</ul>-->
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="section-container">
                  <div class="section-body">
                    <?php if( have_rows('features') ): ?>
                      <!--<ul>-->
                        <?php while( have_rows('features') ): the_row(); ?>
                          <!--<li>-->
                            <?php the_sub_field('features_list'); ?>
                          <!--</li>-->
                        <?php endwhile; ?>
                      <!--</ul>-->
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <div class="section-container">
                  <div class="section-body">
                    <?php if( have_rows('packaging') ): ?>
                      <!--<ul>-->
                        <?php while( have_rows('packaging') ): the_row(); ?>
                          <!--<li>-->
                            <?php the_sub_field('packaging_list'); ?>
                          <!--</li>-->
                        <?php endwhile; ?>
                      <!--</ul>-->
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <div class="section-container">
                  <div class="section-body">
                    <?php if( have_rows('benefits') ): ?>
                      <!--<ul>-->
                        <?php while( have_rows('benefits') ): the_row(); ?>
                          <!--<li>-->
                            <?php the_sub_field('benefits_list'); ?>
                          <!--</li>-->
                        <?php endwhile; ?>
                      <!--</ul>-->
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <script>
      $(document).ready(function () {
          $('body').addClass('simple-header');
      });
  </script>

<?php endif; ?>

<?php get_footer(); ?>
