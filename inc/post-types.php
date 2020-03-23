<?php

    // Portfolio post type
    add_action( 'init', 'cpt_work' );
    function cpt_work() {
        $labels = array(
            'name'               => __( 'Portfolio' ),
            'singular_name'      => __( 'Portfolio' ),
            'menu_name'          => __( 'Portfolio' ),
            'all_items'          => __( 'Todos los trabajos' ),
            'insert_into_item'   => __( 'Insertar en trabajo' ),
            'add_new'            => __( 'Añadir nuevo' ),
            'add_new_item'       => __( 'Añadir nuevo trabajo' )
        );
        $args = array(
            'labels'             => $labels,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
            'public'             => true,
            'has_archive'        => true,
            'menu_position'      => 5,
            'menu_icon'          => 'dashicons-layout',
            'rewrite'            => array( 'slug' => 'portfolio' ),
            'taxonomies'         => array( 'category' ),
        );
        register_post_type( 'foo_portfolio', $args );
    };

?>