<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	
	<button class="search-submit screen-reader-text">
		<span><?php echo esc_html( 'Search' ); ?></span>
	</button>

	<label class="search-bar">
		<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label>

	<i class="fa fa-search"></i>
	
</form>
