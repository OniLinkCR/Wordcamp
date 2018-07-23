<?php


/**
* This is a simple fnction that enqueues the scripts of the
* theme. Just  add the conditionals in order to save requests
* on scripts that aren't needed.
* Source: https://developer.wordpress.org/reference/functions/wp_enqueue_script/
*/

function load_my_scripts() {  

    if(!is_admin()) :
        
        wp_deregister_script( 'jquery' );  //jquery
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');  
        wp_enqueue_script('jquery');  

        wp_deregister_script( 'slider' );  //slider
        wp_register_script('slider', get_bloginfo('template_url').'/js/slider.js', array("jquery"), '1.0', true);  
        wp_enqueue_script('slider');  


    endif;  //is_admin

}  
    
add_action('wp_enqueue_scripts', 'load_my_scripts');  
	
?>