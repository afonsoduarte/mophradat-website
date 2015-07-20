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

  // PDF file upload on pages and publications
  register_field_group(array (
    'id' => 'acf_pdf',
    'title' => '[:en]PDF[:]',
    'fields' => array (
      array (
        'key' => 'field_55acc37728c62',
        'label' => 'PDF',
        'name' => 'pdf',
        'type' => 'qtranslate_file',
        'save_format' => 'object',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'publications',
          'order_no' => 0,
          'group_no' => 1,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'custom_fields',
        1 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
}
