<?php
add_action( 'add_meta_boxes', 'social_meta_box');
function social_meta_box(){
	add_meta_box( 'slider_button_text', 'Button Text','social_slider_button_text_callback', 'slider','side');
	add_meta_box( 'slider_button_link', 'Button Link','social_slider_button_link_callback', 'slider','side');
	add_meta_box( 'summary_instance', 'Summary instance','social_summary_instance_text_callback', 'summary', 'side');
	
}
require_once (get_template_directory().'/inc/meta-part/slider-meta.php');
require_once (get_template_directory().'/inc/meta-part/summary-meta.php');

?>
