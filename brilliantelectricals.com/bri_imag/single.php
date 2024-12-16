<?php
get_header();
?>

<?php if(have_posts()): the_post(); ?>

  <div id="single-page">
    <section class="common-breadcrumbs">
      <div class="custom-container remove-bottom-padding">
        <ul>
          <li>
            <a href="<?php echo site_url(); ?>/">Brilliant</a>
          </li>
          <li>
            <a href="<?php echo site_url(); ?>/projects/">Projects</a>
          </li>
          <li>
            <?php the_title();?>
          </li>
        </ul>
      </div>
    </section>
    <section class="common-intro">
      <div class="custom-container">
        <div class="common-flex-container">
          <div class="section-title">
            <h1>
              <?php the_title();?>
            </h1>
          </div>
        </div>
        <div class="intro">
          <?php the_content();?>
        </div>
      </div>
    </section>
    <section class="slider-box">
      <div class="custom-container remove-top-padding">
        <?php if( have_rows('gallery') ): ?>
        <div class="gallery-item">
          <div class="gallery-slider type-main-gallery">
            <?php while( have_rows('gallery') ): the_row(); ?>
              <div class="image-item">
                <div class="inner">
                  <div class="image-container">
                    <img src="<?php echo the_sub_field('image')?>" alt="">
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
        <div class="gallery-item">
          <div class="gallery-slider type-nav-gallery">
            <?php while( have_rows('gallery') ): the_row(); ?>
              <div class="image-item">
                <div class="inner">
                  <div class="image-container">
                    <img src="<?php echo the_sub_field('image')?>" alt="">
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </section>

    <!-- <section class="article-content">
      <div class="custom-container">
        <div class="section-container">
          <div class="section-title">
            <h2><?php the_title();?></h2>
          </div>
          <div class="section-date">
            <p><span>Published on </span><?php echo get_the_date(); ?></p>
          </div>
          <div class="image-container">
            <?php the_post_thumbnail('image_large'); ?>
          </div>
          <div class="section-body">
            <?php the_content();?>
          </div>
        </div>
      </div>
    </section> -->

  </div>

<?php endif; ?>

<?php get_footer(); ?>
