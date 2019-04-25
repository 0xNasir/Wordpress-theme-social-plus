<div class="blog-pagination">
	<div class="pagination">
		<?php
		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $the_query->max_num_pages,
		'prev_text'=>'&lt;',
		'next_text'=>'&gt;',
		) );
		?>
	</div>
</div>