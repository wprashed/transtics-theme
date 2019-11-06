<?php
/** 
 * Main Index
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transtics
 */
global $transtics;
get_header(); 
$bloggridswitchvalue = $transtics['transtics-blog-layout-option'];
if( $bloggridswitchvalue == 1 ){
?>
<!-- Blog Grid -->
<section class="blogs" id="news">
    <div class="container">
        <div class="row">
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
<!-- Blog Grid /-->
<?php
  }else{
?>
<!-- Blog List -->
<section class="blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <?php
                    while ( have_posts() ) :
                    the_post();
                ?>
                <?php get_template_part("/template-parts/common/post/post-list"); ?>
                <?php
                    endwhile;
                ?>
                <nav aria-label="Page navigation example">
                    <?php
                      the_posts_pagination(array(
                          "screen_reader_text"=>' ',
                          "prev_text" => "Prev",
                          "next_text" => "Next"
                      ));
                    ?>
                </nav>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!-- Blog List -->
<?php
  }
?>
<?php get_footer(); ?>
