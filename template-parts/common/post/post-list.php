<div class="single-blog">
    <div class="blog-thumb">
        <?php the_post_thumbnail("transtics-news-list"); ?>
        <div class="share">
            <h6><a href="#"><i class="fas fa-share-alt"></i> Share</a></h6>
        </div>
    </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="meta">By : <?php the_author(); ?> <span class="date"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></span> <span class="comment"><i class="far fa-comments"></i> <?php comments_number( $zero, $one, $more ); ?> Comments</span></p>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Continue reading...</a></p>
</div>