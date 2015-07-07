<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  // add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style(Assets\asset_path('styles/editor-style.css'));

}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');


/**
 * Check if page exists and return it if it does
 */
function get_page_by_name($pagename) {
  $pages = get_pages();
  foreach ($pages as $page) {
    if ($page->post_title == $pagename) {
      return $page;
    }
  }
  return false;
}

/**
 * wp_insert_post wrapper for creating pages 
 */
function create_page($page) {
  global $user_ID;

  // Check for page existence
  $page_check = get_page_by_name($page['post_title']);
  if( $page_check !== false ) {
    $pageid = $page_check->ID;
  } 
  // Create page
  else {
    // // Convert content to json for Sir Trevor
    // $content_array = array(
    //   'data' => array( 
    //     array(
    //       'type' => 'text', 
    //       'data' => array( 
    //         'text' => $page['post_content'] 
    //       ))));
    // $page['post_content'] = json_encode($content_array);

    $page['post_author'] = $user_ID;
    $page['post_type'] = 'page';
    $page['post_status'] = 'publish';
    $pageid = wp_insert_post($page);
  }

  // Display Error if there was a problem creating the page
  if ($pageid == 0) {
    add_action( 'admin_notices', function() use ( $page ) { 
      ?>
      <div class="error">
        <p>There was a problem creating page <i><?php echo $page['post_title']; ?></i></p>
      </div>
      <?php 
      }
    );
  } 
  // No errors!
  else {
    // Create child pages if we have any
    if( isset($page['post_children']) ) {
      foreach ($page['post_children'] as $child) {
        $child['post_parent'] = $pageid;
        create_page($child);
      }
    }
  }
}

/**
 * Generate default pages
 */
function generate_default_content() {

  // GRANTS
  $past_grantees_page = array(
    'post_content' =>'[:en]Past grantees content[:ar]رسمي[:]',
    'post_title' => '[:en]Past Grantees[:ar][:]'
  );

  $download_form_page = array(
    'post_content' =>'[:en]Download application form content[:ar]رسمي[:]',
    'post_title' => '[:en]Download application form[:ar][:]'
  );

  $submit_page = array(
    'post_content' =>'[:en]Submit application form content[:ar]رسمي[:]',
    'post_title' => '[:en]Submit application[:ar][:]'
  );

  $grants_for_artists_page = array(
    'post_content' =>'[:en]Grants for artists content[:ar]رسمي[:]',
    'post_title' => '[:en]Grants for artists[:ar][:]',
    'post_children' => array( $download_form_page, $submit_page )
  );

  $grants_for_temporary_page = array(
    'post_content' =>'[:en]Grants for temporary content[:ar]رسمي[:]',
    'post_title' => '[:en]Grants for temporary spaces & projects[:ar][:]'
  );

  $grants_page = array(
    'post_content' =>'[:en]Grants content[:ar]رسمي[:]',
    'post_title' => '[:en]Grants[:ar][:]',
    'post_parent' => 0,
    'post_children' => array( $past_grantees_page, $grants_for_artists_page, $grants_for_temporary_page )
  );
  create_page($grants_page);


  // MEETING POINTS
  $meeting_points_page = array(
    'post_content' =>'[:en]Meeting points content[:ar]رسمي[:]',
    'post_title' => '[:en]Meeting points[:ar][:]',
    'post_parent' => 0
  );
  create_page($meeting_points_page);


  // CONVERSATIONS
  $writer_text_page = array(
    'post_content' =>'[:en]Writer’s text content[:ar]رسمي[:]',
    'post_title' => '[:en]Writer’s text[:ar][:]'
  );

  $other_conversations_page = array(
    'post_content' =>'[:en]Other conversations content[:ar]رسمي[:]',
    'post_title' => '[:en]Other conversations[:ar][:]',
    'post_children' => array( $writer_text_page )
  );

  $informal_meeting_page = array(
    'post_content' =>'[:en]Informal content[:ar]رسمي غير رسمي[:]',
    'post_title' => '[:en]Informal[:ar]غير رسمي[:]'
  );

  $conversations_page = array(
    'post_content' =>'[:en]Conversations content[:ar]رسمي[:]',
    'post_title' => '[:en]Conversations[:ar][:]',
    'post_parent' => 0,
    'post_children' => array( $informal_meeting_page, $other_conversations_page )
  );
  create_page($conversations_page);


  // About us
  $about_us_page = array(
    'post_content' =>'[:en]About us content[:ar]رسمي[:]',
    'post_title' => '[:en]About us[:ar][:]',
    'post_parent' => 0
  );
  create_page($about_us_page);


  // GLOSSARY
  $glossary_page = array(
    'post_content' =>'[:en]Glossary content[:ar]رسمي[:]',
    'post_title' => '[:en]Glossary[:ar][:]',
    'post_parent' => 0,
    'page_template' => 'archive-glossary.php'
  );
  create_page($glossary_page);
}

// Create default pages
add_action('after_switch_theme', __NAMESPACE__ . '\\generate_default_content');


/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
// add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');
