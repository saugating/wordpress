<?php
/**
 * Template Name: Career Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="career-page">

  <section class="common-gallery">
    <div class="custom-container">
      <div class="common-page-title cst-fade">
        <h1><?php echo the_field('page_title')?></h1>
        <p><?php echo the_field('page_description')?></p>
      </div>

      <div class="item-slider">
        <?php if( have_rows('gallery') ): ?>
          <?php while( have_rows('gallery') ): the_row(); ?>
            <div class="item">
              <div class="image-container cst-fade">
                <img src="<?php the_sub_field('image'); ?>" alt="">
              </div>
            </div>
          <?php endwhile; wp_reset_query();?>
        <?php endif; wp_reset_query();?>
      </div>
    </div>
  </section>

  <section class="vacancies">
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item">
          <div class="common-title cst-fade">
            <div class="section-container">
              <h1>Join the team</h1>
              <h2>Current Positions</h2>
            </div>
          </div>
          <div class="content cst-fade">
            <p>
              <?php echo the_field('positions_description')?>
            </p>
          </div>
        </div>
        <div class="flex-item">
          <?php
          $the_query = new WP_Query( array(
              'post_type' => 'career',
              'posts_per_page' => -1,
          ) );
          while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
          <div class="vacancies-item cst-fade">
            <div>
              <h3><?php echo the_title(); ?></h3>
              <div class="section-info">
                <ul>
                  <li><?php echo the_field('location'); ?></li>
                  <li><?php echo get_the_date(); ?></li>
                </ul>
              </div>
            </div>
            <div class="section-links">
              <a href="#applynow" class="co-btn type-fill even-padding">
                Apply
              </a>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="applynow">
    <div class="custom-container">
      <div class="common-page-title cst-fade">
        <h1>Apply Now</h1>
        <p>
          <?php echo the_field('apply_description')?>
        </p>
      </div>
      <div class="block-item">
        <div class="common-form type-black cst-fade">
          <?php echo do_shortcode('[contact-form-7 id="280" title="Apply Now"]');?>
        </div>
      </div>
    </div>
  </section>

</div>

<!-- <script>
    $(document).ready(function () {
        $('body').addClass('simple-header');
    });
</script> -->

<?php get_footer(); ?>
