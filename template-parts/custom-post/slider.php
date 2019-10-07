<!-- Slider -->
<section class="slider">
    <div class="container">
        <div class="row slider-item">
            <div class="owl-carousel owl-theme" id="owl-demo">
                <?php query_posts( array(
                    'post_type' => 'slider',
                    'post_per_page' => -1,
                  )); 
                ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="item">
                    <h1><?php the_title(); ?></h1>
                    <h4><?php the_content(); ?></h4>
                    <a href="<?php if ( get_field( "button_url" ) ) { echo get_field( "button_url" ) ; } ?>" class="btn">
                        <?php
                            if ( get_field( "button_text" ) ) {
                                 echo get_field( "button_text" ) ;
                            }
                        ?>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Slider /-->