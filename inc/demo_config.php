<?php
// OneClick Demo Importer
add_filter( 'pt-ocdi/import_files', 'transtics_import_files' );
function transtics_import_files() {
    return array(
        array(
            'import_file_name'             => esc_html__( 'Transtics Demo One', 'transtics' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . '/inc/demos/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/inc/demos/widgets.wie',
            'local_import_customizer_file'     => trailingslashit( get_template_directory() ) . '/inc/demos/customizer.dat',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'/inc/demos/screenshot.png',
            'import_notice'                => wp_kses_post(__( 'Install and activate all required plugins before you click on the "Import" button. 
            <br> All pages will be imported. If you fail to import the demo data, follow the alternative way described in Doccumentations', 'transtics' )),
            'preview_url'                  => '//transtics.anditthemes.com/demo',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . '/inc/demos/settings.json',
                    'option_name' => 'transtics',
                ),
            ),
        ),

        array(
            'import_file_name'             => esc_html__( 'Transtics Demo Two', 'transtics' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . '/inc/demos/contents-h.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/inc/demos/widgets.wie',
            'local_import_customizer_file'     => trailingslashit( get_template_directory() ) . '/inc/demos/customizer.dat',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'/inc/demos/screenshot-h.png',
            'import_notice'                => wp_kses_post(__( 'Install and activate all required plugins before you click on the "Import" button. 
            <br> All pages will be imported. If you fail to import the demo data, follow the alternative way described in Doccumentations', 'transtics' )),
            'preview_url'                  => '//transtics.anditthemes.com/demo',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . '/inc/demos/settings.json',
                    'option_name' => 'transtics',
                ),
            ),
        ),
    );
}

function transtics_after_import_setup($selected_import) {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array (
            'main_menu' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );

    // Disable Elementor's Default Colors and Default Fonts
    update_option( 'elementor_disable_color_schemes', 'yes' );
    update_option( 'elementor_disable_typography_schemes', 'yes' );
    update_option( 'elementor_global_image_lightbox', '' );

    // Set the home page and blog page
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'transtics_after_import_setup' );