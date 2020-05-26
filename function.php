<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: wpex
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function total_child_enqueue_parent_theme_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'Total' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), $version );
	
}
add_action( 'wp_enqueue_scripts', 'total_child_enqueue_parent_theme_style' );


//Classis Editor Appoarch using Total Theme Setup
//Hide WPBakery Admin Bar 
function vc_remove_wp_admin_bar_button() {
  remove_action( 'admin_bar_menu', array( vc_frontend_editor(), 'adminBarEditLink' ), 1000 );
}
add_action( 'vc_after_init', 'vc_remove_wp_admin_bar_button' );

//Hide GTB switch
add_action('admin_head', 'i_love_classic_editor');

function i_love_classic_editor() {
  echo '<style>
   body .composer-switch a.wpb_switch-to-gutenberg {
      display:none;
    } 
  </style>';
}
//Disable gutenberg for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

//Disable gutenberg for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);
