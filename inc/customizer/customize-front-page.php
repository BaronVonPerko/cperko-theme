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

    /*
     * Customize Main Section Header
     */
    $wp_customize->add_setting( 'cperko-fp-main-title', array(
        'default'   => 'Lorem Ipsum',
    ) );

    $wp_customize->add_control( 'cperko-fp-main-title', array(
        'label'     => __( 'Header', 'cperko' ),
        'section'   => 'cperko-front-page',
        'settings'  => 'cperko-fp-main-title',
        'type'      => 'text',
    ) );

    /*
     * Customize Main Section Text Area
     */
    $wp_customize->add_setting( 'cperko-fp-main-text', array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius enim vel sapien rutrum ultrices. Praesent et venenatis dolor, eu tristique orci. Sed est tortor, convallis vitae bibendum sed, viverra in orci. Vestibulum lacinia, erat at vestibulum gravida, enim est laoreet est, a maximus metus neque sed lorem. Aenean in tempor lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam placerat libero id quam malesuada, a pellentesque arcu vehicula. Nulla at posuere dolor.',
    ) );

    $wp_customize->add_control( 'cperko-fp-main-text', array(
        'label'     => __( 'Main Text', 'cperko' ),
        'section'   => 'cperko-front-page',
        'settings'  => 'cperko-fp-main-text',
        'type'      => 'textarea',
    ) );

    /*
     * Customize Skills Section Header
     */
    $wp_customize->add_setting( 'cperko-fp-skills-header', array(
        'default'   => 'Skills',
    ) );

    $wp_customize->add_control( 'cperko-fp-skills-header', array(
        'label'     => __( 'Skills Section Header', 'cperko' ),
        'section'   => 'cperko-front-page',
        'settings'  => 'cperko-fp-skills-header',
        'type'      => 'text',
    ) );
}
add_action( 'customize_register', 'cperko_register_front_page_customizer' );