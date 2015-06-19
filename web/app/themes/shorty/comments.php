<?php
/*
 * comments.php
 * @shorty
 */
    if ( post_password_required() )
        return;
?>
    <section id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title"><?php get_the_title() ?></h2>
            <aside class="entry">
                <ol class="commentlist">
                <?php wp_list_comments(); ?>
                </ol><!-- ends commentlist -->
                <div class="comments-navigation">
                  <div class="alignleft"><?php previous_comments_link() ?></div>
                  <div class="alignright"><?php next_comments_link() ?></div>
                </div>
        <?php else : // this is displayed if there are no comments so far ?>
	    <?php if ( comments_open() ) : ?>
		<small>No Comments yet, be the first to reply</small>
	<?php else : // then this if comments are closed ?>
	        <small>Comments are Closed on this Post</small>
	    <?php endif;
    endif; // end have_comments() ?>
            </aside>
    <?php comment_form(); ?>
    </section><!-- #comments .comments-area -->
