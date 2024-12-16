<?php

$postid = get_the_ID();

get_header(); ?>

<div id="values-post-page">

  <div class="custom-container">
      <div class="section-container">
        <div class="image-container">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="section-title">
          <h2><?php echo the_title(); ?></h2>
        </div>
        <div class="section-body">
          <?php echo get_the_content(); ?>
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
