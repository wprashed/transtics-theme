<div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="blog-box">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("transtics-news-grid"); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h5>
        	<strong>By:</strong> <?php the_author(); ?>
        	<?php 
	            $archive_year  = get_the_time('y'); 
	            $archive_month = get_the_time('m'); 
	            $archive_day   = get_the_time('d'); 
            ?>
        	<i class="far fa-calendar-alt"></i> <?php echo esc_html( get_the_date() ); ?> 
        	<?php the_time('g:i a'); ?>		
        </h5>
    </div>
</div>