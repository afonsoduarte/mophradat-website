<?php while (have_posts()) : the_post(); ?>
  <article 
    id="publication-single-<?php the_id(); ?>"
    <?php post_class( Roots\Sage\Models\publication_classes('publication-single') ); ?>>
    <div class="publication-single__thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <h1 class="publication-single__title"><?php the_title(); ?></h1>
    <h2 class="publication-single__author">
      <?php print_r( get_field('author_name') ); ?>
    </h2>
    <div class="publication-single__content">
      <?php the_content(); ?>
    </div>

  </article>
<?php endwhile; ?>
