<?php
/**
 * Ktest Theme Customizer
 *
 * @package Ktest
 */

/**
 * Customize options.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
add_action( 'customize_register', function( $wp_customize ) {
$wp_customize->register_control_type( '\Kirki\Field\Typography' );
});
