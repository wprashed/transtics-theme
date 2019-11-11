<?php
/** 
 * Author Archive
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transtics
 */
get_header(); ?>

<!-- Author -->
<section class="blogs bypostauthor" id="news">
    <div class="container">
        <div class="row">
            <?php
                if ( ! have_posts() ):
                    ?>
                    <h1 class="text-center aligncenter"><?php _e("No result found !!","transtics"); ?></h1>
                <?php
                endif;
            ?>
            <?php
                while ( have_posts() ) :
                the_post();
            ?>
            <?php get_template_part("/template-parts/common/post/post-grid"); ?>
            <?php
                endwhile;
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation example pagination justify-content-center">
                    <?php
                      the_posts_pagination(array(
                          "screen_reader_text"=>' ',
                          "prev_text" => "Prev",
                          "next_text" => "Next"
                      ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Author /-->
<?php get_footer(); ?>