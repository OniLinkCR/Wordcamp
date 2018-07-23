<?php
	
    /*
        Alters loops. Cannot use object as parameters change from time to time.
        We override main loop based on post type when needed.
        Source: https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
    */

    function my_modify_main_query( $query ) {

        if((!is_admin() ) && ($query -> is_main_query() ) ) :  //not admin and is main LOOP
      
            if (is_home() )  { // Run only on blog
            
                $query->query_vars['posts_per_page'] = 4;   //want only 4 results per page
 
                $query->set( 'cat', '7' );  //interested in this category only
                
            }

        endif;
    }
        
   
    // Hook above function to the pre_get_posts action
    add_action( 'pre_get_posts', 'my_modify_main_query' );