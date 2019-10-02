<div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="blog-box">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("transtics-news-grid"); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h5>By <?php the_author(); ?> . <?php the_date('F j, Y'); ?> . <?php the_time('g:i a'); ?></h5>
    </div>
</div>