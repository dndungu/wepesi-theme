<?php
/**
 * This is the main index file - it is displayed by default as a front page when the theme is initialized
 * or on the posts page that has been selected in Settings -> Reading section.
 * This file actually represents the blog page template - it displays the posts, separated by pages and
 * ordered by date.
 */

get_header();
//get all the page data needed and set it to an object that can be used in other files
$wepesi_page=array();
$wepesi_page['sidebar']=wepesi_option( 'archive_sidebar' );
$wepesi_page['slider']='none';
$wepesi_page['layout']=wepesi_option( 'archive_layout' );
$wepesi_page['title']='';
$wepesi_page['header_display']=array('show_title'=>false);

//include the before content template
locate_template( array( 'includes/html-before-content.php' ), true, true );
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		global $more;
		$more = 0;

		//include the post template
		locate_template( array( 'includes/post-template.php' ), true, false );
	}

	locate_template( array( 'includes/post-pagination.php' ), true, false );

}else {
	_e( 'No posts available', 'wepesi' );
}
?>



<?php
//include the after content template
locate_template( array( 'includes/html-after-content.php' ), true, true );

get_footer();
?>
