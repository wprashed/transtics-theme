<?php 
/* Template Name: Gallery */ 
get_header(); ?>

<!-- Gallery Area -->
<section class="gallery-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wraper">
                    <div class="iso-nav">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".ocean">Ocean</li>
                            <li data-filter=".air">Air</li>
                            <li data-filter=".truck">Truck</li>
                            <li data-filter=".cargo">Cargo</li>
                        </ul>
                    </div>

                    <div class="row main-iso">
                        <?php get_template_part('template-parts/custom-post/gallery'); ?>
                    </div>
                </div>
                <h5><a href="contact.html" class="btn">Get Quote</a></h5>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Area / -->

<?php get_footer(); ?>