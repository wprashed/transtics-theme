<?php
/** 
 * Signle Page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transtics
 */
the_post();
get_header(); ?>
<!-- Blog Single -->
<section class="blog-grid" id="single-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="single-blog">
                    <div class="blog-thumb">
                    	<img src="<?php the_post_thumbnail_url() ?>" class="img-fluid">
                        <div class="share">
                            <h6><a class="a2a_dd"><i class="fas fa-share-alt"></i> Share</a></h6>
                        </div>
                    </div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="meta alignnone">By : <?php the_author(); ?> <span class="date"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></span> <span class="comment"><i class="far fa-comments"></i> <?php comments_number(); ?></span></p>
                    <div class="blog-content">
                        <?php 
                            the_content();
                            wp_link_pages();
                        ?>
                        <p class="tag">
                            <?php if (has_tag()) {?>
                            <i class="fas fa-tag"></i> <?php echo get_the_tag_list(); ?>
                            <?php } ?>
                            <span class="float-right float-right"><a class="a2a_dd"><i class="fas fa-share-alt"></i> Share this article</a></span>
                        </p>
                    </div>
                    <div class="d-flex flex-row admin">
                        <div>
                            <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>
                        </div>
                        <div>
                            <h4><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>"><?php the_author(); ?></a></h4>
                            <p><?php the_author_meta( "description" ); ?></p>
                            <?php
                                $transtics_author_facebook  = get_field( "facebook", "user_" . get_the_author_meta( "ID" ) );
                                $transtics_author_twitter   = get_field( "twitter", "user_" . get_the_author_meta( "ID" ) );
                                $transtics_author_linkedin = get_field( "linkedin", "user_" . get_the_author_meta( "ID" ) );
                                $transtics_author_medium = get_field( "medium", "user_" . get_the_author_meta( "ID" ) );
                            ?>
                            <span>
                                <?php if ( $transtics_author_facebook ): ?>
                                    <a href="<?php echo esc_url( $transtics_author_facebook ); ?>"><i class="fab fa-facebook-f"></i></a>
                                <?php endif; ?>
                                <?php if ( $transtics_author_twitter ): ?>
                                    <a href="<?php echo esc_url( $transtics_author_twitter ); ?>"><i class="fab fa-twitter"></i></a>
                                <?php endif; ?>
                                <?php if ( $transtics_author_linkedin ): ?>
                                    <a href="<?php echo esc_url( $transtics_author_linkedin ); ?>"><i class="fab fa-linkedin-in"></i></a>
                                <?php endif; ?>
                                <?php if ( $transtics_author_medium ): ?>
                                    <a href="<?php echo esc_url( $transtics_author_medium ); ?>"><i class="fab fa-medium-m"></i></a>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <?php
					    if(!post_password_required()){
					        comments_template();
					    }
				    ?>
                </div>
            </div>
           <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!-- Blog Single -->
<?php get_footer(); ?>