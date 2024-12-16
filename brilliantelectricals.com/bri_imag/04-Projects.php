<?php
/**
 * Template Name: Projects Template
 *
 * @package WordPress
 */
$postid = get_the_ID();
get_header(); ?>

<div id="projects-page">
  <section class="common-breadcrumbs">
    <div class="custom-container remove-bottom-padding">
      <ul>
        <li>
          <a href="<?php echo site_url(); ?>/">Brilliant</a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/projects/">Projects</a>
        </li>
      </ul>
    </div>
  </section>
  <section class="common-intro">
    <div class="custom-container">
      <div class="common-flex-container">
        <div class="section-title">
          <h1>
            Projects
          </h1>
        </div>
      </div>
      <div class="intro">
        <p><?php echo the_field('intro') ?></p>
      </div>
    </div>
  </section>
  <section>
    <div class="custom-container remove-top-padding">
      <div class="project-container">
          <?php
            $the_query = new WP_Query( array(
              'post_type' => 'project',
              'posts_per_page' => 8,
            ) );
            while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
              <div class="project-item">
                <div class="image-container">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail('image_small');
                    }
                    else {
                      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
                    }
                    ?>
                    <div class="section-container">
                      <div class="inner">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
