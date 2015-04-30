<?php

function merge_option_default_variables() {
  $options = get_option('plugin_options');

  $defaults = array(
    'vobe_facebook_link'          => '',
    'vobe_twitter_link'           => '',
    'vobe_google_link'            => '',
    'vobe_mail_link'              => '',
    'vobe_linkedin_link'          => '',
    'vobe_xing_link'              => '',
    'vobe_skype_link'             => '',
    'vobe_youtube_link'           => '',
    'vobe_vimeo_link'             => '',
    'vobe_flickr_link'            => '',
    'vobe_rss_link'               => '',
    'vobe_imprint_link'           => '',
    'vobe_google_map_code'        => '',
  );

  return wp_parse_args( $options, $defaults );
}

function create_theme_options_page() {
    // Global variable for Themes' settings page hook
    global $vobe_settings_page;

    $vobe_settings_page = add_menu_page('Vobe Optionen', 'Vobe Optionen', 'read', 'vobe_settings', 'build_options_page', 'dashicons-lightbulb');

    // Add contextual help
    add_action( 'load-' . $vobe_settings_page, 'add_contextual_theme_help' );
}
add_action('admin_menu', 'create_theme_options_page');


function build_options_page() { ?>
    <div id="theme-options-wrap" class="widefat wrap">
        <div class="icon32" id="icon-options-general"><br /></div>
        <h2>Zusätzliche Einstellungen</h2>
        <?php settings_errors(); ?>

        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php settings_fields('plugin_options'); ?>
            <?php do_settings_sections(__FILE__); ?>
            <p class="submit"><input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" /></p>
        </form>
    </div>
<?php }


function add_contextual_theme_help() {
    global $vobe_settings_page;

    // Get the current screen object
    $screen = get_current_screen();

    $tabs = array(
        // The assoc key represents the ID
        // It is NOT allowed to contain spaces
        'vobe-intro' => array(
            'title'   => 'Lies mich',
            'content' => 'Tach auch.<br><h3>Supported Web Browsers</h3><br><h3>Support</h3>'
         ),
        'vobe-menu' => array(
            'title'   => 'Menu',
            'content' => file_get_contents( get_template_directory() . '/help/menu.html' )
        )
    );

    foreach ( $tabs as $id => $data ) {
        $screen->add_help_tab( array(
            'id'       => $id,
            'title'    => __( $data['title'], 'root' ),
            'content'  => $data['content']
            )
        );
    }
}


function register_and_build_fields() {
  register_setting('plugin_options', 'plugin_options', 'validate_setting');

  add_settings_section('social_media_section', 'Social Media Links', 'section_cb', __FILE__);
  add_settings_field('vobe_facebook_link', 'Facebook:', 'vobe_facebook_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_twitter_link', 'Twitter:', 'vobe_twitter_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_google_link', 'Google+:', 'vobe_google_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_mail_link', 'Email:', 'vobe_mail_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_linkedin_link', 'LinkedIn:', 'vobe_linkedin_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_xing_link', 'Xing:', 'vobe_xing_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_skype_link', 'Skype:', 'vobe_skype_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_youtube_link', 'Youtube:', 'vobe_youtube_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_vimeo_link', 'Vimeo:', 'vobe_vimeo_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_flickr_link', 'Flickr:', 'vobe_flickr_link', __FILE__, 'social_media_section');
  add_settings_field('vobe_rss_link', 'RSS:', 'vobe_rss_link', __FILE__, 'social_media_section');

  add_settings_section('main_section', 'Sonstige Einstellungen', 'section_cb', __FILE__);
  add_settings_field('vobe_imprint_link', 'Link zum Impressum:', 'imprint_link_setting', __FILE__, 'main_section');
  add_settings_field('vobe_google_map_code', 'Embed Code Google Maps:', 'vobe_google_map_code', __FILE__, 'main_section');
}
add_action('admin_init', 'register_and_build_fields');

function validate_setting($plugin_options) { return $plugin_options; }

function section_cb() {}

function imprint_link_setting() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_imprint_link]' type='text' value='{$options['vobe_imprint_link']}' class='regular-text'/>";
}

function vobe_google_map_code() {
  $options = merge_option_default_variables();
  echo "<textarea name='plugin_options[vobe_google_map_code]' rows='5' class='large-text code'>{$options['vobe_google_map_code']}</textarea>";
}

function vobe_facebook_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_facebook_link]' type='text' value='{$options['vobe_facebook_link']}' class='regular-text'/>";
}

function vobe_twitter_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_twitter_link]' type='text' value='{$options['vobe_twitter_link']}' class='regular-text'/>";
}

function vobe_google_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_google_link]' type='text' value='{$options['vobe_google_link']}' class='regular-text'/>";
}

function vobe_mail_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_mail_link]' type='text' value='{$options['vobe_mail_link']}' class='regular-text'/>";
}

function vobe_linkedin_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_linkedin_link]' type='text' value='{$options['vobe_linkedin_link']}' class='regular-text'/>";
}

function vobe_xing_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_xing_link]' type='text' value='{$options['vobe_xing_link']}' class='regular-text'/>";
}

function vobe_skype_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_skype_link]' type='text' value='{$options['vobe_skype_link']}' class='regular-text'/>";
}

function vobe_youtube_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_youtube_link]' type='text' value='{$options['vobe_youtube_link']}' class='regular-text'/>";
}

function vobe_vimeo_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_vimeo_link]' type='text' value='{$options['vobe_vimeo_link']}' class='regular-text'/>";
}

function vobe_flickr_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_flickr_link]' type='text' value='{$options['vobe_flickr_link']}' class='regular-text'/>";
}

function vobe_rss_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[vobe_rss_link]' type='text' value='{$options['vobe_rss_link']}' class='regular-text'/>";
}