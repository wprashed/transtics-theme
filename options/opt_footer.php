<?php

// Footer settings
Redux::setSection('transtics', array(
    'title'     => esc_html__('Footer', 'transtics'),
    'id'        => 'wptranstics_footer_btm',
    'icon'      => 'el el-arrow-down',
    // 'subsection'=> true,
    'fields'    => array(
        array(
            'id'        => 'footer_copyright',
            'type'      => 'editor',
            'title'     => esc_html__( 'Copyright Text','transtics'),
            'default'   => esc_html__( '2019 - Transtics | All Rights Reserved','transtics'),
        ),
    )
));