<?php
/**
 * Template Name: Contact Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="contact-page">

  <section class="common-banner type-banner-small">
    <?php
    $the_query = new WP_Query( array(
        'post_type' => 'banner',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'banner_category',
                'field' => 'slug',
                'terms' => 'contact',
            )
        ),
    ) );
    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
      <div class="banner-item">
      <div class="image-container">
        <?php the_post_thumbnail(''); ?>
      </div>
      <div class="text-container center">
        <div class="custom-container">
          <div class="section-container">
            <div class="section-title">
              <h1 class="type-white"><?php the_field( 'title' )?></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="background-overlay">
      </div>
    </div>
    <?php endwhile; wp_reset_query(); ?>
  </section>

  <section class="company-info">
    <div class="custom-container">
    <div class="block-container">
        <?php
        $the_query = new WP_Query( array(
            'post_type' => 'office',
            'posts_per_page' => -1,
        ) );
        while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
            <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <span>
                <?php the_field( 'office_type' )?>
              </span>
              <h5>
                <?php the_title(''); ?>
              </h5>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <?php the_field( 'location' )?>
                </li>
                <?php if( have_rows('contacts') ): ?>
                <?php while( have_rows('contacts') ): the_row(); ?>
                <li>
                  <?php the_sub_field('contact_number'); ?>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
                <li>
                  <?php the_field( 'email_address' )?>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    </div>
  </section>

  <section class="contact-form">
    <div class="custom-container">
      <div class="common-shadowbox">
        <div class="section-container">
          <div class="section-title">
            <h1>Contact Us</h1>
          </div>
          <div class="section-body large-margin">
            <?php the_content(''); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
