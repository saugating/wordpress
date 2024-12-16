<?php
get_header();
?>

<?php if(have_posts()): the_post(); ?>

  <div id="single-page">

    <section class="common-page-intro">
      <div class="custom-container remove-top-bottom-padding type-margin">
        <div class="common-page-title">
          <div class="section-info">
            <ul>
              <li>
                <?php
                $category = get_the_category();
                echo $category[0]->cat_name;
                ?>
              </li>
              <li><?php echo get_the_date(); ?></li>
            </ul>
          </div>
          <h1><?php the_title();?></h1>
        </div>
        <div class="slider-box">
          <div class="image-container">
            <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('section_image');
            }
            else {
              echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
            }
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="single-container">
      <div class="custom-container">
        <div class="inner">
          <div class="sub-header cst-fade">
            <h3>
              <?php echo the_field('sub_header')?>
            </h3>
          </div>
          <div class="single-content cst-fade">
            <?php the_content();?>
          </div>
        </div>
      </div>
    </section>

    <section class="related-items">
      <div class="custom-container">
        <div class="common-title center">
          <div class="section-container">
            <h1>Recent</h1>
            <h2>News & Blogs</h2>
          </div>
        </div>
        <div class="card-wrapper">
          <?php
          $the_query = new WP_Query( array(
              'post_type' => 'post',
              'posts_per_page' => 4,
              'post__not_in'   => array( $post->ID ),
          ) );
          while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
          <div class="card-item cst-fade">
            <div class="section-container">
              <div class="image-container">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('section_image_medium');
                  }
                  else {
                    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
                  }
                  ?>
                </a>
              </div>
              <div class="section-info">
                <ul>
                  <li>
                    <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                    ?>
                  </li>
                  <li>
                    <?php echo get_the_date(); ?>
                  </li>
                </ul>
              </div>
              <div class="section-title">
                <h3><?php echo the_title(); ?></h3>
              </div>
              <div class="section-links">
                <a href="<?php the_permalink(); ?>" class="co-btn type-fill" id="eventsbtn">
                  View More
                </a>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
        <div class="view-all center">
          <a href="<?php echo site_url(); ?>/news-blogs/" class="co-btn type-fill">View All</a>
        </div>
      </div>
    </section>

  </div>

<?php endif; ?>

<?php get_footer(); ?>
