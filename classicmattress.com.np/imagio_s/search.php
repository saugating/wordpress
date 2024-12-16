<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _s
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="custom-container search-result-container">
				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					</header><!-- .page-header -->

					<?php
						while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'search' );
						endwhile;
						else :
						get_template_part( 'template-parts/content', 'none' );
						endif; ?>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->
	<script>
			$(document).ready(function () {
					$('body').addClass('simple-header');
			});
	</script>

<?php
get_sidebar();
get_footer();
