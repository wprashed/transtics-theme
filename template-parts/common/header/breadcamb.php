<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                	<?php
                		if (is_archive()) {
                			the_archive_title();
                		}else{
                			the_title();
                		}
                    	
                	?>
                </h1>
                <h6>
                	<a href="<?php echo get_home_url(); ?>">Home</a> <i class="fas fa-angle-right"></i> 
                	<?php
                		if (is_archive()) {
                			the_archive_title();
                		}else{
                			the_title();
                		}
                    	
                	?>
                </h6>
            </div>
        </div>
    </div>
</section>
<!-- Page Header /-->