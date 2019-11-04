<?php

// Require Files

require_once( get_theme_file_path("/inc/tgm.php") );
require_once( get_theme_file_path( "/options/opt-config.php" ) );

if ( ! isset( $content_width ) ) $content_width = 1140;

// Theme Support

function transtics_theme_setup() {
    load_theme_textdomain( "transtics" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( "automatic-feed-links");
    add_theme_support( "custom-header");
    $transtics_custom_header_details = array(
        'header-text'           => true,
        'default-text-color'    => 'white',
    );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support("custom-background");
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu( "topmenu", __( "Top Menu", "transtics" ) );
    add_image_size( "transtics-news-list", 840, 420, true );
    add_image_size( "transtics-news-grid", 350, 233, true );
    add_image_size( "transtics-service-thumb", 465, 310, true );
    add_image_size( "transtics-testimonial", 50, 50, true );
    add_image_size( "transtics-team-archive", 350, 327, true );
    add_image_size( "transtics-team-slider", 340, 317, true );
    add_image_size( "transtics-gallery", 340, 320, true );
}

add_action( "after_setup_theme", "transtics_theme_setup" );

// Register Custom Navigation Walker

function register_navwalker(){
    require_once get_template_directory() . '/inc/transtics-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// Assets Enqueue

function transtics_assets() {
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl-carousel-css", get_theme_file_uri( "/assets/css/owl.carousel.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl-theme-css", get_theme_file_uri( "/assets/css/owl.theme.default.min.css" ), null, "1.0" );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "/assets/css/fontawesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "flaticon-css", get_theme_file_uri( "/assets/css/flaticon.css" ), null, "1.0" );
    wp_enqueue_style( "fancybox-css", get_theme_file_uri( "/assets/css/jquery.fancybox.min.css" ), null, "1.0" );
    wp_enqueue_style( "font-rubbik", "https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap", null, "1.0" );
    wp_enqueue_style( "font-work", "https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap", null, "1.0" );
    wp_enqueue_style( "custom-css", get_theme_file_uri( "/assets/css/custom.css" ), null, "1.0" );
    wp_enqueue_style( "responsive-css", get_theme_file_uri( "/assets/css/responsive.css" ), null, "1.0" );
    wp_enqueue_style( "transtics-css", get_stylesheet_uri(), null, "1.0" );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), "1.0" );
    wp_enqueue_script( "carousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "1.0" );
    wp_enqueue_script( "fontawesome-js", get_theme_file_uri( "/assets/js/fontawesome.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "isotope-js", get_theme_file_uri( "/assets/js/isotope.pkgd.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "fancybox-js", get_theme_file_uri( "/assets/js/jquery.fancybox.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "counterup-js", get_theme_file_uri( "/assets/js/jquery.counterup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "scroll-js", get_theme_file_uri( "/assets/js/scroll-top.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "search-js", get_theme_file_uri( "/assets/js/search.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "custom-js", get_theme_file_uri( "/assets/js/custom.js" ), array( "jquery" ), "1.0", true );
}

add_action( "wp_enqueue_scripts", "transtics_assets" );

//Adding Google fonts to the editor

function transtics_editor_styles() {
    $Rubik = ( array( 'editor-style.css', '//fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i'));
    $WorkSans =( array( 'editor-style.css', '//fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900'));
    add_editor_style( $Rubik, $WorkSans);

}
add_action( 'after_setup_theme', 'transtics_editor_styles' );

function transtics_custom_header_fonts() {
wp_enqueue_style( 'Rubik-fonts','//fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i', array(), null );
wp_enqueue_style( 'Work+Sans-fonts','//fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900', array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'transtics_custom_header_fonts' );

// Pagination

function transtics_pagination() {
    global $wp_query;
    $links = paginate_links( array(
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => apply_filters( "transtics_pagination_mid_size", 3 )
    ) );
    $links = str_replace( "page-link", "pgn__num", $links );
    $links = str_replace( "<li class='page-item'>", "<li>", $links );
    $links = str_replace( "next pgn__num", "page-item", $links );
    $links = str_replace( "prev pgn__num", "page-item", $links );
    echo wp_kses_post($links);
}

// Widget

function transtics_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Widget', 'transtics' ),
        'id'            => 'sidebar',
        'description'   => __( 'Widgets in this area will be shown right sidebar.', 'transtics' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget One', 'transtics' ),
        'id'            => 'footer-one',
        'description'   => __( 'Widgets in this area will be footer.', 'transtics' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Two', 'transtics' ),
        'id'            => 'footer-two',
        'description'   => __( 'Widgets in this area will be footer.', 'transtics' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Three', 'transtics' ),
        'id'            => 'footer-three',
        'description'   => __( 'Widgets in this area will be footer.', 'transtics' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Four', 'transtics' ),
        'id'            => 'footer-four',
        'description'   => __( 'Widgets in this area will be footer.', 'transtics' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Service Widget', 'transtics' ),
        'id'            => 'service-widget',
        'description'   => __( 'Widgets in this area will service single page.', 'transtics' ),
        'before_widget' => '<div id="add" class="sidebar %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}

add_action( "widgets_init", "transtics_widgets" );

