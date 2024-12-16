<?php
/**
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 * @author Sushant Gauchan
 */
get_header();

$postid = get_the_ID();
?>

<?php query_posts('post_type=page&p='.$postid.'');while (have_posts()): the_post(); ?>
    <h1><?php the_title()?></h1>
    <?php the_content()?>
    <?php the_post_thumbnail('full'); ?>
<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>
