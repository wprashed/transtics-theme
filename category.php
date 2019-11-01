<?php
/** 
 * Category Archive
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transtics
 */
get_header(); ?>

<!-- Blog -->
<section class="blog" id="news">
    <div class="container">
        <div class="row">
            <?php
                if ( ! have_posts() ):
                    ?>
                    <h1 class="text-center"><?php _e("There is no post in this category !!","transtics"); ?></h1>
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
<!-- Blog /-->

<?php get_footer(); ?>