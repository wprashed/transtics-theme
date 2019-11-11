<?php
/** 
 * Sidebar
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transtics
 */
?>
<div class="col-lg-3 col-md-12 col-sm-12 col-12 blog-sidebar">
    <?php
        if ( is_active_sidebar( "sidebar" ) ) {
            dynamic_sidebar( "sidebar" );
        }
    ?>
</div>