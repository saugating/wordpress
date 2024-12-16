<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<div class="search-results section-body">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
				<?php if ( 'post' === get_post_type() ) : ?>
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="block-container section-body">
				<div class="block-item">
					<div class="image-container">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('product_thumb'); ?>
						</a>
					</div>
				</div>
				<div class="block-item">
					<div class="entry-summary">
						<?php the_content(); ?>
					</div><!-- .entry-summary -->
				</div>
			</div>
		</article><!-- #post-## -->
</div>
<script>
		$(document).ready(function () {
				$('body').addClass('simple-header');
		});
</script>
