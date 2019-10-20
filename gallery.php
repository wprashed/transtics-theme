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
                            <?php
                            $categories = get_categories('taxonomy=gallery_category&post_type=gallery'); ?>
                            <li class="active" data-filter="*"><?php echo _e('All','transtics');?></li>
                            <?php foreach ($categories as $category) : ?>
                            <li data-filter=".<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="row main-iso">
                        <?php query_posts( array(
                            'post_type' => 'gallery',
                            'post_per_page' => -1,
                          )); 
                        ?>
                        <?php 
                            while (have_posts()) : the_post();
                            $terms = get_the_terms ($the_query->ID, 'gallery_category');
                            if ( !is_wp_error($terms) && !empty($terms)) : 
                            $slugs = wp_list_pluck($terms, 'slug');

                            $slug = implode(" ", $slugs); 
                        ?>
                        <div class="item col-lg-4 col-md-6 col-sm-6 <?php echo esc_attr($slug);?>">
                        <?php else: ?>
                        <?php
                                        endif;
                                        ?>
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
                    </div>
                </div>
                <h5><a href="contact.html" class="btn">Get Quote</a></h5>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Area / -->

<?php get_footer(); ?>