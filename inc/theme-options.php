<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'sections'        => array( 
      
      array(
        'id'          => 'header',
        'title'       => __( 'Header', 'transtics' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer', 'transtics' )
      ),
      array(
        'id'          => 'contact',
        'title'       => __( 'Contact', 'transtics' )
      )
    ),
    'settings'        => array(
      array(
        'id' => 'logo',
        'label' => 'Logo',
        'desc' => 'Upload Logo',
        'type' => 'upload',
        'section' => 'header',
        ),
      array(
        'id' => 'phone',
        'label' => 'Phone Number',
        'desc' => 'Add Phone Number',
        'type' => 'text',
        'section' => 'header',
        'std'   => '+145 (2466) 888',
        ),
      array(
        'id' => 'email',
        'label' => 'Email',
        'desc' => 'Add Email',
        'type' => 'text',
        'section' => 'header',
        'std'   => 'mail@example.com',
        ),
      array(
        'id' => 'copyright_text',
        'label' => 'Copyright Text',
        'desc' => 'Type Your Copyright Text',
        'type' => 'textarea',
        'section' => 'footer',
        'std' => 'All Rights Reserved <a href="http://anditthemes.com">AndIT Themes</a>',
        ),
      array(
        'id' => 'address',
        'label' => 'Address',
        'desc' => 'Add Your Address',
        'type' => 'text',
        'section' => 'contact',
        'std' => 'Collins Street West Victoria 8007, Australia',
        ),
      array(
        'id' => 'phone_one',
        'label' => 'Phone One',
        'desc' => 'Add Your Phone Number',
        'type' => 'text',
        'section' => 'contact',
        'std' => '+124 (2486) 444',
        ),
      array(
        'id' => 'phone_two',
        'label' => 'Phone Two',
        'desc' => 'Add Your Phone Number',
        'type' => 'text',
        'section' => 'contact',
        'std' => '+133 (4444) 878',
        ),
      array(
        'id' => 'email_one',
        'label' => 'Email One',
        'desc' => 'Add Your Email',
        'type' => 'text',
        'section' => 'contact',
        'std' => 'mail@example.com',
        ),
      array(
        'id' => 'email_two',
        'label' => 'Email Two',
        'desc' => 'Add Your Email',
        'type' => 'text',
        'section' => 'contact',
        'std' => 'info@mail.com',
        ),
      
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}