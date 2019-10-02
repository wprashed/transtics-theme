<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group mb-3" id="search">
	    <input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" aria-label="search" aria-describedby="basic-addon2">
	    <div class="input-group-append">
	        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
	    </div>
	</div>
</form>