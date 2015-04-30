<?php 
    $time = get_comment_time(
        'l, d. F Y',      // format
        TRUE,          // GMT
        TRUE           // translate, use date_i18n()
    );
?>

<div class="media-body">
  <div class="media-head">
    <?php echo get_avatar($comment, $size = '64'); ?>
    <h4 class="media-heading"><?php echo get_comment_author_link(); ?></h4>
    <time datetime="<?php echo comment_date('c'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php echo $time; ?></a></time>
    <?php edit_comment_link(__('(Edit)', 'roots'), '', ''); ?>
  </div>

  <?php if ($comment->comment_approved == '0') : ?>
    <div class="alert alert-info">
      <?php _e('Your comment is awaiting moderation.', 'roots'); ?>
    </div>
  <?php endif; ?>

  <?php comment_text(); ?>
  <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
