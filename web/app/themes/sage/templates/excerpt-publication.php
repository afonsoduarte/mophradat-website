<article 
  id="publication-<?php the_id(); ?>"
  <?php post_class( Roots\Sage\Models\publication_classes('publication--excerpt') ); ?>>
  <h1 class="publication__title sr-only"><?php the_title(); ?></h1>
  <div class="publication__thumbnail">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>
  </div>
</article>