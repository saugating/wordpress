<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

  <div id="lavie-garden">

    <section class="common-page-intro">
      <div class="custom-container remove-top-bottom-padding">
        <div class="common-page-title cst-fade">
          <span>Our Brands</span>
          <h1>Lavie Garden</h1>
        </div>
        <div class="slider-box cst-fade">
          <div class="slider-container">
            <div class="item-slider">
              <div class="item">
                <div class="image-container">
                  <img src="img/placeholder/L00.webp" alt="">
                </div>
              </div>
              <div class="item">
                <div class="image-container">
                  <img src="img/placeholder/L01.webp" alt="">
                </div>
              </div>
              <div class="item">
                <div class="image-container">
                  <img src="img/placeholder/Backdrop00.webp" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="common-lavie-intro">
      <div class="custom-container remove-bottom-padding">
        <div class="lavie-container">
          <div class="logo cst-fade">
            <div class="image-container">
              <img src="img/logo/Logo.svg" alt="">
            </div>
          </div>
          <div class="quickinfos cst-fade">
            <ul>
              <li>
                <a href="#">
                  <div class="flex-cont">
                    <div class="image-container">
                      <img src="img/icons/icon_map.svg" alt="">
                    </div>
                    Boudha Ramhiti, Kathmandu
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="title cst-fade">
            <h2>About Lavie Garden</h2>
          </div>
          <div class="content cst-fade">
            <p>
              Lavie- is “The Life” in French. Lavie Garden is the “Garden of Life”.
              We believe the life is an entity that deserves celebration- not just any celebration but huge ones.
              Here at Lavie Garden, we celebrate life with utmost respect.
              The cozy ambience and the huge array of menu items, garden sitting, bonfire, specialty items,
              finest of beers cocktails, live music offers best in class celebration of life.
            </p>
          </div>
        </div>
        <div class="common-divider cst-fade">
          <div class="image-container">
            <img src="img/icons/icon_fly_L.svg" alt="">
          </div>
        </div>
      </div>
      <?php if( have_rows('menu') ): ?>
        <?php while( have_rows('menu') ): the_row(); ?>
          <div class="custom-container menu-container">
            <div class="inner">
              <div class="common-title cst-fade">
                <div class="section-container">
                  <h1>Menu</h1>
                  <h3>Opening Hours</h3>
                </div>
              </div>
              <div class="section-info cst-fade">
                <ul>
                  <li>Breakfast</li>
                  <li><?php the_sub_field('time_breakfast'); ?></li>
                </ul>
                <ul>
                  <li>Lunch</li>
                  <li><?php the_sub_field('time_lunch'); ?></li>
                </ul>
                <ul>
                  <li>Dinner</li>
                  <li><?php the_sub_field('time_dinner'); ?></li>
                </ul>
              </div>
              <div class="section-links">
                <a href="<?php echo the_sub_field('menu_link'); ?>" class="co-btn type-fill" target="_blank">
                  View Menu
                </a>
              </div>
            </div>
          </div>
        <?php endwhile; wp_reset_query();?>
      <?php endif; wp_reset_query();?>
    </section>

    <section class="common-gallery">
      <div class="custom-container">
        <div class="common-title cst-fade">
          <div class="section-container">
            <h1>Photo</h1>
            <h2>Gallery</h2>
          </div>
        </div>
        <?php if( have_rows('gallery') ): ?>
          <div class="slider-box cst-fade">
            <div class="gallery-container">
              <div class="item-slider">
                <?php while( have_rows('gallery') ): the_row(); ?>
                  <div class="item">
                    <div class="image-container">
                      <img src="<?php the_sub_field('image'); ?>" alt="">
                    </div>
                  </div>
                <?php endwhile; wp_reset_query();?>
              </div>
            </div>
          </div>
        <?php endif; wp_reset_query();?>
      </div>
    </section>

  </div>

<?php endif; ?>

<?php get_footer(); ?>
