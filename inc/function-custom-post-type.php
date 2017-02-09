<?php
/*
 * function-custom-post-type.php
 *
 * Setup the custom post types used by the theme.
 */




/*
 * Portfolio Items
 */
$enablePortfolio = get_option( 'cperko-enable-portfolio' );
if( @$enablePortfolio == 1 ) {
  add_action( 'init', 'cperko_create_portfolio_item_post_type' );
}

function cperko_create_portfolio_item_post_type() {
  $labels = array(
    'name'            => __( 'Portfolio Items' ),
    'singular_name'   => __( 'Portfolio Item' ),
    'menu_name'       => __( 'Portfolio' ),
    'name_admin_bar'  => __( 'Portfolio' ),
  );

  $args = array(
    'labels'          => $labels,
    'show_ui'         => true,
    'show_in_menu'    => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 26,
    'menu_icon'       => 'dashicons-portfolio',
    'supports'        => array( 'title', 'editor', 'thumbnail' ),
  );

  register_post_type( 'cperko-portfolio', $args );
}



/*
 * Work History Items
 */
$enableWorkHistory = get_option( 'cperko-enable-work-history' );
if( @$enableWorkHistory == 1 ) {
  add_action( 'init', 'cperko_create_work_history_post_type' );
}

function cperko_create_work_history_post_type() {
  $labels = array(
    'name'            => __( 'Work History' ),
    'singular_name'   => __( 'Work History' ),
    'menu_name'       => __( 'Work History' ),
    'name_admin_bar'  => __( 'Work History' ),
  );

  $args = array(
    'labels'          => $labels,
    'show_ui'         => true,
    'show_in_menu'    => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 27,
    'menu_icon'       => 'dashicons-list-view',
    'supports'        => array( 'title', 'editor', 'thumbnail' ),
  );

  register_post_type( 'cperko-work-history', $args );
}




/*
 * Contact Form
 */

$contact = get_option( 'activate_contact_form' );
if ( @$contact == 1 ) {
  add_action( 'init', 'cperko_create_contact_form_post_type' );
}

function cperko_create_contact_form_post_type() {
  $labels = array (
    'name'            => __( 'Messages' ),
    'singular_name'   => __( 'Message' ),
    'manu_name'       => __( 'Messages' ),
    'name_admin_bar'  => __( 'Message' ),
  );

  $args = array(
    'labels'          => $labels,
    'show_ui'         => true,
    'show_in_menu'    => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 28,
    'menu_icon'       => 'dashicons-email-alt',
    'supports'        => array( 'title', 'editor', 'author' ),
    'capabilities'    => array(
      'create_posts'  => false
    ),
    'map_meta_cap'    => true,
  );

  register_post_type( 'cperko-contact-page', $args );
}