<?php
/** 
 * Service Signle Page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transtics
 */
global $transtics;
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
                                        if(!empty($transtics['address']) ) {
                                            echo esc_html($transtics['address']); 
                                        } 
                                    ?>
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
                                        if(!empty($transtics['phone_one']) ) {
                                            echo esc_html($transtics['phone_one']); 
                                        } 
                                    ?> 
                                    <br>
                                    <?php 
                                        if(!empty($transtics['phone_two']) ) {
                                            echo esc_html($transtics['phone_two']); 
                                        } 
                                    ?>
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
                                        if(!empty($transtics['email_one']) ) {
                                            echo esc_html($transtics['email_one']); 
                                        } 
                                    ?> 
                                    <br>
                                    <?php 
                                        if(!empty($transtics['email_two']) ) {
                                            echo esc_html($transtics['email_two']); 
                                        } 
                                    ?>
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


<?php get_footer(); ?>