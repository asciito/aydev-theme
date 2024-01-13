<?php
/**
 * Functions file
 *
 * @package Aydev
 * @since 1.0.0
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AYDEV_VER', '1.0.0' );

if ( ! function_exists( 'aydev_setup_theme' ) )
{
    function aydev_setup_theme(): void
    {
        // Theme support
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        // Image sizes
        add_image_size( 'ay_cube_medium', 512, 512, true );
        add_image_size( 'ay_cube_medium_large', 800, 800, true );
        add_image_size( 'ay_banner_entry', 1920, 600, true );

        // Image sizes - banners
        # Leaderboard
        add_image_size( 'ay_banner_leaderboard', 728, 90, true );
        add_image_size( 'ay_banner_leaderboard_large', 1456, 180, true );
        # Skyscraper
        add_image_size( 'ay_banner_skyscraper', 120, 600, true );
        add_image_size( 'ay_banner_skyscraper_large', 240, 1200, true );

        // Custom logo
        add_theme_support( 'custom-logo', [
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ] );
        
        // Register menu
        register_nav_menus([
            'primary-menu' => __( 'Primary Menu', 'aydev' ),
            'social-menu'  => __( 'Social Menu', 'aydev' ),
        ]);
    }

    add_theme_support( 'editor-styles' );

    add_editor_style( [
        'assets/css/dist/base.css',
    ] );
}
add_action( 'after_setup_theme', 'aydev_setup_theme' );

if ( ! function_exists( 'aydev_register_menus' ) )
{
    /**
     * Filter nav menu css classes
     *
     * @param array $classes Array of css classes
     * @param WP_Post $item Menu item
     * @param stdClass $nav_menu_obj Menu object
     *
     * @return array The new array of css classes
     */
    function aydev_nav_menu_css_class(array $classes, WP_Post $item, stdClass $nav_menu_obj): array
    {
        $newClasses     = [];
        $theme_location = $nav_menu_obj->theme_location ?? null;

        if ( $theme_location == 'primary-menu' ) {
            $newClasses[] = 'ay-menu-item';
        } elseif ( $theme_location == 'social-menu' ) {
            $newClasses[] = 'ay-social-item';
        } else {
            return $classes;
        }

        if ( $item->current ) {
            $newClasses[] = 'current';
        }

        return $newClasses;
    }
}
add_filter( 'nav_menu_css_class', 'aydev_nav_menu_css_class', 10, 3);

if ( ! function_exists( 'aydev_enqueue_styles' ) )
{
    function aydev_enqueue_styles(): void
    {
        wp_enqueue_style( 'dashicons' );

        wp_enqueue_style(
            'aydev_google_fonts',
            "https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap",
            [],
            null
        );

        wp_enqueue_style(
            'aydev_base',
            get_template_directory_uri() . '/assets/css/dist/base.css',
            [],
            AYDEV_VER
        );
    }
}
add_action('wp_enqueue_scripts', 'aydev_enqueue_styles');

if ( ! function_exists( 'aydev_head' ) ) {
    function aydev_head(): void
    {
        ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php
    }
}
add_action( 'wp_head', 'aydev_head', 5 );

if ( ! function_exists( 'aydev_enqueue_scripts' ) )
{
    function aydev_enqueue_scripts(): void
    {
        wp_enqueue_script(
            'aydev_main',
            get_template_directory_uri() . '/assets/js/main.js',
            [],
            AYDEV_VER,
        );
    }
}
add_action( 'wp_enqueue_scripts', 'aydev_enqueue_scripts' );

if ( ! function_exists( 'aydev_get_the_excerpt') ) {
    function aydev_get_the_excerpt( string $text ): string
    {
        return wp_trim_words( $text, 85);
    }
}
add_filter( 'get_the_excerpt', 'aydev_get_the_excerpt');

if ( ! function_exists( 'aydev_get_custom_logo' ) ) {
    function aydev_get_custom_logo(): string
    {
        $logo_id = get_option( 'custom_logo' );

        if ( $logo_id ) {
            return wp_get_attachment_image_src( $logo_id )[0];
        }

        return "https://dummyimage.com/300x300/3c3c3c/ff";
    }
}

require __DIR__ . '/helpers/functions.php';