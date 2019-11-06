<?php
/** 
 * Page Template
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transtics
 */
the_post();
get_header(); ?>
<!-- Page -->
<section class="blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <?php the_content(); ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!-- Page -->
<?php get_footer(); ?>