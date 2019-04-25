<?php 

/**
Custom post type
**/
function post_type() {
 
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Sliders' ),
                'singular_name' => __( 'slider' )
            ),
            'supports'=> array( 'title', 'editor', 'thumbnail'),
            'public' => false,
            'show_ui' => true,
        )
    );
 
    register_post_type( 'activity',
        array(
            'labels' => array(
                'name' => __( 'Activities' ),
                'singular_name' => __( 'Activity' )
            ),
            'supports'=> array( 'title', 'editor', 'thumbnail'),
            'public' => false,
            'show_ui' => true,
        )
    );
 
    register_post_type( 'summary',
        array(
            'labels' => array(
                'name' => __( 'Summaries' ),
                'singular_name' => __( 'Summary' )
            ),
            'supports'=> array( 'title'),
            'public' => false,
            'show_ui' => true,
        )
    );
 
    register_post_type( 'event',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'supports'=> array( 'title', 'editor','thumbnail'),
            'public' => false,
            'show_ui' => true,
        )
    );
 
    register_post_type( 'image',
        array(
            'labels' => array(
                'name' => __( 'Image gallery' ),
                'singular_name' => __( 'Image gallery' )
            ),
            'supports'=> array( 'title','thumbnail'),
            'public' => false,
            'show_ui' => true,
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'post_type' );