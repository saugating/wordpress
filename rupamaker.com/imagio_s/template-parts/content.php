<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="section-body">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="">
		<?php echo wp_trim_words( get_the_content(), 50,); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
