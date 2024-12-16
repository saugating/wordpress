<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

    <div id="single-blog-page">
        <section class="common-text-banner-section">
            <div class="background-overlay">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/elements/contour.svg">
            </div>

            <div class="custom-container small-width-container">
                <div class="common-banner-title type-text-banner">
                    <div class="top-heading">
                        <h6><?php the_field( 'date' )?> </h6>
                    </div>
                    <div class="title">
                        <h2><?php echo the_title(); ?></h2>
                    </div>
                </div>
                <div class="image-container">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full');
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-rectangle.jpg" />';
                    }
                    ?>
                </div>
                <div class="text-container">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </section>


        <section class="common-quick-nav">
            <div class="custom-container remove-top-padding">
                <div class="back-container">
                    <ul>
                        <li><a href="<?php echo site_url(); ?>/blog">back to BLOGS</a></li>
                    </ul>
                </div>
                <div class="nav-container">
                    <ul>
                        <?php $prev_post = get_previous_post(); if (!empty( $prev_post )): ?>
                            <li class="type-left"><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="flaticon-left-1"></i> <?php echo $prev_post->post_title; ?></a></li>
                        <?php endif; ?>


                        <?php $next_post = get_next_post(); if (!empty( $next_post )): ?>
                            <li class="type-right"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?> <i class="flaticon-right"></i></a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </section>
    </div>
<?php endif; ?>

<?php get_footer(); ?>