<?php
/*
 * shortcodes.php
 *
 */





// Display Portfolio Shortcode
function cperko_display_portfolio( $atts, $content = null ) {
  $atts = shortcode_atts (
    array(),
    $atts,
    'display_portfolio'
  );

  ob_start();
  include 'templates/shortcodes/portfolio.php';
  return ob_get_clean();
}
add_shortcode( 'display_portfolio', 'cperko_display_portfolio' );



// Display Work Items Shortcode
function cperko_display_work_items( $atts, $content = null ) {
  $atts = shortcode_atts (
    array(),
    $atts,
    'display_work_items'
  );

  ob_start();
  include 'templates/shortcodes/work-history.php';
  return ob_get_clean();
}
add_shortcode( 'display_work_items', 'cperko_display_work_items' );



// Contact Form Shortcode
function cperko_display_contact_form( $atts, $content = null ) {
  $atts = shortcode_atts (
    array(),
    $atts,
    'display_contact_form'
  );

  ob_start();
  include 'templates/shortcodes/contact-form.php';
  return ob_get_clean();
}
add_shortcode( 'contact_form', 'cperko_display_contact_form');