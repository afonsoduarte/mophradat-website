<?php

namespace Roots\Sage\Hooks;

/**
 * Hooks to change default behaviour
 */

function show_random_term( $query ) {
    if ( !is_admin() && $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '1' );
        $query->set( 'orderby', 'rand' );
    }
}
add_action( 'pre_get_posts', __namespace__ . '\\show_random_term' );