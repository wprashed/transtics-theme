<?php 
/* Template Name: Blog List */ 
get_header(); ?>

<!-- Blog Grid -->
<section class="blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <?php the_content(); >
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!-- Blog Grid -->

<?php get_footer(); ?>