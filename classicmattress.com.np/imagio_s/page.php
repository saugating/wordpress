<?php
get_header();
if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content_block">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>