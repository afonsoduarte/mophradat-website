<?php 
/**
 * page
 *
 * @package Shorty
 * @since Shorty 0.1
 */
get_header(); ?>
<div id="main">
    <div id="leftsidebar"><?php get_sidebar(); ?></div>
        <section id="content" role="main">
            <article class="entry 404">
                <h2><?php _e( 'Oops! This page can not be found.', 'shorty' ); ?></h2>
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'shorty' ); ?></p>
                <?php get_search_form(); ?>
             </article><!-- .page-content -->
         </section>   
</div> <!-- ends main -->
    <?php get_footer(); ?>