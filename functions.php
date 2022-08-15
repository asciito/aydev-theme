<?php

if (!defined('ABSPATH')) {
    exit;
}

define('AYDEV_VER', '1.0.0');

if ( !function_exists( 'aydev_setup_theme' ) )
{
    function aydev_setup_theme()
    {
        // Theme support
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        // Register menu
        register_nav_menus([
            'primary-menu' => __( 'Primary Menu', 'aydev' ),
            'social-menu' => __( 'Social Menu', 'aydev' ), 
        ]);
    }
}
add_action( 'after_setup_theme', 'aydev_setup_theme' );

if ( !function_exists( 'aydev_register_menus' ) )
{
    function aydev_nav_menu_css_class($classes, $item, $nav_menu_obj)
    {
        $theme_location = $nav_menu_obj->theme_location ?? null;
        
        if ( $theme_location == 'primary-menu' ) {
            return ['ay-menu-item'];
        } elseif ( $theme_location == 'social-menu' ) {
            return ['ay-social-item'];
        } else {
            return $classes;
        }
    }
}
add_filter( 'nav_menu_css_class', 'aydev_nav_menu_css_class', 10, 3);

if ( !function_exists( 'aydev_enqueue_styles' ) )
{
    function aydev_enqueue_styles()
    {
        wp_enqueue_style(
            'aydev_base',
            get_template_directory_uri().'/assets/css/dist/base.css',
            [],
            AYDEV_VER
        );
    }
}
add_action('wp_enqueue_scripts', 'aydev_enqueue_styles');

if ( !function_exists( 'aydev_get_the_excerpt') ) {
    function aydev_get_the_excerpt( string $text ) {
        return wp_trim_words( $text, 85);
    }
}
add_filter( 'get_the_excerpt', 'aydev_get_the_excerpt');