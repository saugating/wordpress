<?php
/**
 * Template Name: Our Brands Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="brand-page">

  <section class="common-page-intro type-nomargin">
    <div class="custom-container">
      <div class="common-page-title type-large cst-fade">
        <h1><?php echo the_field('page_title')?></h1>
        <p><?php echo the_field('page_description')?></p>
      </div>
    </div>
  </section>

  <section class="brand-items">
    <div class="custom-container">
      <div class="flex-cont animation-area">
        <div class="flex-item ani-reveal-left">
          <div class="slider-box">
            <div class="brand-container">
              <?php if( have_rows('slider', 166) ): ?>
              <div class="item-slider">
                <?php while( have_rows('slider', 166) ): the_row(); ?>
                <div class="item">
                  <div class="image-container">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                  </div>
                </div>
                <?php endwhile; wp_reset_query();?>
              </div>
              <?php endif; wp_reset_query();?>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-container">
            <div class="image-container ani-reveal-left">
              <img src="<?php the_field('logo', 166); ?>" alt="">
            </div>
            <div class="section-title cst-fade">
              <h3><?php echo get_the_title( 166 ); ?></h3>
            </div>
            <div class="section-body cst-fade">
              <?php the_field('page_description', 166); ?>
            </div>
            <div class="section-links cst-fade">
              <a href="<?php echo get_the_permalink( 166 ); ?>" class="co-btn type-fill" id="defaultbtn">Explore More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-container">
      <div class="flex-cont animation-area">
        <div class="flex-item ani-reveal-left">
          <div class="slider-box">
            <div class="brand-container">
              <?php if( have_rows('slider', 172) ): ?>
              <div class="item-slider">
                <?php while( have_rows('slider', 172) ): the_row(); ?>
                <div class="item">
                  <div class="image-container">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                  </div>
                </div>
                <?php endwhile; wp_reset_query();?>
              </div>
              <?php endif; wp_reset_query();?>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-container">
            <div class="image-container ani-reveal-left">
              <img src="<?php the_field('logo', 172); ?>" alt="">
            </div>
            <div class="section-title cst-fade">
              <h3><?php echo get_the_title( 172 ); ?></h3>
            </div>
            <div class="section-body cst-fade">
              <?php the_field('page_description', 172); ?>
            </div>
            <div class="section-links cst-fade">
              <a href="<?php echo get_the_permalink( 172 ); ?>" class="co-btn type-fill" id="defaultbtn">Explore More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-container">
      <div class="flex-cont animation-area">
        <div class="flex-item ani-reveal-left">
          <div class="slider-box">
            <div class="brand-container">
              <?php if( have_rows('slider', 248) ): ?>
              <div class="item-slider">
                <?php while( have_rows('slider', 248) ): the_row(); ?>
                <div class="item">
                  <div class="image-container">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                  </div>
                </div>
                <?php endwhile; wp_reset_query();?>
              </div>
              <?php endif; wp_reset_query();?>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-container">
            <div class="image-container ani-reveal-left">
              <img src="<?php the_field('logo', 248); ?>" alt="">
            </div>
            <div class="section-title cst-fade">
              <h3><?php echo get_the_title( 248 ); ?></h3>
            </div>
            <div class="section-body cst-fade">
              <?php the_field('page_description', 248); ?>
            </div>
            <div class="section-links cst-fade">
              <a href="<?php echo get_the_permalink( 248 ); ?>" class="co-btn type-fill" id="defaultbtn">Explore More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-container">
      <div class="flex-cont animation-area">
        <div class="flex-item ani-reveal-left">
          <div class="slider-box">
            <div class="brand-container">
              <?php if( have_rows('slider', 250) ): ?>
              <div class="item-slider">
                <?php while( have_rows('slider', 250) ): the_row(); ?>
                <div class="item">
                  <div class="image-container">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                  </div>
                </div>
                <?php endwhile; wp_reset_query();?>
              </div>
              <?php endif; wp_reset_query();?>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-container">
            <div class="image-container ani-reveal-left">
              <img src="<?php the_field('logo', 250); ?>" alt="">
            </div>
            <div class="section-title cst-fade">
              <h3><?php echo get_the_title( 250 ); ?></h3>
            </div>
            <div class="section-body cst-fade">
              <?php the_field('page_description', 250); ?>
            </div>
            <div class="section-links cst-fade">
              <a href="<?php echo get_the_permalink( 250 ); ?>" class="co-btn type-fill" id="defaultbtn">Explore More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
