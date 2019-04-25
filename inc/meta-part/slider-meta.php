<?php 
//1. Slider button text starts
function social_slider_button_text_callback($post){
	wp_nonce_field('slider_button_text_save', 'social_slider_button_text_metabox_nonce');
	$value=get_post_meta( $post->ID, 'social_slider_button_text_value_key',true);
	echo '<label for="social_slider_button_text_field">Button Text: </label>';
	echo '<input type="text" name="social_slider_button_text_field" value="'.esc_attr($value).'" placeholder="" id="social_slider_button_text_field" />';
}
add_action( 'save_post','slider_button_text_save');
function slider_button_text_save($post_id){
	if (!isset($_POST['social_slider_button_text_metabox_nonce'])) {
		return;
	}
	if (!wp_verify_nonce($_POST['social_slider_button_text_metabox_nonce'],'slider_button_text_save')) {
		return;
	}
	if (defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE) {
		return;
	}
	if (!current_user_can('edit_post',$post_id)) {
		return;
	}
	if (!isset($_POST['social_slider_button_text_field'])) {
		return;
	}
	$position=sanitize_text_field($_POST['social_slider_button_text_field']);
	update_post_meta( $post_id, 'social_slider_button_text_value_key', $position);
}
// Slider button text end here

//2. Slider button URL starts
function social_slider_button_link_callback($post){
	wp_nonce_field( 'slider_button_link_save', 'social_slider_button_link_metabox_nonce');
	$value=get_post_meta( $post->ID, 'social_slider_button_link_value_key',true);
	echo '<label for="social_slider_button_link_field">Button URL: </label>';
	echo '<input type="text" name="social_slider_button_link_field" value="'.esc_attr($value).'" placeholder="" id="social_slider_button_link_field" />';

}
add_action( 'save_post','slider_button_link_save');
function slider_button_link_save($post_id){
	if (!isset($_POST['social_slider_button_link_metabox_nonce'])) {
		return;
	}
	if (!wp_verify_nonce($_POST['social_slider_button_link_metabox_nonce'],'slider_button_link_save')) {
		return;
	}
	if (defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE) {
		return;
	}
	if (!current_user_can('edit_post',$post_id)) {
		return;
	}
	if (!isset($_POST['social_slider_button_link_field'])) {
		return;
	}
	$position=sanitize_text_field($_POST['social_slider_button_link_field']);
	update_post_meta( $post_id, 'social_slider_button_link_value_key', $position);
}
// Slider button URL end here