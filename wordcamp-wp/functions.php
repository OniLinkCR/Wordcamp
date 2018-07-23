<?php

/**
 * Custom functions and definitions
 * Multiple include files where each extend Wordpress according to what the custom project/theme needs
 * @author Web Mentor
 * @link http://webmentor.cr
 *
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 */



/*********/
/* BOOTSTRAP INCLUDES */
/*********/
require_once('library/setup/initial_setup.php');  //template init functions I need


/*********/
/* LAYOUT INCLUDES */
/*********/
	require_once('library/layout/stylesheet.php');  //changes style.scss URL to point where I need it
	

	/*********/
/* FUNCTIONALITY INCLUDES */
/*********/
	require_once('library/functionality/body_class.php');  //change body class on load
	require_once('library/functionality/enqueue_scripts.php');  //to enqueue scripts
	require_once('library/functionality/alter_main_loop.php');  //this alters the main loop for certain posts/taxonomies/requirements
	require_once('library/functionality/custom_posts.php');  //to include custom posts via the WP API
	require_once('library/functionality/taxonomies.php');  //to include custo taxonomies via the WP API

/*********/
/* OTHER INCLUDES */
/*********/
	//require_once('library/other/the_rest.php');  //clean up WP, register sidebar, etc
?>