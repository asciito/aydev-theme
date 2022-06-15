<?php
/**
 * Template part for displaying a simple footer with my social media
 * 
 * @since 1.0.0
 */
?>

<div>
    <?php
    $args = [
        'menu_class' => '',
        'menu_id' => 'footer_menu',
        'container' => 'nav',
        'container_class' => '',
        'container_id' => 'navbar-social',
        'theme_location' => 'footer-menu',
    ];

    wp_nav_menu($args);
    ?>
</div>