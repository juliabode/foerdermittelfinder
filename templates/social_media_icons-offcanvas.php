<?php 
    $options      = get_option('plugin_options');
    $social_media = array('facebook', 'twitter', 'google', 'mail', 'linkedin', 'xing', 'skype', 'youtube', 'vimeo', 'flickr', 'rss');
?>

<ul class="social-media-links">
    <?php foreach ($social_media as $i => $name) {
              if (!empty( $options['vobe_' . $name . '_link'] )) {
                  echo '<li><a href="' . $options['vobe_'.$name.'_link'] . '" target="_blank" class="fa fa-' . $name . '">' . $name . '</a></li>';
              }
          }
    ?>
</ul>