<?php 

// define( 'ACF_LITE', true );

if(function_exists("register_field_group")) {
  
  // Publication Author
  register_field_group(array (
    'id' => 'acf_publications',
    'title' => 'Publications',
    'fields' => array (
      array (
        'key' => 'field_5582fba84c99d',
        'label' => 'Author',
        'name' => 'author_name',
        'type' => 'text',
        'instructions' => 'Publication author(s)',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'publications',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
