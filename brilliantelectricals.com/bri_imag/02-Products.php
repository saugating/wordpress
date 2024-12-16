<?php
/**
 * Template Name: Products Template
 *
 * @package WordPress
 */
$postid = get_the_ID();
get_header(); ?>

<div id="products-page">
  <section class="common-breadcrumbs">
    <div class="custom-container remove-bottom-padding">
      <ul>
        <li>
          <a href="<?php echo site_url(); ?>/">Brilliant</a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/products/">Products</a>
        </li>
      </ul>
    </div>
  </section>
  <section class="catalog">
    <div class="custom-container">
      <div class="common-flex-container">
        <div class="section-title">
          <h1>
            Our Products
          </h1>
        </div>
      </div>
      <div class="filer-box">
        <ul>
          <li class="filter-btn">
            <span class="material-symbols-sharp">
              tune
            </span>
            Filter
            <ul>
              <?php
                $args = array(
                  'taxonomy' => 'product_category',
                  'orderby' => 'name',
                  'order'   => 'ASC'
                );

                $cats = get_categories($args);

                foreach($cats as $cat) {
                  ?>
                  <a href="<?php echo get_category_link( $cat->term_id ) ?>">
                    <?php echo $cat->name; ?>s
                  </a>
                  <?php
                }
              ?>
            </ul>
          </li>
          <li>
            <a href="<?php echo site_url(); ?>/products/">All</a>
          </li>
        </ul>
        <ul class="sub-menu">
          <?php
            $args = array(
              'taxonomy' => 'product_category',
              'orderby' => 'name',
              'order'   => 'ASC'
            );

            $cats = get_categories($args);

            foreach($cats as $cat) {
              ?>
              <a href="<?php echo get_category_link( $cat->term_id ) ?>">
                <?php echo $cat->name; ?>s
              </a>
              <?php
            }
          ?>
        </ul>
      </div>
      <div class="card-wrapper">
        <?php
        $the_query = new WP_Query( array(
            'post_type' => 'product',
            'posts_per_page' => -1,
        ) );
        while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
        <div class="card-item">
          <div class="section-container">
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
              </a>
            </div>
            <div class="section-title">
              <h4>
                <a href="<?php the_permalink(); ?>">
                  <?php echo the_title(); ?>
                </a>
              </h4>
              <p>
                <?php $terms = get_the_terms( $post->ID , 'product_category' );
                  foreach ( $terms as $term ) {
                    $term_link = get_term_link( $term, 'product_category' );
                    if( is_wp_error( $term_link ) )
                    continue;
                    echo  $term->name;
                  }
                ?>
              </p>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
