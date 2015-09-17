<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner navbar" role="banner">
  <div class="navbar__container">
    <div class="navbar__header">
      <button type="button" class="navbar__toggle collapsed" data-toggle="collapse" data-target=".navbar__nav">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
      </button>
      <a class="navbar__name--en" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <a class="navbar__name--ar qtranxs_text_ar" href="<?= esc_url(home_url('/')); ?>">مفردات</a>
    </div>

    <nav class="navbar__nav" role="navigation">
      <div class="navbar__lang-menu">
        <?php echo qtranxf_generateLanguageSelectCode(); ?>
      </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'navbar__menu']);
      endif;
      ?>
    </nav>
  </div>
</header>
