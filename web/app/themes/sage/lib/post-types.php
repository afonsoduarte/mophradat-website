<?php 

namespace Roots\Sage\PostTypes;

// Remove post menu since we won't use it
function hide_post_menu() {
  remove_menu_page('edit.php');
}
add_action( 'admin_menu', __NAMESPACE__.'\\hide_post_menu' );


// Custom Post Types
function register_post_types() {

  /* Glossary */
  $glossary = array(
    'public' => true,
    'label'  => 'Glossary',
    'supports' => array( 'title', 'editor' ),
    'has_archive' => true,
    'rewrite' => array( 'slug' => 'glossary' ),
  );
  register_post_type( 'glossary', $glossary );

  /* Publications */
  $publications = array(
    'public' => true,
    'label'  => 'Publications',
    'supports' => array( 'thumbnail', 'title', 'editor' ),
    'taxonomies' => array( 'publication-type' ),
    'has_archive' => true,
    'rewrite' => array( 'slug' => 'publishing' ),
  );
  register_post_type( 'publications', $publications );

}
add_action( 'init', __NAMESPACE__.'\\register_post_types' );