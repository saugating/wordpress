<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes_story' );

function your_prefix_register_meta_boxes_story( $meta_boxes ) {
    $prefix = 'tia_';

    $meta_boxes[] = array(
        'post_types' => array('page'),
        'title' => esc_html__( 'Image Gallery', 'tia' ),
        'fields' => array(
            // Gallery Image
            array(
                'name'             => esc_html__( 'Gallery Image', 'tia' ),
                'id'               => "{$prefix}gallery",
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 9999,
                'max_status'       => true,
            ),
        ),
    );
    return $meta_boxes;
}

