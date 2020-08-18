<?php
/**
* Plugin Name: Example PostTypeName Custom Post Type
* Plugin URI: https://github.com/FreshyMichael/CustomPostType-Template
* Description: Add a Description
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* PluginName Start */
//______________________________________________________________________________
function example_register_post_type() {

	$labels = array(
		'name' => __( 'PostTypeName', 'example' ),
		'singular_name' => __( 'PostTypeName', 'example' ),
		'add_new' => __( 'New PostTypeName', 'example' ),
		'add_new_item' => __( 'Add New PostTypeName', 'example' ),
		'edit_item' => __( 'Edit PostTypeName', 'example' ),
		'new_item' => __( 'New PostTypeName', 'example' ),
		'view_item' => __( 'View PostTypeNames', 'example' ),
		'search_items' => __( 'Search PostTypeNames', 'example' ),
		'not_found' =>  __( 'No PostTypeNames Found', 'example' ),
		'not_found_in_trash' => __( 'No PostTypeNames found in Trash', 'example' ),
	);

	$args = array(
 		'labels' => $labels,
 		'has_archive' => true,
 		'public' => true,
 		'hierarchical' => false,
 		'supports' => array(
  		'title',
  		'editor',
  		'excerpt',
  		'custom-fields',
  		'thumbnail',
  		'page-attributes'
 		),
		'menu_icon' => 'dashicons-media-text',
 		'taxonomies' => 'category',
 		'rewrite'   => array( 'slug' => 'lca' ),
 		'show_in_rest' => true,
	);

	register_post_type( 'example_PostTypeName', $args );

}

add_action( 'init', 'example_register_post_type' );

//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/CustomPostType-Template',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'CustomPostType-Template'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* PluginName End */
?>
