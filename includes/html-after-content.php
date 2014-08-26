<?php
/**
 * Prints the content after the content of the page - prints the sidebar
 * (if the post/page supports one) and closes some of the main content divs.
 */
global $wepesi_page;

if ( $wepesi_page['layout']!='grid-full' ) { ?>
</div> <!-- end main content holder (#content/#full-width) -->
<?php
}
if ( $wepesi_page['layout']!='full'&&$wepesi_page['layout']!='none'&&$wepesi_page['layout']!='grid-full' ) {?>
	<div id="sidebar" class="sidebar"><?php dynamic_sidebar( $wepesi_page['sidebar'] ); ?></div>
<?php }

?>
<div class="clear"></div>
</div> <!-- end #content-container -->
