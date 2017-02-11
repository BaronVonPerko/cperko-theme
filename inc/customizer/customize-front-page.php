<?php

/*
 *   Customizer section and fields for customizing
 *   the static front-page.
 *
*/


function cperko_register_front_page_customizer( $wp_customize ) {
    $wp_customize->add_section( 'cperko-front-page', array(
        'title'         => 'Front Page Content',
        'priority'      => 30,
        'description'   => 'Customize the content on the static front page.',
    ) );

    $wp_customize->add_setting( 'cperko-fp-main-title', array(
        'default'   => 'Lorem Ipsum',
    ) );

    $wp_customize->add_control( 'cperko-fp-main-title', array(
        'label'     => __( 'Header', 'cperko' ),
        'section'   => 'cperko-front-page',
        'settings'  => 'cperko-fp-main-title',
        'type'      => 'text',
    ) );
}
add_action( 'customize_register', 'cperko_register_front_page_customizer' );