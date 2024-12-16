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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/404.webp" alt="" style="margin-top: 100px; display:block;margin:60px auto;max-width:500px;width:100%;"/>
			</div>
			<div class="section-body center">
				<h2>
					Oops! That Page Can't Be Found...
				</h2>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
