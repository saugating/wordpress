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

$ic_lodge_area             = do_shortcode('[get_site_value option=ic_lodge_area]');
$ic_lodge_city             = do_shortcode('[get_site_value option=ic_lodge_city]');
$ic_contact_person         = do_shortcode('[get_site_value option=ic_contact_person]');
$ic_landline_no1             = do_shortcode('[get_site_value option=ic_landline_no1]');
/*$ic_mobile_no1            = do_shortcode('[get_site_value option=ic_mobile_no1]');*/
$ic_contact_email           = do_shortcode('[get_site_value option=ic_contact_email]');

get_header(); ?>


<div id="contact-page">
    <section class="common-banner-section">
        <div class="banner-slider">
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
                    <?php the_post_thumbnail('full'); ?>
                    <img src="<?php the_field( 'mobile_thumbnail' )?>" class="type-mobile">
                    <div class="text-container">
                        <div class="custom-container">
                            <div class="common-banner-title">
                                <div class="top-heading">
                                    <h6><?php the_field( 'sub-title' )?></h6>
                                </div>
                                <div class="title">
                                    <h2><?php the_field( 'title' )?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>

    <section class="form-info-section">
        <div class="custom-container">
            <div class="block-wrapper">
                <div class="block-item">
                    <div class="inner">
                        <div class="info-container">
                            <div class="common-title">
                                <h5>Contact Details</h5>
                            </div>
                            <?php query_posts('post_type=page&p='.$postid.'');while (have_posts()): the_post(); ?>
                                <div class="info-item">
                                    <?php echo the_content(); ?>
                                </div>
                            <?php endwhile; wp_reset_query(); ?>


                            <div class="info-item">
                                <ul>
                                    <li>Summit River Lodge,</li>
                                    <?php
                                    if(!empty($ic_lodge_area)){
                                        echo '<li>'. $ic_lodge_area.'</li>';
                                    }
                                    ?>
                                    <?php
                                    if(!empty($ic_lodge_city)){
                                        echo '<li>'. $ic_lodge_city.'</li>';
                                    }
                                    ?>
                                </ul>
                                <ul class="type-direction">
                                    <li><a href="https://goo.gl/maps/PQQ3iWKYtyqXHpH28" target="_blank">Get Direction</a> </li>
                                </ul>

                            </div>

                            <div class="info-item">
                                <div class="title">
                                    <h5>City Office</h5>
                                </div>
                                <ul>
                                    <li><?php echo $ic_contact_person ?></li>
                                    <?php
                                        if(!empty($ic_landline_no1)){
                                            echo '<li>'.$ic_landline_no1.' </li>';
                                        }
                                    ?>

                                    <?php
/*                                    if(!empty($ic_mobile_no1)){
                                        echo '<li>'.$ic_mobile_no1.' </li>';
                                    }
                                    */?>
                                </ul>
                            </div>

                            <div class="info-item">
                                <div class="title">
                                    <h5>Email</h5>
                                </div>
                                <ul>
                                    <?php
                                    if(!empty($ic_contact_email)){
                                        echo '<li><a href="#" class="open-enquiry">'. $ic_contact_email .'</a></li>';
                                    }
                                    ?>
                                    <!--<li><a href="mailto:intrekmail@gmail.com">intrekmail@gmail.com</a> </li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block-item">
                    <div class="inner">
                        <div class="common-title">
                            <h5>SEND US A MESSAGE</h5>
                        </div>

                        <?php  echo do_shortcode( '[contact-form-7 id="123" title="Contact"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="common-instagram-section">
        <div class="custom-container remove-top-bottom-padding full-width">
            <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/d3e7a9b4330e5bdba5f3358aa730452f.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>
    </section>
</div>



<?php get_footer(); ?>
