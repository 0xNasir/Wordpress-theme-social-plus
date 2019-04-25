<?php 
//1. Slider button text starts
function social_summary_instance_text_callback($post){
	wp_nonce_field('summary_instance_text_save', 'social_summary_instance_text_metabox_nonce');
	$value=get_post_meta( $post->ID, 'social_summary_instance_text_value_key',true);
	echo '<label for="social_summary_instance_text_field">Summary instance: </label>';
	echo '<input type="text" name="social_summary_instance_text_field" value="'.esc_attr($value).'" placeholder="" class="container" id="social_summary_instance_text_field" />';
}
add_action( 'save_post','summary_instance_text_save');
function summary_instance_text_save($post_id){
	if (!isset($_POST['social_summary_instance_text_metabox_nonce'])) {
		return;
	}
	if (!wp_verify_nonce($_POST['social_summary_instance_text_metabox_nonce'],'summary_instance_text_save')) {
		return;
	}
	if (defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE) {
		return;
	}
	if (!current_user_can('edit_post',$post_id)) {
		return;
	}
	if (!isset($_POST['social_summary_instance_text_field'])) {
		return;
	}
	$position=sanitize_text_field($_POST['social_summary_instance_text_field']);
	update_post_meta( $post_id, 'social_summary_instance_text_value_key', $position);
}
// Slider button text end here