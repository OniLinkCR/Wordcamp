<?php


/**
* This is a simple class within the constructor that changes 
* the URL of the stylesheet. Just instantiate and that's it.
* The constructor takes care of calling the correct function
*/

class CSSLocation {
	
	function __construct()	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_theme_css' )); //array notation to call method

	}

	function enqueue_theme_css() {
		wp_register_style( 'theme-styles', get_template_directory_uri() . '/css/style.css' );
    	wp_enqueue_style( 'theme-styles' );
	}

}


//instiate the damn class!!

$cssloc = new CSSLocation();

