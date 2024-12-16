<?php
/**
 * Template Name: About Us Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="about-page">

  <section class="common-banner">
    <div class="banner-slider-container">
      <div class="banner-slider">
        <?php
        $the_query = new WP_Query( array(
            'post_type' => 'banner',
            'posts_per_page' => -1,
            'tax_query' => array(
                array (
                    'taxonomy' => 'banner_category',
                    'field' => 'slug',
                    'terms' => 'about',
                )
            ),
        ) );
        while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
          <div class="banner-item">
          <div class="image-container">
            <?php the_post_thumbnail('section_image'); ?>
          </div>
          <div class="text-container center">
            <div class="custom-container">
              <div class="section-container">
                <div class="section-title">
                  <h1 class="type-white"><?php the_field( 'title' )?></h1>
                </div>
              </div>
            </div>
          </div>
          <div class="background-overlay">
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>

  <section class="common-about-container">
    <div class="custom-container about-intro">
      <div class="block-container">
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h2>
                <?php the_field( 'about_title' )?>
              </h2>
            </div>
            <div class="section-body">
                <?php the_field( 'about_details' )?>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="section-container">
            <div class="image-container">
                <?php
                    $image = get_field('about_image');
                    if( $image ):

                      // Image variables.
                      $url = $image['url'];
                      $title = $image['title'];
                      $alt = $image['alt'];
                      $caption = $image['caption'];

                      // Thumbnail size attributes.
                      $size = 'section_image_medium';
                      $thumb = $image['sizes'][ $size ];
                      $width = $image['sizes'][ $size . '-width' ];
                      $height = $image['sizes'][ $size . '-height' ];

                      // Begin caption wrap.
                      if( $caption ): ?>
                      <div class="wp-caption">
                      <?php endif; ?>
                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />

                      <?php
                      // End caption wrap.
                      if( $caption ): ?>
                      <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-tabs-container">
    <div class="custom-container remove-bottom-padding">
      <div class="tabs-header">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">Vision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="values-tab" data-toggle="tab" href="#values" role="tab" aria-controls="values" aria-selected="false">Values</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="objectives-tab" data-toggle="tab" href="#objectives" role="tab" aria-controls="objectives" aria-selected="false">Objectives</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="tabs-body">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
          <div class="custom-container remove-top-bottom-padding">
            <div class="common-card-block-container">
              <?php $counts = 1 ; ?>
              <?php if( have_rows('visions') ): ?>
                <?php while( have_rows('visions') ): the_row(); ?>
                  <div class="card-block-item">
                    <div class="section-container">
                      <?php if( have_rows('visions_item') ): ?>
                        <?php
                        while( have_rows('visions_item') ): the_row(); ?>
                        <div class="section-title">
                          <span><?php echo $counts;?></span>
                          <h4><?php the_sub_field('title'); ?></h4>
                        </div>
                        <div class="section-body">
                          <p>
                            <?php the_sub_field('details'); ?>
                          </p>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php $counts++; endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
          <div class="custom-container remove-top-bottom-padding">
            <div class="common-card-block-container">
              <?php $counts = 1 ; ?>
              <?php if( have_rows('missions') ): ?>
                <?php while( have_rows('missions') ): the_row(); ?>
                  <div class="card-block-item">
                    <div class="section-container">
                      <?php if( have_rows('missions_item') ): ?>
                        <?php
                        while( have_rows('missions_item') ): the_row(); ?>
                        <div class="section-title">
                          <span><?php echo $counts;?></span>
                          <h4><?php the_sub_field('title'); ?></h4>
                        </div>
                        <div class="section-body">
                          <p>
                            <?php the_sub_field('details'); ?>
                          </p>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php $counts++; endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="values" role="tabpanel" aria-labelledby="values-tab">
          <div class="custom-container remove-top-bottom-padding">
            <div class="common-card-block-container">
                <?php $counts = 1 ; ?>
                <?php if( have_rows('values') ): ?>
                <?php while( have_rows('values') ): the_row(); ?>
                <div class="card-block-item">
                <div class="section-container">
                  <?php if( have_rows('values_item') ): ?>
                    <?php
                    while( have_rows('values_item') ): the_row(); ?>
                    <div class="section-title">
                      <span><?php echo $counts;?></span>
                      <h4><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="section-body">
                      <p>
                        <?php the_sub_field('details'); ?>
                      </p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                </div>
              </div>
                <?php $counts++; endwhile; ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="objectives" role="tabpanel" aria-labelledby="objectives-tab">
          <div class="custom-container remove-top-bottom-padding">
            <div class="common-card-block-container">
                <?php $counts = 1 ; ?>
                <?php if( have_rows('objectives') ): ?>
                <?php while( have_rows('objectives') ): the_row(); ?>
                <div class="card-block-item">
                <div class="section-container">
                  <?php if( have_rows('objectives_item') ): ?>
                    <?php
                    while( have_rows('objectives_item') ): the_row(); ?>
                    <div class="section-title">
                      <span><?php echo $counts;?></span>
                      <h4><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="section-body">
                      <p>
                        <?php the_sub_field('details'); ?>
                      </p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                </div>
              </div>
                <?php $counts++; endwhile; ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="video-wrapper">
    <div class="video-container" id="video-container">
      <video controls id="video" preload="metadata" poster="<?php echo the_field('video_banner'); ?>">
        <source src="<?php echo the_field('video_url'); ?>" type="video/mp4">
        </video>
        <div class="custom-container" id="sectiontitle">
          <h1 class="type-white"><?php the_field( 'video_title' )?></h1>
        </div>
        <div class="custom-container play-button-wrapper">
          <div title="Play video" class="play-gif" id="circle-play-b">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
              <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
    const video = document.getElementById("video");
    const circlePlayButton = document.getElementById("circle-play-b");
    function togglePlay() {
      if (video.paused || video.ended) {
        video.play();
      } else {
        video.pause();
      }
    }
    circlePlayButton.addEventListener("click", togglePlay);
    video.addEventListener("playing", function () {
      circlePlayButton.style.opacity = 0;
      sectiontitle.style.opacity = 0;
    });
    video.addEventListener("pause", function () {
      circlePlayButton.style.opacity = 1;
      sectiontitle.style.opacity = 1;
    });
</script>

<?php get_footer(); ?>
