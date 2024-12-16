<?php
/**
* Template Name: Lavie Residence Template
*
* @package WordPress
* @subpackage Imagio Creations
* @since Imagio Creations 2021
* @author Imagio Creations
*/
$postid = get_the_ID();
get_header(); ?>

<div id="lavie-garden">

  <section class="common-page-intro">
    <div class="custom-container remove-top-bottom-padding">
      <div class="common-page-title cst-fade">
        <span>Our Brands</span>
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="slider-box cst-fade">
        <?php if( have_rows('slider') ): ?>
          <div class="slider-container">
            <div class="item-slider">
              <?php while( have_rows('slider') ): the_row(); ?>
                <div class="item">
                  <div class="image-container">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                  </div>
                </div>
              <?php endwhile; wp_reset_query();?>
            </div>
          </div>
        <?php endif; wp_reset_query();?>
      </div>
    </div>
  </section>

  <section class="common-lavie-intro">
    <div class="custom-container">
      <div class="lavie-container">
        <div class="logo cst-fade">
          <div class="image-container">
            <img src="<?php the_field('logo'); ?>" alt="">
          </div>
        </div>
        <div class="quickinfos cst-fade">
          <ul>
            <?php if( have_rows('address') ): ?>
              <?php while( have_rows('address') ): the_row(); ?>
                <li>
                  <a href="#">
                    <div class="flex-cont">
                      <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_map.svg" alt="">
                      </div>
                      <?php the_sub_field('location'); ?>
                    </div>
                  </a>
                </li>
              <?php endwhile; wp_reset_query();?>
            <?php endif; wp_reset_query();?>
          </ul>
        </div>
        <div class="title cst-fade">
          <h2>About <?php the_title(); ?></h2>
        </div>
        <div class="content cst-fade">
          <?php the_field('page_description'); ?>
        </div>
      </div>
      <div class="common-divider cst-fade">
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fly_L.svg" alt="">
        </div>
      </div>
      <div class="video-container">
        <div class="title cst-fade">
          <h2>Our Videos</h2>
        </div>
        <div class="flex-cont">
          <?php if( have_rows('video', 172) ): ?>
            <?php while( have_rows('video', 172) ): the_row(); ?>
              <div class="flex-item cst-fade">
                <div class="youtube-container">
                  <iframe src="https://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>?autoplay=1&mute=1&loop=1&controls=0&playlist=<?php the_sub_field('video_id'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
            <?php endwhile; wp_reset_query();?>
          <?php endif; wp_reset_query();?>
        </div>
      </div>
    </div>
    <!--    <div class="custom-container room-accomadation">-->
    <!--      <div class="common-title center cst-fade">-->
    <!--        <div class="section-container">-->
    <!--          <h1>Rooms</h1>-->
    <!--          <h2>Accommodations</h2>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="card-wrapper">-->
    <!--        --><?php //if( have_rows('accomodation') ): ?>
    <!--          --><?php //while( have_rows('accomodation') ): the_row(); ?>
    <!--            <div class="card-item">-->
    <!--              <div class="section-container">-->
    <!--                <div class="image-container cst-fade">-->
    <!--                  <img src="--><?php //the_sub_field('banner'); ?><!--" alt="">-->
    <!--                </div>-->
    <!--                <div class="section-title cst-fade">-->
    <!--                  <h3>--><?php //the_sub_field('title'); ?><!--</h3>-->
    <!--                </div>-->
    <!--                <div class="section-content cst-fade">-->
    <!--                  <p>--><?php //the_sub_field('content'); ?><!--</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          --><?php //endwhile; wp_reset_query();?>
    <!--        --><?php //endif; wp_reset_query();?>
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="custom-container tranquility-spa">-->
    <!--      --><?php //if( have_rows('spa') ): ?>
    <!--        --><?php //while( have_rows('spa') ): the_row(); ?>
    <!--          <div class="flex-cont">-->
    <!--            <div class="flex-item">-->
    <!--              <div class="common-title cst-fade">-->
    <!--                <div class="section-container">-->
    <!--                  <h2>--><?php //the_sub_field('title'); ?><!--</h2>-->
    <!--                  --><?php //the_sub_field('content'); ?>
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="image-container cst-fade">-->
    <!--                <img src="--><?php //the_sub_field('image_one'); ?><!--" alt="">-->
    <!--              </div>-->
    <!--              <div class="image-container cst-fade">-->
    <!--                <img src="--><?php //the_sub_field('image_two'); ?><!--" alt="">-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="flex-item">-->
    <!--              <div class="image-container cst-fade">-->
    <!--                <img src="--><?php //the_sub_field('banner'); ?><!--" alt="">-->
    <!--              </div>-->
    <!--              <div class="desc cst-fade">-->
    <!--                <p>-->
    <!--                  --><?php //the_sub_field('sub_title'); ?>
    <!--                </p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        --><?php //endwhile; wp_reset_query();?>
    <!--      --><?php //endif; wp_reset_query();?>
    <!--    </div>-->
  </section>

  <section class="common-gallery">
    <div class="custom-container">
      <div class="common-title cst-fade">
        <div class="section-container">
          <h1>Photo</h1>
          <h2>Gallery</h2>
        </div>
      </div>
      <?php if( have_rows('gallery') ): ?>
        <div class="slider-box cst-fade">
          <div class="gallery-container">
            <div class="item-slider">
              <?php while( have_rows('gallery') ): the_row(); ?>
                <div class="item">
                  <div class="image-container">
                    <?php
                    $image = get_sub_field('image');
                    if( $image ):
                      // Image variables.
                      $url = $image['url'];
                      $title = $image['title'];
                      $alt = $image['alt'];
                      $caption = $image['caption'];
                      // Thumbnail size attributes.
                      $size = 'section_image_medium';
                      $thumb = $image['sizes'][ $size ];
                      $width = $image['sizes'][ $size . '-width' ];
                      $height = $image['sizes'][ $size . '-height' ]; ?>

                      <a href="<?php echo esc_url($url); ?>" data-lightbox="photo-gallery">
                        <img src="<?php echo esc_url($thumb); ?>" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/placeholder-image.webp'">
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endwhile; wp_reset_query();?>
            </div>
          </div>
        </div>
      <?php endif; wp_reset_query();?>
    </div>
  </section>

  <section>
    <div class="common-backdrop lavie_residence" id="book-now">
      <div class="custom-container remove-top-bottom-padding">
        <div class="block-cont">
          <div class="block-item">
            <div class="common-title type-white cst-fade">
              <div class="section-container">
                <h1>Online</h1>
                <h2>Book your Perfect Getaway</h2>
              </div>
            </div>
          </div>
          <div class="block-item">
            <div class="common-form cst-fade">
              <?php echo do_shortcode('[contact-form-7 id="594" title="Reservation Lavie Residence"]');?>
            </div>
          </div>
        </div>
      </div>
      <div class="gradient">
      </div>
    </div>
  </section>

</div>

<script>
$(document).ready(function () {
  $('body').addClass('no-footer-form');
});
</script>

<?php get_footer(); ?>
