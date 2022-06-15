<?php

function ay_after_theme_setup()
{
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'aydev'),
        'footer-menu' => __('Footer Menu', 'aydev'),
    ]);
}

add_action('after_setup_theme', 'ay_after_theme_setup');

function ay_enqueue_styles()
{
    wp_enqueue_style(
        'dummy',
        get_template_directory_uri() . '/assets/dist/css/style.css',
        '1.0.0',
        []
    );
}

add_action('wp_enqueue_scripts', 'ay_enqueue_styles');

/**
 * @param array $_ The array with some classes
 */
function ay_nav_menu_classes($_)
{
    return ['tailwindcss-class-dummy'];
}

add_filter('nav_menu_css_class', 'ay_nav_menu_classes', 10);

function ay_the_excerpt($post_excerpt)
{
    if (strlen($post_excerpt) >= 25) 
    {
        return wp_trim_words( $post_excerpt, 25, '...');
    }

    return $post_excerpt;
}

add_filter('the_excerpt', 'ay_the_excerpt', 10);