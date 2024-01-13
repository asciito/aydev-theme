<?php
/**
 * Helper functions
 *
 * @package Aydev
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get an dummy image url from dummyimage.com
 */
function dummy_image(int $width, int $height): string
{
    return "https://dummyimage.com/${width}x{$height}/3c3c3c/ff";
}