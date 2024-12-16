<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

  <div>

    <section class="common-banner type-banner-small">
        <div class="banner-item">
        <div class="image-container">
          <?php the_post_thumbnail(''); ?>
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
        <div class="common-block-container">
          <div class="common-block-item">
            <?php the_content(''); ?>
          </div>
          <div class="common-block-item">
            <div class="section-container">
              <div class="section-title">
                <h3>Apply Now</h3>
              </div>
              <div class="section-body">
                <?php echo apply_shortcodes( '[contact-form-7 id="285" title="Contact Form"]' ); ?>
              </div>
            </div>
          </div>
        </div>
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
