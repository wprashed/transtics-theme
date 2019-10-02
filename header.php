<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body>

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

<!-- Header Top -->
<section class="header-top">
   <h4 class="d-none">header-top</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="float-left d-flex justify-content-between">
                    <span><i class="fas fa-envelope"></i> mail@example.com</span>
                    <span><i class="fas fa-phone"></i> +145 (2466) 888</span>
                </p>
                <p class="float-right right">
                    <span><a href="#" class="active">ENG</a></span>
                    <span><a href="#">FR</a></span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Header Top / -->

<!-- Header Bottom -->
<section class="header-bottom" id="navbar">
   <h3 class="d-none">navbar</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-4">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-fluid" alt="Image"></a>
            </div>
            <div class="col-md-10 col-sm-9 col-8">
                <?php get_template_part("template-parts/common/nav"); ?>
                <span class="right float-right">
                  <a class="search" onclick="openSearch()"><i class="fas fa-search"></i></a>
                  <a href="#" class="btn quate float-right">get quote</a>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- Header Bottom / -->

<?php
 if (!is_home()) {
     get_template_part("template-parts/common/header/breadcamb");
 }
?>