<?php
get_header();
if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="custom-container remove-top-padding">
      <div class="section-title">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="section-body">
        <?php the_content(); ?>
      </div>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
