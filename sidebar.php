<div class="sidebar">
  <?php if (is_active_sidebar('primary')) : ?>
    <?php dynamic_sidebar('primary'); ?>
  <?php else : ?>
    <p>Add widgets in Appearance → Widgets</p>
  <?php endif; ?>
</div>