<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header x-data="{ open: false }">
        <div class="flex justify-between lg:block">
            <?php if (has_custom_logo()): ?>
                <?php
                $logo_id = get_theme_mod('custom_logo');

                $image_src = wp_get_attachment_image_src($logo_id, 'full');
                ?>

                <img src="<?= esc_url($image_src); ?>">
            <?php endif ?>

            <div class="flex flex-col space-y-1 cursor-pointer lg:hidden" x-on:click="open = !open">
                <span class="inline-block w-10 h-1 bg-black"></span>
                <span class="inline-block w-10 h-1 bg-black"></span>
                <span class="inline-block w-10 h-1 bg-black"></span>
            </div>
        </div>


        <div>
            <?php
            $args = [
                'manu_class' => '',
                'menu_id' => 'primary-menu',
                'container' => 'nav',
                'container_class' => '',
                'container_id' => 'primary-menu-container',
                'depth' => 1,
                'theme_location' => 'primary-menu'
            ];


            wp_nav_menu($args);
            ?>
        </div>
    </header>

    <main>