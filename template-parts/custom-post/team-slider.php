<?php query_posts( array(
    'post_type' => 'team',
    'post_per_page' => -1,
  )); 
?>
<?php while (have_posts()) : the_post(); ?>
<div class="item">
    <div class="team-img">
        <?php the_post_thumbnail("transtics-team-slider"); ?>
        <div class="overlay">
            <div class="text d-flex justify-content-center">
                <a href="<?php if ( get_field( "facebook" ) ) { echo get_field( "facebook" ) ; } ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php if ( get_field( "twitter" ) ) { echo get_field( "twitter" ) ; } ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?php if ( get_field( "linkedin" ) ) { echo get_field( "linkedin" ) ; } ?>"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="info">
        <h4><?php the_title(); ?></h4>
        <p>
            <?php
                if ( get_field( "designation" ) ) {
                     echo get_field( "designation" ) ;
                }
            ?>
        </p>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>