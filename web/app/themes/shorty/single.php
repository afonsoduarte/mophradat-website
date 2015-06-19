<?php 
/**
 * single.php
 *
 * @package Shorty
 * @since Shorty 0.0
 */
get_header(); ?>

<div id="main">
    <section id="content" role="main">
         <?php while ( have_posts() ) : the_post(); ?>		
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="postmetadata">
                        <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p><span class="authorlink"><?php echo get_the_author(); ?></span> &nbsp; 
                            <span class="dated"><?php echo get_the_time('F jS, Y'); ?></span></p>		
                        <div class="responses">
                          <?php comments_popup_link(); ?> 
<img alt="comments" src="<?php echo get_template_directory_uri(); ?>/images/comment.gif" width="16" /> 
                        </div>			
                    </header> 
		        <div class="entry">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		                <?php the_content('Read more &raquo; <span class="meta-nav">&#8594;</span>', 'shorty'); ?>
                                    <?php _e( ' Categories: ', 'shorty' ); the_category( ', ' ); ?>
                                        <p><?php the_tags(__('Related Topics: &nbsp;', 'shorty' ) ); ?></p>
		        </div>
                	    <?php comments_template(); ?><br>
                </article><!-- ends post section --> 
                    <nav class="navigation">
                        <p><span>&laquo; <?php previous_post_link(); ?> &laquo;</span>  &raquo; <?php next_post_link(); ?> &raquo;</p>
                    </nav> 
	    <?php endwhile; ?>
	        
    </section>   

</div> <!-- ends main -->
            <?php get_footer(); ?>