<?php 
the_post();
get_header(); ?>
<!-- Blog Grid -->
<section class="blog-grid" id="single-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="single-blog">
                    <div class="blog-thumb">
                    	<?php the_post_thumbnail("transtics-news-list"); ?>
                        <div class="share">
                            <h6><a href="#"><i class="fas fa-share-alt"></i> Share</a></h6>
                        </div>
                    </div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="meta">By : <?php the_author(); ?> <span class="date"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></span> <span class="comment"><i class="far fa-comments"></i> <?php comments_number( $zero, $one, $more ); ?> Comments</span></p>
                    <div class="blog-content">
                        <?php the_content(); ?>
                        <p class="tag">
                            <i class="fas fa-tag"></i> <?php echo get_the_tag_list(); ?>
                            <span class="float-right"><a href="#"><i class="fas fa-share-alt"></i> Share this article</a></span>
                        </p>
                    </div>

                    <div class="d-flex flex-row admin">
                        <div>
                            <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>
                        </div>
                        <div>
                            <h4><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>"><?php the_author(); ?></a></h4>
                            <p><?php the_author_meta( "description" ); ?></p>
                            <span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-medium-m"></i></a>
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
<!-- Blog Grid -->
<?php get_footer(); ?>