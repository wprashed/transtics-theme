<?php query_posts( array(
    'post_type' => 'testimonial',
    'post_per_page' => -1,
  )); 
?>
<?php while (have_posts()) : the_post(); ?>
<div class="item">
    <i class="fas fa-quote-right fa-3x float-right"></i>
    <div class="testimonial-box">
        <p><?php the_content(); ?></p>
        <div class="d-flex justify-content-between client">
            <div class="c-image">
                <?php the_post_thumbnail("transtics-testimonial"); ?>
            </div>
            <div class="c-details">
                <h5><?php the_title(); ?></h5>
                <p>
                    <?php
                        if ( get_field( "designation" ) ) {
                           echo get_field( "designation" ) ;
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>