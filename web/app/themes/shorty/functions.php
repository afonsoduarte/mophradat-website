<?php

function shorty_setup() {
    if ( ! isset( $content_width ) ) $content_width = 800;
    add_editor_style();
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_editor_style( 'custom-editor-style.css' );
    // Wordpress translations can be filed in the wp-content/languages/ directory
    load_theme_textdomain( 'shorty_theme_textdomain', get_template_directory().'/languages' );

    register_nav_menu('header-menu',__( 'Header Menu' ));

    //* Add support for custom background
    add_theme_support( 'custom-background', array( 'default-color' => 'fcfcfc',) );
    
    add_theme_support( 'custom-header', array (
       'default-image' => get_template_directory_uri() . '/images/default-header.png',	
       'height'	   => 142,
       'width'         => 350, 
       'header-text'   => false,
    ));   
}
    add_action('after_setup_theme', 'shorty_setup');

function shorty_add_theme_scripts() {
     /*
      * Adds JavaScript to pages with the comment form to support
      * sites with threaded comments (when in use).
      */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );  

    // Register StyleSheet
    wp_enqueue_style( 'shorty-style', get_stylesheet_uri()
    );
}
    add_action( 'wp_enqueue_scripts', 'shorty_add_theme_scripts' );


    // add ie conditional html5 shim to header
function shorty_add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="js/html5.js"></script>';
    echo '<![endif]-->';
}
    add_action('wp_head', 'shorty_add_ie_html5_shim');

    // Changing excerpt more
function shorty_new_excerpt_more($more) {
    global $post;
    return ' <a href="'. get_permalink($post->ID) . '">' . '&#91; Read On&hellip; &#93; ' . '</a>';
}
    add_filter('excerpt_more', 'shorty_new_excerpt_more');

    // Widgets
function shorty_widgets_init() {
    register_sidebar(array(
        'name' => 'Left Hidden Sidebar',
        'id' => 'left-sidebar',
        'description' => 'Left Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));	
    register_sidebar(array(
        'name' => 'Footer Middle Sidebar',
        'id' => 'footer-sidebar',
        'description' => 'Calendar is default - one widget preferred, short widgets fit best',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));			
}
   add_action( 'widgets_init', 'shorty_widgets_init' );

?>