<div class="single-blog">
    <div class="blog-thumb">
        <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid">
        <div class="share">
            <h6><a class="a2a_dd addtoany_no_icon addtoany_share_save addtoany_share" href="https://www.addtoany.com/share#url=http%3A%2F%2Flocalhost%2Ftranstics%2F2019%2F10%2F13%2Fharum-accusamus-nisi-labore-alias%2F&amp;title=Harum%20accusamus%20nisi%20labore%20alias"><span class="a2a_svg a2a_s__default a2a_s_a2a a2a_img_text" style="background-color: rgb(1, 102, 255); width: 24px; line-height: 24px; height: 24px; background-size: 24px; border-radius: 3px;"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#FFF"><path d="M14 7h4v18h-4z"></path><path d="M7 14h18v4H7z"></path></g></svg></span><i class="fas fa-share-alt"></i> Share</a></h6>
        </div>
    </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="meta">By : <?php the_author(); ?> <span class="date"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></span> <span class="comment"><i class="far fa-comments"></i> <?php comments_number( $zero, $one, $more ); ?> Comments</span></p>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Continue reading...</a></p>
</div>