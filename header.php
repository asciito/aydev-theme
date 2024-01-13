<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <header class="header-container mb-16">
        <div class="flex flex-col items-center">
            <img src="<?php echo esc_url( aydev_get_custom_logo() )?>" class="w-full min-w-[200px] max-w-[300px] rounded-full box-container" alt="Logo for for site <?php echo get_bloginfo( 'name' )?>">

            <h2 class="text-lg uppercase mt-4 text-center" style="letter-spacing: .8rem;">código en las venas</h2>
        <div class="relative">

        <?php
            wp_nav_menu( [
                'theme_location' => 'primary-menu',
                'menu_class' => 'ay-menu',
                'menu_id' => 'ay-primary-menu',
                'container' => 'nav',
                'container_class' => 'ay-nav-container',
                'container_id' => 'ay-primary-container',
                'depth' => 1,
            ] );
            ?>

            <div class="block lg:hidden absolute -right-4 -bottom-[5.5rem] flex flex-wrap space-y-2 w-11 cursor-pointer" data-menu="#ay-primary-container">
                <div class="w-full h-1 bg-raisin-black"></div>
                <div class="w-full h-1 bg-raisin-black"></div>
                <div class="w-full h-1 bg-raisin-black"></div>
            </div>
        </div>
    </header>

    <main class="main-container">
        <div class="inner-container max-w-7xl mx-auto">