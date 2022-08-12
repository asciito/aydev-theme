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
    function aydev_nav_menu_css_class($classes, $item)
    {
        return ['ay-menu-item'];
    }
}
add_filter( 'nav_menu_css_class', 'aydev_nav_menu_css_class', 10, 2);

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