<?php

namespace Roots\Sage\Taxonomies;

/**
 * Register Taxonomies
 */

function register_taxonomies() {
  
  register_taxonomy(
    'publication-type',
    'publications',
    array(
      'label' => __( 'Publication Type' ),
      'rewrite' => array( 'slug' => 'publication-type' ),
      'hierarchical' => true
    )
  );
  wp_insert_term( 'One-offs', 'publication-type' );
  wp_insert_term( 'Series', 'publication-type' );
}

add_action( 'init', __namespace__ . '\\register_taxonomies' );
