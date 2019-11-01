   <?php


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Logo', 'transtics' ),
        'id'         => 'transtics_all_logo_select',
        'subsection' => false,
        'fields'     => array(

            array(
                'id'       => 'transtics_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Header Logo', 'transtics' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => __( 'Header Logo Size: 170px X 50px..', 'transtics' ),
                //'subtitle' => __( 'Upload any media using the WordPress native uploader', 'transtics' ),
                'default'  => array( 'url' => 'http://demo.anditthemes.com/html/transtics-final/assets/images/logo.png' ),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Header Information', 'transtics' ),
        'id'         => 'transtics-select-image_select',
        'subsection' => false,
        'fields'     => array(

            array(
                'id'       => 'get_quote_button',
                'type'     => 'switch',
                'title'    => __( 'Get Quote Button Display', 'transtics' ),
                'default'  => true,
            ),
            array(
                'id'       => 'get_quote_text',
                'type'     => 'text',
                'title'    => __( 'Get Quote Button Name', 'transtics' ),
                'default'  => 'Get Quote',
            ),
            array(
                'id'       => 'get_quote_url',
                'type'     => 'text',
                'title'    => __( 'Get Quote Button Url', 'transtics' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'get_language',
                'type'     => 'switch',
                'title'    => __( 'Language', 'transtics' ),
                'default'  => true,
            ),
            array(
                'id'       => 'language_srcode',
                'type'     => 'text',
                'title'    => __( 'Language Shortcode', 'transtics' ),
                'default'  => '[google-translator]',
            ),
            array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => __( 'Email', 'transtics' ),
                'default'  => 'mail@example.com',
            ),
            array(
                'id'       => 'phone',
                'type'     => 'text',
                'title'    => __( 'Phone', 'transtics' ),
                'default'  => '+145 (2466) 888',
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Information', 'transtics' ),
        'id'         => 'transtics-google_map',
        'subsection' => false,
        'fields'     => array(

            array(
                'id'       => 'address',
                'type'     => 'editor',
                'title'    => __( 'Address', 'transtics' ),
                'default'  => 'Collins Street West Victoria 8007, Australia',
            ),
            array(
                'id'       => 'phone_one',
                'type'     => 'text',
                'title'    => __( 'Phone One', 'transtics' ),
                'default'  => '+145 (2466) 888',
            ),
            array(
                'id'       => 'phone_two',
                'type'     => 'text',
                'title'    => __( 'Phone Two', 'transtics' ),
                'default'  => '+133 (4444) 878',
            ),
            array(
                'id'       => 'email_one',
                'type'     => 'text',
                'title'    => __( 'Email One', 'transtics' ),
                'default'  => 'mail@example.com',
            ),
            array(
                'id'       => 'email_two',
                'type'     => 'text',
                'title'    => __( 'Email Two', 'transtics' ),
                'default'  => 'info@mail.com',
            ),          
        )
    ) );
    //end Home section