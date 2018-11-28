//Remove Rev Slider Metabox
if ( is_admin() ) {

	function remove_revolution_slider_meta_boxes() {
		remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
		remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
		remove_meta_box( 'mymetabox_revslider_0', 'YOUR-POST-TYPE', 'normal' );
	}

	add_action( 'do_meta_boxes', 'remove_revolution_slider_meta_boxes' );
	
}