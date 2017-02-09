<?php
/*
 * function-admin.php
 *
 * Administration panel functions
 */




/*
 * Register Admin Settings
 */
function register_cperko_settings() {
  register_setting( 'cperko-options-group', 'cperko-enable-portfolio' );
  register_setting( 'cperko-options-group', 'cperko-enable-work-history' );

  add_settings_section( 'cperko-settings', 'CPerko Settings', 'cperko_settings', 'cperko' );

  add_settings_field( 'cperko-enable-portfolio', 'Portfolio Page Enabled', 'cperko_enable_portfolio', 'cperko', 'cperko-settings' );
  add_settings_field( 'cperko-enable-work-history', 'Work History Page Enabled', 'cperko_enable_work_history', 'cperko', 'cperko-settings' );
}
add_action( 'admin_init', 'register_cperko_settings' );

function cperko_enable_portfolio() {
  $enablePortfolio = get_option( 'cperko-enable-portfolio' );
  $checked = @$enablePortfolio == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="cperko-enable-portfolio" '.$checked.' />';
  if( $checked ) {
    ?>
      <p>
        Use this <strong>shortcode</strong> to activate the portfolio inside a Page or Post
      </p>
      <code>[display_portfolio]</code>
    <?php
  }
 }

function cperko_enable_work_history() {
  $enableWorkHistory = get_option( 'cperko-enable-work-history' );
  $checked = @$enableWorkHistory == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="cperko-enable-work-history" '.$checked.' />';
  if( $checked ) {
    ?>
      <p>
        Use this <strong>shortcode</strong> to activate the work history inside a Page or Post
      </p>
      <code>[display_work_items]</code>
    <?php
  }
}

function cperko_settings() {
  echo 'Customize Theme Experience';
}




/*
 * Setup the CPerko Theme administration settings page
 */

function cperko_admin_settings() {
  add_menu_page( 'CPerko Theme Options', 'CPerko Settings', 'manage_options', 'cperko', 'cperko_get_admin_settings', null, 99 );

  add_submenu_page( 'cperko', 'Contact Form', 'Contact Form', 'manage_options', 'cperko-contact-page', 'cperko_contact_page' );
}
add_action( 'admin_menu', 'cperko_admin_settings' );

function cperko_contact_page() {
  require_once( get_stylesheet_directory() . '/inc/templates/admin-contact-form.php');
}

function cperko_get_admin_settings() {
  require_once( get_stylesheet_directory() . '/inc/templates/admin-settings.php' );
}



/*
 * Contact Form Options
 */
function cperko_contact_settings() {
  register_setting( 'cperko-contact-options', 'activate_contact_form' );
  register_setting( 'cperko-contact-options', 'require_phone' );
  register_setting( 'cperko-contact-options', 'success_message_1', array(
    'default' => 'Your message has been sent.',
  ) );
  register_setting( 'cperko-contact-options', 'success_message_2', array(
    'default' => 'I will be in touch with you soon!',
  ) );

  add_settings_section( 'cperko-contact-section', 'Contact Form', 'cperko_contact', 'cperko_contact' );

  add_settings_field( 'activate-form', 'Activate Contact Form', 'cperko_activate_contact', 'cperko_contact', 'cperko-contact-section' );
  add_settings_field( 'require-phone', 'Require Phone Number', 'cperko_require_phone', 'cperko_contact', 'cperko-contact-section' );
  add_settings_field( 'success-message-1', 'Success Message Line 1', 'cperko_success_message_1', 'cperko_contact', 'cperko-contact-section' );
  add_settings_field( 'success-message-2', 'Success Message Line 2', 'cperko_success_message_2', 'cperko_contact', 'cperko-contact-section' );
}
add_action( 'admin_init', 'cperko_contact_settings' );

function cperko_contact() {
  echo 'Activate and Deactivate the Built-in Contact Form';
}

function cperko_activate_contact() {
  $enableContactForm = get_option( 'activate_contact_form' );
  $checked = @$enableContactForm == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="activate_contact_form" '.$checked.' />';
}

function cperko_require_phone() {
  $enableContactForm = get_option( 'activate_contact_form' );
  $disabled = @$enableContactForm == 1 ? '' : 'disabled';

  $phoneRequired = get_option( 'require_phone' );
  $checked = @$phoneRequired == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="require_phone" '.$disabled.' '.$checked.' />';
}

function cperko_success_message_1() {
  $enableContactForm = get_option( 'activate_contact_form' );
  $disabled = @$enableContactForm == 1 ? '' : 'disabled';
  $message1 = esc_attr( get_option( 'success_message_1' ) );

  echo '<input type="text" name="success_message_1" '.$disabled.' value="'.$message1.'" />';
}

function cperko_success_message_2() {
  $enableContactForm = get_option( 'activate_contact_form' );
  $disabled = @$enableContactForm == 1 ? '' : 'disabled';
  $message2 = esc_attr( get_option( 'success_message_2' ) );

  echo '<input type="text" name="success_message_2" '.$disabled.' value="'.$message2.'" />';
}