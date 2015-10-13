<?php 
    $options      = get_option('plugin_options');
    $social_media = array('facebook', 'twitter', 'google', 'mail', 'linkedin', 'xing', 'skype', 'youtube', 'vimeo', 'flickr', 'rss');
?>

<?php if ($options['rike_phone_number'] != '') { ?>
    <span class="right fa fa-phone">
        <?php echo $options['rike_phone_number']; ?>
    </span>
<?php } ?>

<?php if ($options['rike_mail_address'] != '') { ?>
    <span class="right fa fa-envelope">
        <a href="mailto:<?php echo $options['rike_mail_address']; ?>"><?php echo $options['rike_mail_address']; ?></a>
    </span>
<?php } ?>

<ul class="social-media-links">
    <?php foreach ($social_media as $i => $name) {
              if (!empty( $options['rike_' . $name . '_link'] )) {
                  echo '<li><a href="' . $options['rike_'.$name.'_link'] . '" target="_blank" class="fa fa-' . $name . '"></a></li>';
              }
          }
    ?>
</ul>
