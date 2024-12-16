<?php
/**
* Template Name: Menu Lekali Template
*
* @package WordPress
* @subpackage Imagio Creations
* @since Imagio Creations 2021
* @author Imagio Creations
*/
$postid = get_the_ID();
get_header(); ?>

<div id="lavie-menu">

  <section class="menu-container">
    <div class="custom-container">
      <?php if( have_rows('menu') ): ?>
        <?php while( have_rows('menu') ): the_row(); ?>
          <img src="<?php echo the_sub_field('image'); ?>" alt="">
        <?php endwhile; wp_reset_query();?>
      <?php endif; wp_reset_query();?>
    </div>
  </section>

  <section>
    <div class="common-backdrop lavie_thakali" id="book-now">
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
              <?php echo do_shortcode('[contact-form-7 id="595" title="Reservation Lavie Thakali"]');?>
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
