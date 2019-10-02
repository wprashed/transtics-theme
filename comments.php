<?php

if ( post_password_required() ) {
    return;
}
?>
<div class="comment">
    <div class="blog-f-head">
        <h4>Leave a Comment</h4>
    </div>
    <!--blog-f-head-->
    <?php if(comments_open()) : ?>
    <?php if(get_option('comment_registration') && !$user_ID) : ?>  
    <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
    <div class="single-blog-form">
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        	<?php if($user_ID) : ?>  
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
            <?php else : ?> 
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
                    <div class="form-group">
                        <label for="exampleInputName2">Name <?php if($req) echo "(required)"; ?></label>
                        <input type="text" class="form-control" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1">
                    </div><!--form-group-->
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email <?php if($req) echo ", required"; ?></label>
                        <input type="email" class="form-control" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2">
                    </div><!--form-group blog-form-email-->
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
                    <div class="form-group">
                        <label for="exampleInputweb1">Website</label>
                        <input type="url" class="form-control" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3">
                    </div><!--form-group blog-form-email-->
                </div>
            </div>
            <?php endif; ?>
            <div class="blog-text-area">
                <label for="exampleInputName2">Write a Comment*</label>
                <textarea type="text" class="form-control" name="comment" id="comment" rows="3" tabindex="4"></textarea>
            	<?php //show_subscription_checkbox(); ?>
            	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
            	<?php do_action('comment_form', $post->ID); ?>  
            </div>
            <!--blog-text-area-->
            <a class="comment-btn btn" href="#">Submit a Comment</a>
            <!--banner-btn-->
        </form>
        <!--form-->
        <?php endif; ?>  
	<?php else : ?>  
    <p>The comments are closed.</p>  
	<?php endif; ?>
    </div>
    <!--blog-form-->

    <!-- Comments List -->
    <?php
        // You can start editing here -- including this comment!
        if ( have_comments() ) : ?>
            <h3 class="h2 comments-title">
                <?php
                $comments_number = get_comments_number();
                if ( '1' === $comments_number ) {
                    /* translators: %s: post title */
                    printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'philosophy' ), get_the_title() );
                } else {
                    printf(
                        /* translators: 1: number of comments, 2: post title */
                        _nx(
                            '%1$s Reply to &ldquo;%2$s&rdquo;',
                            '%1$s Replies to &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'comments title',
                            'philosophy'
                        ),
                        number_format_i18n( $comments_number ),
                        get_the_title()
                    );
                }
                ?>
            </h3>
    <?php
        wp_list_comments( array(
            'avatar_size' => 100,
            'style'       => 'ol',
            'short_ping'  => true,
            'reply_text'  => '<i class="fa fa-mail-reply"></i> ' . __( 'Reply', 'philosophy' ),
        ) );
    ?>
	<?php endif; ?>
	<!-- Comments List /-->
</div>