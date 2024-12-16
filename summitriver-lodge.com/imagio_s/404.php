<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

	<div id="error-page" class="content-area">
		
			<section class="error-404 not-found">
				<div class="custom-container">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'Ime Pay' ); ?></h1>
				<p><?php _e( 'It looks like nothing was found at this location.', 'Ime Pay' ); ?></p>
				</div>
			</section><!-- .error-404 -->


	</div><!-- .content-area -->

<?php get_footer(); ?>