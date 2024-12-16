<?php
/**
* Template Name: Home Template
*
* @package WordPress
* @subpackage Imagio Creations
* @since Imagio Creations 2021
* @author Imagio Creations
*/
$postid = get_the_ID();
get_header(); ?>


<div id="home-page">
  <section class="common-page-intro type-nomargin">
    <div class="custom-container remove-top-bottom-padding type-margin">
      <div class="common-page-title type-large-home cst-fade">
        <h1><?php echo the_field('page_title')?></h1>
        <p><?php echo the_field('page_description')?></p>
      </div>
      <div class="divider cst-fade">
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fly_home.svg" alt="">
        </div>
      </div>
      <div class="video-container">
        <div class="inner playvideo">
          <video loop="true"  playsinline="" muted="" class="" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fly_home.svg">
            <source src="https://demos.imagio.com.np/frontend/lavie_cms/wp-content/uploads/2023/10/Lavie-Hospitality.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <!-- <div class="slider-box cst-fade">
        <div class="slider-container">
          <div class="item-slider">
            <?php if( have_rows('slider') ): ?>
              <?php while( have_rows('slider') ): the_row(); ?>
                <div class="item">
                  <div class="image-container">
                    <img src="<?php the_sub_field('image')?>" alt="">
                  </div>
                </div>
              <?php endwhile; wp_reset_query();?>
            <?php endif; wp_reset_query();?>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <section class="home-brand-section">
    <div class="custom-container remove-top-bottom-padding">
      <div class="flex-cont">
        <div class="flex-item">
          <div class="common-title cst-fade">
            <div class="section-container">
              <h2><?php the_field('brands_title')?></h2>
              <h1>Brands</h1>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="content cst-fade">
            <p>
              <?php the_field('brands_description')?>
            </p>
          </div>
          <div class="section-links cst-fade">
            <a href="<?php echo site_url(); ?>/our-brands/" class="co-btn type-fill" id="defaultbtn">Explore All brands</a>
          </div>
        </div>
      </div>
    </div>
    <div class="home-brand-container">
      <div class="custom-container">
        <div class="slider-box slider-box-card">
          <div class="home-brand-container">
            <div class="item-slider">
              <div class="item">
                <div class="inner cst-fade">
                  <div class="image-container">
                    <?php echo get_the_post_thumbnail( 166, 'section_image_medium' ); ?>
                  </div>
                  <div class="content">
                    <div class="common-logo">
                      <img src="<?php echo the_field( 'logo', 166 ); ?>" alt="">
                    </div>
                    <h3><?php echo get_the_title( 166 ); ?></h3>
                    <a href="<?php echo get_the_permalink( 166 ); ?>" class="co-btn type-fill">Viee More</a>
                  </div>
                  <div class="gradient">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner cst-fade">
                  <div class="image-container">
                    <?php echo get_the_post_thumbnail( 172, 'section_image_medium' ); ?>
                  </div>
                  <div class="content">
                    <div class="common-logo">
                      <img src="<?php echo the_field( 'logo', 172 ); ?>" alt="">
                    </div>
                    <h3><?php echo get_the_title( 172 ); ?></h3>
                    <a href="<?php echo get_the_permalink( 172 ); ?>" class="co-btn type-fill">Viee More</a>
                  </div>
                  <div class="gradient">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner cst-fade">
                  <div class="image-container">
                    <?php echo get_the_post_thumbnail( 248, 'section_image_medium' ); ?>
                  </div>
                  <div class="content">
                    <div class="common-logo">
                      <img src="<?php echo the_field( 'logo', 248 ); ?>" alt="">
                    </div>
                    <h3><?php echo get_the_title( 248 ); ?></h3>
                    <a href="<?php echo get_the_permalink( 248 ); ?>" class="co-btn type-fill">Viee More</a>
                  </div>
                  <div class="gradient">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner cst-fade">
                  <div class="image-container">
                    <?php echo get_the_post_thumbnail( 250, 'section_image_medium' ); ?>
                  </div>
                  <div class="content">
                    <div class="common-logo">
                      <img src="<?php echo the_field( 'logo', 250 ); ?>" alt="">
                    </div>
                    <h3><?php echo get_the_title( 250 ); ?></h3>
                    <a href="<?php echo get_the_permalink( 250 ); ?>" class="co-btn type-fill">Viee More</a>
                  </div>
                  <div class="gradient">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <section class="hospitality-section">
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item cst-fade">
          <div class="common-inner-image-wrap">
            <div class="image-wrap imgscroll1">
              <div class="image-container">
                <img src="<?php the_field('hospitality_image_one')?>" alt="">
              </div>
            </div>
            <div class="image-wrap imgscroll2">
              <div class="image-container">
                <img src="<?php the_field('hospitality_image_two')?>" alt="">
              </div>
            </div>
            <div class="image-wrap imgscroll3">
              <div class="image-container">
                <img src="<?php the_field('hospitality_image_three')?>" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="inner">
            <div class="common-title cst-fade">
              <div class="section-container">
                <h2 class="type-white"><?php the_field('hospitality_title')?></h2>
                <h1 class="type-white">Hospitality</h1>
              </div>
            </div>
            <div class="content cst-fade">
              <?php the_field('hospitality_description')?>
            </div>
            <div class="section-links cst-fade">
              <a href="<?php echo site_url(); ?>/about/" class="co-btn type-fill">Explore More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="common-flag">
        <div class="image-container">
          <img src="img/icons/icon_flag.svg" alt="">
        </div>
      </div>
      <div class="common-stupa">
        <div class="image-container">
          <img src="img/icons/icon_stupa.webp" alt="">
        </div>
      </div>
    </div>
    <div class="common-vert type-reverse">
      <p>About Lavie Hospitality</p>
    </div>
  </section>
  <section class="review-section">
    <div class="custom-container">
      <div class="common-title center">
        <div class="section-container cst-fade">
          <h1>Reviews</h1>
          <h2><?php echo the_field('reviews_title')?></h2>
        </div>
        <div class="content cst-fade">
          <p><?php echo the_field('reviews_description')?></p>
        </div>
      </div>
    </div>
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item common-tab">
          <div class="" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link co-btn type-fill active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Lavie Garden</a>
              <a class="nav-link co-btn type-fill" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Lavie Residence & Spa</a>
              <a class="nav-link co-btn type-fill" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lekali Bhoj Thakali</a>
              <a class="nav-link co-btn type-fill" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Jigri Sekuwa</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="slider-box slider-box-card">
                <div class="reviews-slider-container">
                  <div class="item-slider">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'review',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                          array (
                            'taxonomy' => 'review_category',
                            'field' => 'slug',
                            'terms' => 'lavie-garden',
                          )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                    <div class="item">
                      <div class="inner">
                        <div class="image-container">
                          <img src="<?php the_field('rating'); ?>" alt="">
                        </div>
                        <div class="content center">
                          <h3><?php echo the_field('title'); ?></h3>
                          <p>
                            <?php echo the_field('content'); ?>
                          </p>
                        </div>
                        <div class="title">
                          <p><?php echo the_title(); ?></p>
                        </div>
                        <div class="logo">
                          <img src="<?php echo the_field('platform'); ?>" alt="">
                        </div>
                      </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="slider-box slider-box-card">
                <div class="reviews-slider-container">
                  <div class="item-slider">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'review',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                          array (
                            'taxonomy' => 'review_category',
                            'field' => 'slug',
                            'terms' => 'lavie-residence-spa',
                          )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                    <div class="item">
                      <div class="inner">
                        <div class="image-container">
                          <img src="<?php the_field('rating'); ?>" alt="">
                        </div>
                        <div class="content center">
                          <h3><?php echo the_field('title'); ?></h3>
                          <p>
                            <?php echo the_field('content'); ?>
                          </p>
                        </div>
                        <div class="title">
                          <p><?php echo the_title(); ?></p>
                        </div>
                        <div class="logo">
                          <img src="<?php echo the_field('platform'); ?>" alt="">
                        </div>
                      </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <div class="slider-box slider-box-card">
                <div class="reviews-slider-container">
                  <div class="item-slider">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'review',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                          array (
                            'taxonomy' => 'review_category',
                            'field' => 'slug',
                            'terms' => 'lekali-bhoj-thakali',
                          )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                    <div class="item">
                      <div class="inner">
                        <div class="image-container">
                          <img src="<?php the_field('rating'); ?>" alt="">
                        </div>
                        <div class="content center">
                          <h3><?php echo the_field('title'); ?></h3>
                          <p>
                            <?php echo the_field('content'); ?>
                          </p>
                        </div>
                        <div class="title">
                          <p><?php echo the_title(); ?></p>
                        </div>
                        <div class="logo">
                          <img src="<?php echo the_field('platform'); ?>" alt="">
                        </div>
                      </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <div class="slider-box slider-box-card">
                <div class="reviews-slider-container">
                  <div class="item-slider">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'review',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                          array (
                            'taxonomy' => 'review_category',
                            'field' => 'slug',
                            'terms' => 'jigri-sekuwa',
                          )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                    <div class="item">
                      <div class="inner">
                        <div class="image-container">
                          <img src="<?php the_field('rating'); ?>" alt="">
                        </div>
                        <div class="content center">
                          <h3><?php echo the_field('title'); ?></h3>
                          <p>
                            <?php echo the_field('content'); ?>
                          </p>
                        </div>
                        <div class="title">
                          <p><?php echo the_title(); ?></p>
                        </div>
                        <div class="logo">
                          <img src="<?php the_field('platform'); ?>" alt="">
                        </div>
                      </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-container">
      <div class="view-all center cst-fade">
        <a href="#" class="co-btn type-fill">View All Reviews</a>
      </div>
    </div>
    <div class="common-vert">
      <p>Customer's Review</p>
    </div>
  </section>
  <section class="awards-section">
    <div class="custom-container">
      <div class="flex-cont animation-area">
        <div class="flex-item">
          <div class="common-title cst-fade">
            <div class="section-container">
              <h1>Awards</h1>
              <h2>Achievements</h2>
            </div>
          </div>
          <div class="divider cst-fade">
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_fly_home.svg" alt="">
            </div>
          </div>
          <div class="ratings-cont cst-fade">
            <div class="ratings-item">
              <div class="image-container">
                <img src="<?php the_field('achievement_one_image')?>" alt="">
              </div>
              <div class="content">
                <?php the_field('achievement_one')?>
              </div>
            </div>
            <div class="ratings-item">
              <div class="image-container">
                <img src="<?php the_field('achievement_two_image')?>" alt="">
              </div>
              <div class="content">
                <?php the_field('achievement_two')?>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-item ani-reveal-left">
          <div class="image-container">
            <img src="<?php the_field('awards_image')?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="common-vert">
      <p>Awards</p>
    </div>
  </section>
  <section class="blog-section">
    <div class="custom-container">
      <div class="flex-cont">
        <div class="flex-item">
          <div class="common-title cst-fade">
            <div class="section-container">
              <h1>Our Latest</h1>
              <h2>News and Blogs</h2>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="section-links cst-fade">
            <a href="<?php echo site_url(); ?>/news-blogs/" class="co-btn type-fill">View All</a>
          </div>
        </div>
      </div>
      <div class="block-cont">
        <div class="block-item">
          <div class="card-wrapper">
            <?php
            $the_query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 1,
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
        <div class="block-item">
          <div class="card-wrapper">
            <?php
            $the_query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'offset' => 1,
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
      </div>
    </div>
    <div class="common-vert">
      <p>News and blogs</p>
    </div>
  </section>
  <section class="instagram-section">
    <div class="custom-container">
      <div class="common-title cst-fade">
        <div class="section-container">
          <h1>Socials</h1>
          <h2><?php echo the_field('socials_title')?></h2>
        </div>
      </div>
      <div class="flex-cont">
        <div class="flex-item cst-fade">
          <?php if( have_rows('instagram_one') ): ?>
            <?php while( have_rows('instagram_one') ): the_row(); ?>
              <div class="insta-intro">
                <div class="image-container">
                  <img src="<?php the_sub_field('logo');?>" alt="">
                </div>
                <div class="content">
                  <h3><?php the_sub_field('title');?></h3>
                  <p><?php the_sub_field('handle');?></p>
                </div>
              </div>
              <div class="block-cont">
                <?php if( have_rows('gallery') ): ?>
                  <?php while( have_rows('gallery') ): the_row(); ?>
                    <div class="block-item">
                      <div class="image-container">
                        <img src="<?php echo the_sub_field('image'); ?>" alt="">
                      </div>
                    </div>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
              </div>
            <?php endwhile; wp_reset_query();?>
          <?php endif; wp_reset_query();?>
        </div>
        <div class="flex-item cst-fade">
          <?php if( have_rows('instagram_two') ): ?>
            <?php while( have_rows('instagram_two') ): the_row(); ?>
              <div class="insta-intro">
                <div class="image-container">
                  <img src="<?php the_sub_field('logo');?>" alt="">
                </div>
                <div class="content">
                  <h3><?php the_sub_field('title');?></h3>
                  <p><?php the_sub_field('handle');?></p>
                </div>
              </div>
              <div class="block-cont">
                <?php if( have_rows('gallery') ): ?>
                  <?php while( have_rows('gallery') ): the_row(); ?>
                    <div class="block-item">
                      <div class="image-container">
                        <img src="<?php echo the_sub_field('image'); ?>" alt="">
                      </div>
                    </div>
                  <?php endwhile; wp_reset_query();?>
                <?php endif; wp_reset_query();?>
              </div>
            <?php endwhile; wp_reset_query();?>
          <?php endif; wp_reset_query();?>
        </div>
      </div>
      <div class="insta-links cst-fade">
        <ul>
          <?php if( have_rows('instagram_links') ): ?>
            <?php while( have_rows('instagram_links') ): the_row(); ?>
              <li>
                <a href="<?php echo the_sub_field('link'); ?>" target="_blank">
                  <?php echo the_sub_field('handle'); ?>
                </a>
              </li>
            <?php endwhile; wp_reset_query();?>
          <?php endif; wp_reset_query();?>
        </ul>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
