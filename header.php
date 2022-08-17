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
        <div class="logo-image flex justify-center">
            <img src="https://picsum.photos/seed/girl/250/250" class="w-100 max-w-full rounded-full grayscale-[10] box-container">
        </div>

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
    </header>

    <main class="main-container">
        <div class="inner-container max-w-7xl mx-auto">