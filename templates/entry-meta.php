<?php 
    $time = get_post_time(
        'd. F Y',      // format
        TRUE,          // GMT
        get_the_ID(),  // Post ID
        TRUE           // translate, use date_i18n()
    );
?>

<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo $time; ?></time>