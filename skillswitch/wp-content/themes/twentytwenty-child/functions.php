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

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

register_sidebar( array(
	'name' => 'Blog Sidebar',
	'id' => 'sidebar-52',
	'before_widget' => '<div class="sidebar_wbox">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="rounded">',
	'after_title' => '</h4>',
) );
register_sidebar( array(
	'name' => 'Get a Quote',
	'id' => 'sidebar-53',
	'before_widget' => '<div id="wpgyan2-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );
register_sidebar( array(
	'name' => 'Footer About',
	'id' => 'sidebar-54',
	'before_widget' => '<div id="wpgyan2-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );
register_sidebar( array(
	'name' => 'What we do',
	'id' => 'sidebar-55',
	'before_widget' => '<div id="wpgyan2-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );
register_sidebar( array(
	'name' => 'Get in Touch',
	'id' => 'sidebar-56',
	'before_widget' => '<div id="wpgyan2-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );
register_sidebar( array(
	'name' => 'Copy Right',
	'id' => 'sidebar-57',
	'before_widget' => '<div id="wpgyan2-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );
register_sidebar( array(
	'name' => 'Footer Social',
	'id' => 'sidebar-58',
	'before_widget' => '<div id="wpgyan2-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );