<?php 
/**
 * category page
 *
 * @package Shorty
 * @since Shorty 0.1
 */
get_header(); ?>

<div id="main">
  <div id="leftsidebar"><?php get_sidebar(); ?></div>
    <section id="content" role="main">
        <?php if (have_posts()) : ?>		
            <?php while ( have_posts() ) : the_post(); ?>		
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="postmetadata">
                        <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p><span class="authorlink"><?php echo get_the_author(); ?></span> &nbsp; 
                            <span class="dated"><?php echo get_the_time('F jS, Y'); ?></span></p>		
                        <div class="responses">
                      <!--    <?php comments_popup_link(); ?> 
<img alt="comments" src="<?php echo get_template_directory_uri(); ?>/images/comment.gif" width="16" /> -->
                        </div>			
                    </header> 
		            <div class="entry">
                                <div class="entry-summary">
                                  <?php the_excerpt(); ?>
                                </div>	
                                    <p><?php the_tags(__('Related Topics: &nbsp;', 'shorty' ) ); ?></p>
		            </div>				
		                <?php comments_template(); ?>
                </article><!-- ends post section --> 
                    <nav class="navigation">
<p><span>&laquo; <?php previous_post_link(); ?> &laquo;</span>  &raquo; <?php next_post_link(); ?> &raquo;</p>
                    </nav> 
	    <?php endwhile; ?>
	        <?php else : ?>	
	            <div class="post">
	              <h2>No Articles Found</h2>
		      <p>Oops, what you were looking for is not here.</p>
                    </div>
	
	<?php endif; ?> 

    </section>   
</div> <!-- ends main --> 
            <?php get_footer(); ?>