<?php 
/* Template Name: Blog List */
get_header(); ?>
<!-- Blog Grid -->
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
<!-- Blog Grid -->
<?php get_footer(); ?>
