<?php
add_action( 'init', 'create_custom_faq_post_type' );
/**
 * Register a nyheder post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_faq_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'FAQs', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'FAQ', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'FAQs', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'FAQ', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New FAQ', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New FAQ', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit FAQ', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View FAQ', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All FAQs', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search FAQs', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent FAQs:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No FAQs found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No FAQs found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'faq' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
 
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'faq', $args );
}


