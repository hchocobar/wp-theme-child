<?php
/**
 * ThemeParent child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */




/**
 * Codigo generado para Hestia.
 *
 * Fuente: Neetwork - MasterWeb
 * 
 * Ejemplo 
 * 
 */
if ( !defined( 'ABSPATH' ) ) exit;

if ( !function_exists( 'hestia_child_parent_css' ) ):
    function hestia_child_parent_css() {
        wp_enqueue_style( 'hestia_child_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap' ) );
	if( is_rtl() ) {
		wp_enqueue_style( 'hestia_child_parent_rtl', trailingslashit( get_template_directory_uri() ) . 'style-rtl.css', array( 'bootstrap' ) );
	}

    }
endif;
add_action( 'wp_enqueue_scripts', 'hestia_child_parent_css', 10 );

/**
 * Import options from Hestia
 *
 * @since 1.0.0
 */
function hestia_child_get_lite_options() {
	$hestia_mods = get_option( 'theme_mods_hestia' );
	if ( ! empty( $hestia_mods ) ) {
		foreach ( $hestia_mods as $hestia_mod_k => $hestia_mod_v ) {
			set_theme_mod( $hestia_mod_k, $hestia_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'hestia_child_get_lite_options' );

/**
 * Codigo extraido de Developers WordPress.
 *
 * @link : https://developer.wordpress.org/themes/advanced-topics/child-themes/
 * 
 * Fuente: WordPress
 * 
 * Ejemplo 1
 * 
 */	
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 10 );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),         array( 'parenthandle' ),         wp_get_theme()->get('Version') 
    // this only works if you have Version in the style header
    );
}

/**
 * Codigo extraido de Developers WordPress.
 *
 * @link : https://developer.wordpress.org/themes/advanced-topics/child-themes/
 * 
 * Fuente: WordPress
 * 
 * Ejemplo 2
 * 
 */	
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}