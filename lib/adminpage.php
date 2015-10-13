<?php

function merge_option_default_variables() {
  $options = get_option('plugin_options');

  $defaults = array(
    'rike_facebook_link'          => '',
    'rike_twitter_link'           => '',
    'rike_google_link'            => '',
    'rike_mail_address'           => '',
    'rike_linkedin_link'          => '',
    'rike_xing_link'              => '',
    'rike_skype_link'             => '',
    'rike_youtube_link'           => '',
    'rike_phone_number'           => '',
    'rike_flickr_link'            => '',
    'rike_rss_link'               => '',
    'rike_imprint_link'           => '',
    'rike_google_map_code'        => '',
  );

  return wp_parse_args( $options, $defaults );
}

function create_theme_options_page() {
    // Global variable for Themes' settings page hook
    global $rike_settings_page;

    $rike_settings_page = add_menu_page('Rike Optionen', 'Rike Optionen', 'read', 'rike_settings', 'build_options_page', 'dashicons-lightbulb');

    // Add contextual help
    add_action( 'load-' . $rike_settings_page, 'add_contextual_theme_help' );
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
    global $rike_settings_page;

    // Get the current screen object
    $screen = get_current_screen();

    $tabs = array(
        // The assoc key represents the ID
        // It is NOT allowed to contain spaces
        'rike-intro' => array(
            'title'   => 'Lies mich',
            'content' => 'Tach auch.<br><h3>Supported Web Browsers</h3><br><h3>Support</h3>'
         ),
        'rike-menu' => array(
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
  add_settings_field('rike_facebook_link', 'Facebook:', 'rike_facebook_link', __FILE__, 'social_media_section');
  add_settings_field('rike_twitter_link', 'Twitter:', 'rike_twitter_link', __FILE__, 'social_media_section');
  add_settings_field('rike_google_link', 'Google+:', 'rike_google_link', __FILE__, 'social_media_section');
  add_settings_field('rike_mail_address', 'Email:', 'rike_mail_address', __FILE__, 'social_media_section');
  add_settings_field('rike_linkedin_link', 'LinkedIn:', 'rike_linkedin_link', __FILE__, 'social_media_section');
  add_settings_field('rike_xing_link', 'Xing:', 'rike_xing_link', __FILE__, 'social_media_section');
  add_settings_field('rike_skype_link', 'Skype:', 'rike_skype_link', __FILE__, 'social_media_section');
  add_settings_field('rike_youtube_link', 'Youtube:', 'rike_youtube_link', __FILE__, 'social_media_section');
  add_settings_field('rike_phone_number', 'Telefon:', 'rike_phone_number', __FILE__, 'social_media_section');
  add_settings_field('rike_flickr_link', 'Flickr:', 'rike_flickr_link', __FILE__, 'social_media_section');
  add_settings_field('rike_rss_link', 'RSS:', 'rike_rss_link', __FILE__, 'social_media_section');

  add_settings_section('main_section', 'Sonstige Einstellungen', 'section_cb', __FILE__);
  add_settings_field('rike_imprint_link', 'Link zum Impressum:', 'imprint_link_setting', __FILE__, 'main_section');
  add_settings_field('rike_google_map_code', 'Embed Code Google Maps:', 'rike_google_map_code', __FILE__, 'main_section');
}
add_action('admin_init', 'register_and_build_fields');

function validate_setting($plugin_options) { return $plugin_options; }

function section_cb() {}

function imprint_link_setting() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_imprint_link]' type='text' value='{$options['rike_imprint_link']}' class='regular-text'/>";
}

function rike_google_map_code() {
  $options = merge_option_default_variables();
  echo "<textarea name='plugin_options[rike_google_map_code]' rows='5' class='large-text code'>{$options['rike_google_map_code']}</textarea>";
}

function rike_facebook_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_facebook_link]' type='text' value='{$options['rike_facebook_link']}' class='regular-text'/>";
}

function rike_twitter_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_twitter_link]' type='text' value='{$options['rike_twitter_link']}' class='regular-text'/>";
}

function rike_google_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_google_link]' type='text' value='{$options['rike_google_link']}' class='regular-text'/>";
}

function rike_mail_address() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_mail_address]' type='text' value='{$options['rike_mail_address']}' class='regular-text'/>";
}

function rike_linkedin_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_linkedin_link]' type='text' value='{$options['rike_linkedin_link']}' class='regular-text'/>";
}

function rike_xing_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_xing_link]' type='text' value='{$options['rike_xing_link']}' class='regular-text'/>";
}

function rike_skype_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_skype_link]' type='text' value='{$options['rike_skype_link']}' class='regular-text'/>";
}

function rike_youtube_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_youtube_link]' type='text' value='{$options['rike_youtube_link']}' class='regular-text'/>";
}

function rike_phone_number() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_phone_number]' type='text' value='{$options['rike_phone_number']}' class='regular-text'/>";
}

function rike_flickr_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_flickr_link]' type='text' value='{$options['rike_flickr_link']}' class='regular-text'/>";
}

function rike_rss_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[rike_rss_link]' type='text' value='{$options['rike_rss_link']}' class='regular-text'/>";
}