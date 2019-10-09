<?php query_posts( array(
    'post_type' => 'gallery',
    'post_per_page' => -1,
  )); 
?>
<?php while (have_posts()) : the_post(); ?>
<div class="item col-lg-4 col-md-6 col-sm-6 truck">
    <div class="single-gallery">
        <?php the_post_thumbnail(); ?>
        <div class="overlay">
            <div class="text d-flex justify-content-center">
                <!-- <a href=""><i class="fas fa-link"></i></a> -->
                <?php 
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                    echo '<a data-fancybox="gallery" href="'.esc_url($featured_img_url).'">'; 
                    echo '<i class="fas fa-search"></i>';
                    echo '</a>';
                ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>