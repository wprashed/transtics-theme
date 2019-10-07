<?php get_header(); ?>

<?php get_template_part('template-parts/custom-post/slider'); ?>
<!-- Blog -->
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
<!-- Blog /-->
<!-- Testimonial -->
<section class="testimonial">
    <div class="container">
        <div class="row testimonial-area">
            <div class="col-md-12">
                <h1>Client's Review</h1>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="testimonial-carousel">
                    <?php get_template_part('template-parts/custom-post/testimonial'); ?>
                </div>
                <p class="button"><a href="#" class="btn more">More Reviews</a></p>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial /-->

<!-- Team Leaders -->
<section class="team" id="teaml">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Leaders</h1>
            </div>
        </div>
        <div class="row">
            <?php get_template_part('template-parts/custom-post/team-archive'); ?>
        </div>
    </div>
</section>
<!-- Team Leaders /-->

<!-- Team -->
<section class="team" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <h1>Our Team</h1>
            </div>
            <div class="col-lg-7 col-md-6">
                 <p>Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovation.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme" id="team-carousel">
                <?php get_template_part('template-parts/custom-post/team-slider'); ?>
                
            </div>
            <p class="button abour-ha "><a href="#" class="btn more">ALL MEMBERS</a></p>
        </div>
    </div>
</section>
<!-- Team /-->

<!-- Client -->
<section class="clients">
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/custom-post/client'); ?>
        </div>
    </div>
</section>
<!-- Client /-->

<?php get_footer(); ?>