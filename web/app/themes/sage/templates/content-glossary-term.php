<article 
  id="glossary-term-<?php the_id(); ?>"
  <?php post_class( Roots\Sage\Models\glossary_term_classes() ); ?>>
  <h1 class="glossary-term__title"><?php the_title(); ?></h1>
  <div class="glossary-term__content">
    <?php the_content(); ?>
  </div>
</article>
<button type="button" class="glossary-term__toggle" data-toggle="glossary-term--collapse" data-target="#glossary-term-<?php the_id(); ?>">
  <span class="sr-only"><?= __('Toggle term', 'sage'); ?></span>
  [...]
</button>