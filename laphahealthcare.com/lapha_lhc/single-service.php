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
              Services
            </li>
          </ul>
        </div>

        <div class="section-title">
          <h1><?php the_title();?></h1>
        </div>

        <div class="image-container">
          <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('image_med');
          }
          else {
            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
          }
          ?>
        </div>

        <div class="section-body">
          <?php the_content();?>
        </div>
      </div>
    </section>
  </div>

<?php endif; ?>

<?php get_footer(); ?>
