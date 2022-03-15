<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

add_shortcode( 'output_post_excerpt', 'get_the_excerpt' );

function cod_redirect_checkout_add_cart( $url ) {
   $url = wc_get_page_permalink( 'checkout' ); 
   return $url;
}


// Vendor Stylesheet Overrides
remove_action('wp_enqueue_scripts', array($GLOBALS['et_monarch'], 'load_scripts_styles'));
add_action('wp_enqueue_scripts', 'nap_font_overrides', 20);
function nap_font_overrides()
{
	wp_enqueue_style('nap_monarch_css', get_stylesheet_directory_uri() . '/vendor/monarch/style.css', array(), ' 0.0.1');
}
