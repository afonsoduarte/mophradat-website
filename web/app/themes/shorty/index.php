<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * This theme, shorty, uses this index page exclusively to cover all formats except
 * for the posting of individual posts which uses the single template page. Pages will use 
 * the page template. Categories and Archive posts will use catergory template
 * and the blog will use this page.
 *
 * @package Shorty
 * @since Shorty 0.1
 */
get_header(); ?>

<div id="main">
    <div id="leftsidebar">
        <?php get_sidebar(); ?>
    </div>
        <section id="content" role="main">
        <?php if (have_posts()) : ?>		
            <?php while ( have_posts() ) : the_post(); ?>		
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="postmetadata">
                        <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p><span class="authorlink"><?php echo get_the_author(); ?></span> - <span class="dated"><?php echo get_the_time('F jS, Y'); ?></span></p>		
                            <div class="responses">
                                <?php comments_popup_link(); ?><img alt="comments" src="<?php echo get_template_directory_uri(); ?>/images/comment.gif" height="16" /> 
                            </div>			
                    </header>
		        <div class="entry">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		            <?php the_content('Read more &raquo; <span class="meta-nav">&#8594;</span>', 'shorty'); ?>
                                <div class="article-meta">
                                    <p><?php _e( ' Categories: ', 'shorty' ); the_category( ', ' ); ?></p>
		                    <p><?php the_tags( __( 'Key Tags: ', 'shorty' ), ', ' ); ?></p>
		                    <p><?php edit_post_link( __( 'Edit', 'shorty' ), '<span class="edit-link">', '</span>' ); ?></p>
                                </div>
                        </div>				
		            <?php comments_template(); ?>
                </article><!-- ends post section --> 
                    <nav class="navigation">
                        <p><span>&laquo; <?php previous_post_link(); ?> &laquo;</span>  &raquo; <?php next_post_link(); ?> &raquo;</p>
                    </nav> 
	    <?php endwhile; ?>
                <div  class="navigation centered">
                    <?php posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>
                </div>
	        <?php else : ?>	
	            <div class="post">
	              <h2>No Articles Found</h2>
		      <p>Oops, what you were looking for is not here.</p>
                    </div>	

	<?php endif; ?>
                     
        </section>   
</div> <!-- ends main -->
            <?php get_footer(); ?>