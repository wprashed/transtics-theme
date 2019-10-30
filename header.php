<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<!-- Home Search -->
<div class="home-search">
    <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
            <form role="search" method="get" class="search-form"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="text" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- Home Search /-->

<?php
    if (is_page_template('page-template/homepage-one.php')) {
        get_template_part("template-parts/common/header/home-one");
    }else{
        get_template_part("template-parts/common/header/home-two");
    }
?>

<?php
 if (!is_home() && ! is_front_page()) {
     get_template_part("template-parts/common/header/breadcamb");
 }
?>