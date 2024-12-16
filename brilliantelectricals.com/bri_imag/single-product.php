<?php
get_header();
?>

<?php if(have_posts()): the_post(); ?>

  <div id="single-product">
    <section class="common-breadcrumbs">
      <div class="custom-container remove-bottom-padding">
        <ul>
          <li>
            <a href="<?php echo site_url(); ?>/">Brilliant</a>
          </li>
          <li>
            <a href="<?php echo site_url(); ?>/products/">Products</a>
          </li>
          <li>
            <?php the_title();?>
          </li>
        </ul>
      </div>
    </section>
    <section class="product-intro">
      <div class="custom-container remove-bottom-padding">
        <div class="block-wrapper">
          <div class="item-wrapper">
            <div class="slider-box">
              <div class="product-slider-container">
                <div class="product-slider">
                  <?php if( have_rows('gallery') ): ?>
                    <?php while( have_rows('gallery') ): the_row(); ?>
                      <div class="product-item">
                        <div class="image-container">
                          <img src="<?php echo the_sub_field('image')?>" alt="">
                        </div>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="item-wrapper">
            <div class="section-container">
              <div class="section-title">
                <h1><?php the_title();?></h1>
              </div>
              <div class="section-body">
                <div class="intro">
                  <p>
                    <?php echo the_field('serial_number')?>
                  </p>
                  <p>
                    <?php echo the_field('short_descripton')?>
                  </p>
                </div>
                <?php if( have_rows('technical_specifications') ): ?>
                  <?php while( have_rows('technical_specifications') ): the_row(); ?>
                    <div class="common-technical">
                      <div class="title">Technical specifications</div>
                      <ul>
                        <li>
                          <span>
                            Light Source
                          </span>
                          <?php echo the_sub_field('light_source')?>
                        </li>
                        <li>
                          <span>
                            Colour Temperature
                          </span>
                          <?php echo the_sub_field('colour_temperature')?>
                        </li>
                        <li>
                          <span>
                            Mounting Version
                          </span>
                          <?php echo the_sub_field('mounting_version')?>
                        </li>
                        <li>
                          <span>
                            Application
                          </span>
                          <?php echo the_sub_field('application')?>
                        </li>
                      </ul>
                      <?php if( have_rows('standards') ): ?>

                          <div class="standards-wrapper">
                            <?php while( have_rows('standards') ): the_row(); ?>
                            <div class="image-container">
                              <img src="<?php echo the_sub_field('image')?>" alt="">
                            </div>
                            <?php endwhile; ?>
                          </div>

                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
              <div class="section-links">
                <a href="#" class="co-btn type-fill">
                  Inquire About The Product
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="more-specifications">
      <div class="custom-container remove-bottom-padding">
        <div class="common-flex-container">
          <div class="section-title">
            <h2>
              More Specifications
            </h2>
          </div>
        </div>
        <?php if( have_rows('more_specifications') ): ?>
            <div class="common-technical">
              <ul>
                <?php while( have_rows('more_specifications') ): the_row(); ?>
                <li>
                  <span>
                    <?php echo the_sub_field('title')?>
                  </span>
                  <?php echo the_sub_field('value')?>
                </li>
                <?php endwhile; ?>
              </ul>
            </div>
        <?php endif; wp_reset_query(); ?>
      </div>
    </section>
    <section class="more-specifications">
      <div class="custom-container">
        <div class="common-flex-container">
          <div class="section-title">
            <h2>
              Options
            </h2>
          </div>
        </div>
        <div class="common-table">
          <div class="inner">
            <?php if( have_rows('table') ): ?>
            <table>
              <tr>
                <th>Rated power of the luminaire [W]</th>
                <th>Colour temperature [K]</th>
                <th>Luminous flux [lm]</th>
                <th>Cut Out</th>
                <th>Diameter</th>
                <th>Height</th>
                <th>Weight</th>
                <th>CRI</th>
                <th>Power Factor</th>
                <th>Chip</th>
                <th>Driver</th>
                <th>Warranty</th>
                <th>Model Number</th>
              </tr>
              <?php while( have_rows('table') ): the_row(); ?>
              <tr>
                <td><?php echo the_sub_field('rated_power_of_the_luminaire_w')?></td>
                <td><?php echo the_sub_field('colour_temperature_k')?></td>
                <td><?php echo the_sub_field('luminous_flux_lm')?></td>
                <td><?php echo the_sub_field('cut_out')?></td>
                <td><?php echo the_sub_field('diameter')?></td>
                <td><?php echo the_sub_field('height')?></td>
                <td><?php echo the_sub_field('weight')?></td>
                <td><?php echo the_sub_field('cri')?></td>
                <td><?php echo the_sub_field('power_factor')?></td>
                <td><?php echo the_sub_field('chip')?></td>
                <td><?php echo the_sub_field('driver')?></td>
                <td><?php echo the_sub_field('warranty')?></td>
                <td><?php echo the_sub_field('model_number')?></td>
              </tr>
              <?php endwhile; ?>
            </table>
            <?php endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="similar-projects backdrop">
      <div class="custom-container remove-top-padding">
        <div class="section-container">
          <div class="section-title">
            <h2>
              <span>Similar</span><br/>
              <?php $terms = get_the_terms( $post->ID , 'product_category' );
                foreach ( $terms as $term ) {
                  $term_link = get_term_link( $term, 'product_category' );
                  echo  $term->name.'s';
                }
              ?>
            </h2>
          </div>
        </div>
        <div class="section-body">
          <div class="card-wrapper">
            <?php
            $terms = get_the_terms( $post->ID , 'product_category' );
            foreach ( $terms as $term ) {
              $term_link = get_term_link( $term, 'product_category' );
              $cat = $term->name;
            }
            $the_query = new WP_Query( array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                'post__not_in'   => array( $post->ID ),
                'tax_query' => array(
                    array (
                        'taxonomy' => 'product_category',
                        'field' => 'slug',
                        'terms' => $cat,
                    )
                ),
            ) );
            while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                <div class="card-item">
                  <div class="section-container">
                    <div class="image-container">
                      <a href="<?php the_permalink();?>">
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
                        <a href="<?php the_permalink();?>">
                          <?php the_title();?>
                        </a>
                      </h4>
                      <p>
                        <?php $terms = get_the_terms( $post->ID , 'product_category' );
                          foreach ( $terms as $term ) {
                            $term_link = get_term_link( $term, 'product_category' );
                            if( is_wp_error( $term_link ) )
                            continue;
                            echo  $term->name;
                          }
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php endif; ?>

<?php get_footer(); ?>
