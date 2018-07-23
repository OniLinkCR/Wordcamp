<?php
	
/**
* This is a simple function that registers a taxonomy
* Source: https://codex.wordpress.org/Function_Reference/register_taxonomy
*/

//hook into the init action and call create create place taxonomies when it fires

add_action( 'init', 'create_place_taxonomies', 0 );

//create  taxonomies function
function create_place_taxonomies() {

  	$labels_place = array(  //boring labels lol
    
    	'name' => __( 'Lugar' ),
    	'singular_name' => __( 'Lugar'),
    	'search_items' =>  __( 'Buscar Lugar' ),
    	'all_items' => __( 'Todos los Lugares' ),
    	'parent_item' => __( 'Padre de este lugar' ),
    	'parent_item_colon' => __( 'Padre de este lugar:' ),
    	'edit_item' => __( 'Editar este lugar' ), 
    	'update_item' => __( 'Actualizar lugar' ),
    	'add_new_item' => __( 'Agregar Nuevo lugar' ),
    	'new_item_name' => __( 'Nuevo Lugar' ),
    	'menu_name' => __( 'Lugares' ),
  	);  

  	
  	register_taxonomy('lugar',array('post'), array(  //the meat, where I hook it up
    
    	'hierarchical' => true,  //need this to be category not tag
    	'labels' => $labels_place,
    	'show_ui' => true,
    	'query_var' => true,
    	
  	));

  
}  //function



	
?>