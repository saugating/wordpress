<?php
get_header();
?>

<?php if(have_posts()): the_post(); ?>

  <div id="single-page">
    <section class="article-content">
      <div class="custom-container section-container type-small">
        <div class="section-info">
          <ul>
            <li>
              <?php
              foreach((get_the_category()) as $category) {
                echo $category->cat_name . ' ';
              }
              ?>
            </li>
          </ul>
        </div>

        <div class="section-title">
          <h1><?php the_title();?></h1>
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
    </section>
    <section class="similar-projects backdrop">
      <div class="custom-container type-small">
        <div class="section-container">
          <div class="section-title">
            <h2>
              <span>Similar</span> <?php
              foreach((get_the_category()) as $category) {
                echo $category->cat_name . 's ';
              }
              ?>
            </h2>
          </div>
        </div>
        <div class="section-body">
          <div class="card-wrapper">
            <?php
            $related = new WP_Query(
              array(
                'category__in'   => wp_get_post_categories( $post->ID ),
                'posts_per_page' => 3,
                'post__not_in'   => array( $post->ID )
              )
            );
            ?>
            <?php  if( $related->have_posts() ) {
              while( $related->have_posts() ) {
                $related->the_post();
                ?>

                <div class="card-item">
                  <div class="section-container">
                    <div class="image-container">
                      <a href="<?php the_permalink();?>">
                        <?php
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail('image_small');
                        }
                        else {
                          echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
                        }
                        ?>
                      </a>
                    </div>
                    <div class="section-info">
                      <p>
                        <?php echo get_the_date(); ?>
                      </p>
                    </div>
                    <div class="section-title">
                      <h4>
                        <a href="<?php the_permalink();?>">
                          <?php the_title();?>
                        </a>
                      </h4>
                    </div>
                  </div>
                </div>
                <?php
              }
              wp_reset_postdata();
            }?>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php endif; ?>

<?php get_footer(); ?>
