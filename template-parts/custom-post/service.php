<?php query_posts( array(
    'post_type' => 'service',
    'post_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'service_category',
            'field'    => 'slug',
            'terms'    => 'bob',
        ),
    ),
  ));
?>
<?php while (have_posts()) : the_post(); ?>
<div class="col-md-6 col-12">
    <div class="service-box">
        <div class="service-img">
            <?php the_post_thumbnail("transtics-service-thumb"); ?>
            <div class="overlay">
                <div class="text d-flex justify-content-center"><a href="<?php the_permalink(); ?>"><i class="fas fa-link fa-2x"></i></a></div>
            </div>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php the_excerpt(); ?>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>