<?php 

// Change Posts to Glossary
function change_post_menu_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'Glossary';
  $submenu['edit.php'][5][0] = 'Glossary';
  $submenu['edit.php'][10][0] = 'Add Glossary Term';
  //$submenu['edit.php'][15][0] = 'Status'; // Change name for categories
  //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
  echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );


function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'Glossary Terms';
  $labels->singular_name = 'Glossary Term';
  $labels->add_new = 'Add Glossary Term';
  $labels->add_new_item = 'Add Glossary Term';
  $labels->edit_item = 'Edit Glossary Terms';
  $labels->new_item = 'Glossary Term';
  $labels->view_item = 'View Glossary Term';
  $labels->search_items = 'Search Glossary Terms';
  $labels->not_found = 'No Glossary Terms found';
  $labels->not_found_in_trash = 'No Glossary Terms found in Trash';
}
add_action( 'init', 'change_post_object_label' );