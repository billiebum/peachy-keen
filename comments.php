<?php if (post_password_required()) return; ?>

<div class="comments">

  <?php if (have_comments()) : ?>
    <h2>Comments</h2>

    <ul class="comment-list">
      <?php
        wp_list_comments(array(
          'style' => 'ul',
          'short_ping' => true,
        ));
      ?>
    </ul>
  <?php endif; ?>

  <?php comment_form(); ?>

</div>