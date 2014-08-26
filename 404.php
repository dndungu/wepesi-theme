<?php
/**
 * This is the page template for 404 Page not found response.
 */
get_header();
//get all the page data needed and set it to an object that can be used in other files
$wepesi_page=array();
$wepesi_page['sidebar']=wepesi_option( 'archive_sidebar' );
$wepesi_page['slider']='none';
$wepesi_page['layout']=wepesi_option( 'archive_layout' );
$wepesi_page['title']=__('Page not found', 'wepesi');

//include the before content template
locate_template( array( 'includes/html-before-content.php'), true, true ); ?>

<div class="content-box">
	<div class="aligncenter" id="not-found">
		<h1>W P L O C K E R .C O M - 404</h1>
		<h2><?php _e('The requested page has not been found', 'wepesi'); ?></h2>
		<?php get_search_form(true); ?>
	</div>
</div>
		
<?php 
		
//include the after content template
locate_template( array( 'includes/html-after-content.php'), true, true );
get_footer();

?>

