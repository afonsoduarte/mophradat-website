<?php if(get_field('pdf')): ?>
<div class="pdf">
  <?php $pdf = get_field('pdf'); ?>
  <a href="<?php echo $pdf['url']; ?>" class="pdf__link">
    PDF THIS
  </a>
</div>
<?php endif; ?>