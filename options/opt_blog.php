<?php

Redux::setSection('transtics', array(
    'title'     => esc_html__('Blog Page', 'transtics'),
    'id'        => 'blog_page',
    'icon'      => 'dashicons dashicons-admin-post',
    'fields'    => array(
        array(
                'id'       => 'transtics-blog-layout-option',
                'type'     => 'image_select',
                'title'    => __( 'Blog Layout Option', 'transtics' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => get_template_directory_uri() . '/assets/images/grid.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => get_template_directory_uri() . '/assets/images/single-column.jpg'
                    ),
                    
                ),
                'default'  => '2'
            ),
    )
));

