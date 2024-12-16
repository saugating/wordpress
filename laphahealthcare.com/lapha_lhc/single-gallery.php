<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

  <div id="single-gallery-page">
    <div class="custom-container section-container type-small">
      <div class="section-title">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="section-date">
        <p><span>Published on </span><?php echo get_the_date(); ?></p>
      </div>
    </div>

    <div class="custom-container remove-top-padding">
      <section class="products-gallery">
        <div class="gallery-item">
          <div class="my-gallery grid-container">
            <?php if( have_rows('gallery') ): ?>
            <?php while( have_rows('gallery') ): the_row(); ?>
            <figure class="grid-item">
              <?php
              $image = get_sub_field('image');
              if( $image ):
                // Image variables.
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];
                $caption = $image['caption'];
                // Thumbnail size attributes.
                $size = 'image_med';
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ]; ?>

                <a href="<?php echo esc_url($url); ?>" data-lightbox="photo-gallery">
                  <img src="<?php echo esc_url($thumb); ?>" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/placeholder-image.webp'">
                </a>
              <?php endif; ?>
            </figure>
          <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </section>
    </div>

  </div>

<?php endif; ?>

<?php get_footer(); ?>
