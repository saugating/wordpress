<?php?>

<div class="card-item">
	<div class="section-container">
		<div class="image-container">
			<a href="<?php the_permalink(); ?>">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('image_small');
				}
				else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
				}
				?>
			</a>
		</div>
		<div class="section-title">
			<h4>
				<a href="<?php the_permalink(); ?>">
					<?php echo the_title(); ?>
				</a>
			</h4>
		</div>
	</div>
</div>
