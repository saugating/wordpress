<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

  <div>

    <section class="common-banner type-banner-small">
        <div class="banner-item">
        <div class="image-container">
          <img src="<?php the_post_thumbnail(''); ?>" alt=""/>
        </div>
        <div class="text-container center">
          <div class="custom-container">
            <div class="section-container">
              <div class="section-title">
                <h1 class="type-white"><?php the_title(''); ?></h1>
              </div>
            </div>
          </div>
        </div>
        <div class="background-overlay">
        </div>
      </div>
    </section>

    <section>
      <div class="custom-container">
        <?php the_content(''); ?>
      </div>
    </section>

  </div>

  <script>
      $(document).ready(function () {
          $('body').addClass('simple-header');
      });
  </script>

<?php endif; ?>

<?php get_footer(); ?>
