<?php 
/** 
 * 404 Page
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package transtics
 */
get_header(); ?>
<!-- 404 -->
<section class="blogs error" id="news">
    <div class="container">
        <div class="row text-center aligncenter">
            <h1 class="errors">404</h1>
            <h2 class="errorh"><?php _e( 'Oops! That page can&rsquo;t be found.', 'transtics' ); ?></h2>
        </div>
    </div>
</section>
<!-- 404 /-->
<?php get_footer(); ?>