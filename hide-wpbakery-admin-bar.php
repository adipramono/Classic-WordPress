//Hide WPBakery Admin Bar 
function vc_remove_wp_admin_bar_button() {
  remove_action( 'admin_bar_menu', array( vc_frontend_editor(), 'adminBarEditLink' ), 1000 );
}
add_action( 'vc_after_init', 'vc_remove_wp_admin_bar_button' );