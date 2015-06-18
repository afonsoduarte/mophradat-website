<?php 

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_publications',
    'title' => 'Publications',
    'fields' => array (
      array (
        'key' => 'field_5581bb77368d5',
        'label' => 'author name',
        'name' => 'author_name',
        'type' => 'text',
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
      'position' => 'high',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
