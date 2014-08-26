<?php
/**
 * Contains the pagination for blog posts. Uses the WP Page-navi pagination if the plugin is enabled.
 */
if(function_exists('wp_pagenavi')){
	 wp_pagenavi();
}else{?>
	<div id="blog-pagination">
		<div class="alignleft"><?php previous_posts_link('<span>&laquo;</span> '.__( 'Previous', 'wepesi' )) ?></div>
		<div class="alignright"><?php next_posts_link(__( 'Next', 'wepesi' ).' <span>&raquo;</span>') ?></div>
	</div>
<?php
}
