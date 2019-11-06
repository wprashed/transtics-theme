<div <?php post_class('single-blog'); ?>>
    <div class="blog-thumb">
        <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid wp-caption">
        <div class="share">
            <h6><a class="a2a_dd" href="https://www.addtoany.com/share"><i class="fas fa-share-alt"></i> Share</a></h6>
        </div>
    </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="meta">By : <?php the_author(); ?> <span class="date"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></span> <span class="comment"><i class="far fa-comments"></i> <?php comments_number(); ?></span></p>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Continue reading...</a></p>
</div>