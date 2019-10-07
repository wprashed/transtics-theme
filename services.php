 <?php 
 /* Template Name: Service */ 
 get_header(); ?>

<!-- Service Area -->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>We Serve Various Ways</h1>
                <p>Solving your supply chain needs from end to end, taking the complexity out of container shipping.We are at the forefront of developing innovation.</p>
            </div>
        </div>
        <div class="row">
            <?php get_template_part("/template-parts/custom-post/service"); ?>
        </div>
    </div>
</section>
<!-- Service Area /-->

<!-- Map -->
<section class="map">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <h1>Ship Smart with Transtics</h1>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <p>Solving your supply chain needs from end to end, taking the complexity out of container shipping.
                    We are at the forefront of developing innovative supply chain solutions.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="map" id="default-2" style="height:500px">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Map /-->

<!-- Subscribe -->
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parcel.png" alt="Image">
            </div>
            <div class="col-md-8">
                <h1>Subscribe for Offers and News</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="email address" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe /-->

<?php get_footer(); ?>