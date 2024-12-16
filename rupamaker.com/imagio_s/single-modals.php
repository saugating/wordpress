<?php
$postid = get_the_ID();

get_header(); ?>

<div id="common-page">

  <div class="custom-container remove-top-padding">
    <div class="section-container">
      <div class="section-title">
        <h1>
          <?php echo the_title(); ?>
        </h1>
      </div>
      <div class="section-body">
        <div class="image-container">
          <img src="<?php the_field('banner_image'); ?>" alt=""/>
        </div>
      </div>
      <div class="section-body">
        <p>
          <?php the_field('history_intro'); ?>
        </p>
      </div>
      <div class="section-body">
        <div class="image-container">
          <img src="<?php the_field('history_image_first'); ?>" alt=""/>
        </div>
      </div>
      <div class="section-body">
        <p>
          <?php the_field('history_content'); ?>
        </p>
      </div>
      <div class="section-body">
        <div class="image-container">
          <img src="<?php the_field('history_image_second'); ?>" alt=""/>
        </div>
      </div>
      <div class="section-body">
        <p>
          <?php the_field('history_content_last'); ?>
        </p>
      </div>
    </div>
  </div>

</div>
<script>
    $(document).ready(function () {
        $('body').addClass('without-banner');
    });
</script>

<?php get_footer(); ?>
