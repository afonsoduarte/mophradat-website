<?php
/**
 * Template Name: Publications Archive
 */
?>

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