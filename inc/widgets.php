<?php 
function social_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Right sidebar', 'social' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'sidebar for right side', 'social' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar-widget widget %2$s right-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'social_widgets_init' );