<?php
/**
 * Template Name: Blog Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="blog-page">

  <section class="common-page-intro">
    <div class="custom-container remove-top-padding">
      <div class="common-page-title cst-fade">
        <h1><?php echo the_field('page_title')?></h1>
        <p><?php echo the_field('page_description')?></p>
      </div>
      <div class="card-wrapper">
        <?php
        $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => -1,
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
    </div>
  </section>
</div>

<?php get_footer(); ?>
