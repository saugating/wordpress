<?php
/**
 * Template Name: About Us Template
 *
 * @package WordPress
 */
$postid = get_the_ID();
get_header(); ?>

<div id="about-page">
  <section class="common-breadcrumbs">
    <div class="custom-container remove-bottom-padding">
      <ul>
        <li>
          <a href="<?php echo site_url(); ?>/">Brilliant</a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/about/">About</a>
        </li>
      </ul>
    </div>
  </section>
  <section class="common-intro">
    <div class="custom-container">
      <div class="common-flex-container">
        <div class="section-title">
          <h1>
            About Us
          </h1>
        </div>
      </div>
      <div class="intro">
        <p><?php echo the_field('intro') ?></p>
      </div>
    </div>
  </section>
  <section class="image-divider">
    <img src="<?php echo the_field('imgdivider')?>" alt="">
  </section>
  <section class="history-container">
    <?php if( have_rows('history') ): ?>
      <?php while( have_rows('history') ): the_row(); ?>
        <div class="custom-container">
          <div class="block-container">
            <div class="block-item">
              <div class="section-container">
                <div class="section-title">
                  <h2>
                    History of<br/>
                    Brilliant Lights
                  </h2>
                </div>
                <div class="section-body">
                  <?php echo the_sub_field('details_first')?>
                </div>
              </div>
            </div>
            <div class="block-item">
              <div class="image-container">
                <img src="<?php echo the_sub_field('image_first')?>" alt="">
              </div>
            </div>
            <div class="block-item">
              <div class="section-container">
                <?php echo the_sub_field('details_second')?>
              </div>
            </div>
            <div class="block-item">
              <div class="image-container">
                <img src="<?php echo the_sub_field('image_second')?>" alt="">
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
  </section>
  <?php if( have_rows('mission') ): ?>
    <?php while( have_rows('mission') ): the_row(); ?>
      <section class="mission-container" style="background-image:url('<?php echo the_sub_field('background_image')?>');">
        <div class="custom-container">
          <div class="section-container">
            <div class="section-title">
              <h2 class="type-white">
                Mission & Vision
              </h2>
            </div>
            <div class="section-body">
              <?php echo the_sub_field('details')?>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; wp_reset_query(); ?>
  <section class="outro-container">
    <?php if( have_rows('outro') ): ?>
      <?php while( have_rows('outro') ): the_row(); ?>
        <div class="custom-container">
          <div class="section-container">
            <div class="outro-details">
              <?php echo the_sub_field('details')?>
            </div>
            <div class="section-title">
              <h2><?php echo the_sub_field('sub_title')?></h2>
            </div>
            <div class="section-body">
              <?php echo the_sub_field('outro_det')?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
  </section>
</div>

<?php get_footer(); ?>
