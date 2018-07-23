<?php

	/**
	* We need to modify the body class to inject a class name if a slug is of certain type
	* Solution: https://developer.wordpress.org/reference/functions/body_class/
	*/

	add_filter( 'body_class', 'custom_body_class' );
		
	function custom_body_class( $classes ) {
    		if ( is_home()  ) {  //the condition
        	$classes[] = 'necesito-esta-clase';  //the class I need
    	}
    	
    	return $classes;
	}
?>