<?php 
the_post(); 
get_header(); ?>

<!-- Service Details -->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="sidebar">
                    <h4>Services</h4>
                    <ul>
                        <?php query_posts( array(
                            'post_type' => 'service',
                            'post_per_page' => -1,
                          )); 
                        ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right"></i><span><?php the_title(); ?></span></a></li>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div>
                <div class="sidebar">
                    <h4 class="contact">Contact</h4>
                    <div class="contact-area">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home.png" alt="Image">
                            </div>
                            <div class="col-md-10 col-sm-10 col-10">
                                <h4>
                                    <?php
                                        $address = ot_get_option('address');
                                    ?>
                                    <?php echo $address; ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="contact-area">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="Image">
                            </div>
                            <div class="col-md-10 col-sm-10 col-10">
                                <h4>
                                    <?php
                                        $phone_one = ot_get_option('phone_one');
                                    ?>
                                    <?php
                                        $phone_two = ot_get_option('phone_two');
                                    ?>
                                    <?php echo $phone_one; ?> 
                                    <br><?php echo $phone_two; ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="contact-area" id="last">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" alt="Image">
                            </div>
                            <div class="col-md-10 col-sm-10 col-10">
                                <h4>
                                    <?php
                                        $email_one = ot_get_option('email_one');
                                    ?>
                                    <?php
                                        $email_two = ot_get_option('email_two');
                                    ?>
                                    <?php echo $email_one; ?> 
                                    <br><?php echo $email_two; ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    if ( is_active_sidebar( "service-widget" ) ) {
                        dynamic_sidebar( "service-widget" );
                    }
                ?>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                
            </div>
        </div>
    </div>
</section>
<!-- Service Arae /-->

<!-- Subscribe -->
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parcel.png" alt="Image">
            </div>
            <div class="col-md-8">
                <div class="subscribe-here">
                    <h1>Subscribe for Offers and News</h1>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's email" aria-label="email address" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe /-->

<?php get_footer(); ?>