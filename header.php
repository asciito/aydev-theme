<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header-container mb-16">
        <div class="flex flex-col items-center">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        
        if ( has_custom_logo( )): ?>
            <img src="<?= esc_url( $logo[0] )?>" class="w-full min-w-[200px] max-w-[300px]" alt="<?= get_bloginfo( 'name' )?>">
        <?php else: ?>
            <img src="https://dummyimage.com/300x300/3c3c3c/ff" class="w-100 max-w-[300px] rounded-full grayscale-[10] box-container">
        <?php endif; ?>
            <h2 class="text-lg uppercase mt-4 text-center" style="letter-spacing: .8rem;">código en las venas</h2>
        </div>

        <div class="relative">

        <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'menu_class' => 'ay-menu',
                'menu_id' => 'ay-primary-menu',
                'container' => 'nav',
                'container_class' => 'ay-nav-container',
                'container_id' => 'ay-primary-container',
                'depth' => 1,
            ]);
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