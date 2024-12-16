<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

	<div id="error-page">

		<section>
			<div class="custom-container">
				<div class="image-container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/404.svg" alt=""/>
				</div>
				<div class="section-body center">
					<h2>
						Oops! That Page Can't Be Found...
					</h2>
				</div>
			</div>
		</section>

	</div>
	<script>
      $(document).ready(function () {
          $('body').addClass('simple-header');
      });
  </script>
<?php
get_footer();
