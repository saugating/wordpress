<?php
/**
 * Template Name: Projects Template
 *
 * @package WordPress
 */
$postid = get_the_ID();
get_header(); ?>

<div id="projects-page">
  <div class="custom-container type-small">
    <div class="projects-title">
      <div class="common-title">
        <div class="section-container">
          <div class="section-info">
            <ul>
              <li>
                <?php echo the_title(); ?>
              </li>
            </ul>
          </div>
          <div class="section-title">
            <h1>
              <?php the_field( 'intro_title' ); ?>
            </h1>
          </div>
          <div class="section-body">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="projects-overview">
        <span>Total</span>
        <span>Projects</span>
        <h1>
          <?php
          $id = 4;
          $category = get_category($id);
          $count = $category->category_count;
          echo $count;
          ?>
        </h1>
      </div>
    </div>
    <div class="card-wrapper">
      <?php
      $the_query = new WP_Query( array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'tax_query' => array(
              array (
                  'taxonomy' => 'category',
                  'field' => 'slug',
                  'terms' => 'project',
              )
          ),
      ) );
      while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
      <div class="card-item">
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
            <p>
              <?php echo get_the_date(); ?>
            </p>
          </div>
          <div class="section-title">
            <h4>
              <a href="<?php the_permalink(); ?>">
                <?php echo the_title(); ?>
              </a>
            </h4>
          </div>
          <div class="section-links">
            <a href="<?php the_permalink(); ?>" class="co-btn">Know Now</a>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>

    <!-- <div class="common-pagination">
      <ul>
        <li class="active">
          <a href="#">1</a>
        </li>
        <li>
          <a href="#">2</a>
        </li>
        <li>
          <a href="#">3</a>
        </li>
      </ul>
    </div> -->
  </div>
</div>

<?php get_footer(); ?>
