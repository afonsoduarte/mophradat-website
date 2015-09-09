<?php
/**
 * Template Name: Publications Archive
 */
?>

<?php $page = get_page_by_path( 'publishing' ); ?>
<?php if($page): ?>
<div class="publication-header">
  <h1 class="page-title">
    <?php echo apply_filters('the_title', $page->post_title); ?>
  </h1>
  <?php echo apply_filters('the_content', $page->post_content); ?>
</div>
<?php endif; ?>

<div class="publication-list">
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/excerpt', 'publication'); ?>
<?php endwhile; ?>
</div>