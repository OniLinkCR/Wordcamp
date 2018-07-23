<?php

/**
 * Register a custom post type called "libro".
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function wordcamp_register_slider() {  //function to register the post type

    $slider_labels = array(  //boring labels 

        'name'                  => _x( 'Slider'),
        'singular_name'         => _x( 'Nuevo Item Slider' ),
        'menu_name'             => _x( 'Slider' ),
        'name_admin_bar'        => _x( 'Slider' ),
        'add_new'               => __( 'Agregar Nuevo Item' ),
        'add_new_item'          => __( 'Agregar Nuevo Item'),
        'new_item'              => __( 'Nuevo Item'),
        'edit_item'             => __( 'Editar Item'),
        'view_item'             => __( 'Ver Item'),
        'all_items'             => __( 'Todos los items'),
        'search_items'          => __( 'Buscar Buscar Itemes'),
        'not_found'             => __( 'No encontre itemes.'),
        'not_found_in_trash'    => __( 'Sin items en la papelera.'),
        'featured_image'        => _x( 'Poner Imagen de Slider' ),
        'set_featured_image'    => _x( 'Setear Imagen de Sider'),
        'remove_featured_image' => _x( 'Remover Imagen de Sider'),
        'use_featured_image'    => _x( 'Usar Imagen de Sider'),
        'archives'              => _x( 'Archivos del Slider'),
        'insert_into_item'      => _x( 'Insertar al slider'),
        'uploaded_to_this_item' => _x( 'Subir a este slider'),
        'filter_items_list'     => _x( 'Filtrar Lista de items'),
        'items_list_navigation' => _x( 'Navegar lista de items'),
        'items_list'            => _x( 'Lista de items'),

    );

    $slider_args = array(  //the meat, my arguments
        'labels'             => $slider_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'micasa/slider' ), 
        'capability_type'    => 'post',
        'has_archive'        => false,  //dont need this for a slider
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-book-alt',  //url of your own
        'menu_position'      => 5,
        'can_export'         => true,
        'taxonomies'         => array(),  //important, can add custom taxonomy here
        'supports'           => array( 'title', 'thumbnail', 'excerpt', 'editor' )  //add what you need
      
    );
 
    register_post_type( 'slider', $slider_args );

    flush_rewrite_rules();


}

add_action( 'init', 'wordcamp_register_slider' );


