<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 */

get_header(); ?>

<section class="archive-page">
		<section class="common-banner">
      <div class="banner-slider-section">
        <div class="banner-slider">
          <div class="banner-item type-small">
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Banner01.png" alt=""/>
            </div>
            <div class="text-container center">
              <div class="custom-container">
                <div class="section-container">
                  <div class="section-title">
                    <h2 class="type-white">Archives</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="background-overlay">
            </div>
          </div>
        </div>
      </div>
    </section>
		<div class="custom-container">
			<?php
			if ( have_posts() ) : ?>

				<div class="section-title">
					<?php
						the_archive_title( '<h2 class="page-title">', '</h2>' );
					?>
				</div>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</div>
	</section>

<?php
get_footer();
