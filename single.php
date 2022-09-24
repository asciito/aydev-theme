<?php get_header();

$thumb_classes = 'w-100 h-100 max-w-100 max-h-100';
?>
<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): the_post(); ?>
            <div class="relative shadow-md border border-gray-300">
                <?php the_title('<h1 class="absolute bottom-0 left-0 ml-4 m-4 text-white drop-shadow-md">', '</h1>') ?>
                <?php if( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail( 'ay_banner_entry', [ 'class' => $thumb_classes ] ); ?>
                <?php else : ?>
                    <img src="<?= esc_url( dummy_image(1920, 600) ); ?>" class="<?= $thumb_classes ?>" alt="">
                <?php endif; ?>
            </div>

            <hr class="border border-raisin-black mt-4 mb-2 md:mb-8">

            <div class="article-area md:grid md:grid-cols-12 md:gap-5">
                <div class="article-area--sidebar md:col-span-3">
                    <ul class="font-light text-xl flex justify-center md:flex-col md:justify-start space-x-4 md:space-x-0">
                        <li><?= get_the_date('M d, Y') ?></li>
                        <span class="md:hidden">|</span> 
                        <li>
                            <?= __( 'Author', 'aydev' ); ?>:
                            <span class="italic font-bold"><?= get_the_author() ?></span>
                        </li>
                        <li class="hidden md:block">
                            <span class="text-sm text-gray-600"><?= get_the_author_meta( 'description' ) ?: 'You still not have a bio?, go to your profile setting and add one. And remember not to show your user name (it\'s set by default)' ?></span>
                        </li>
                    </ul>
                </div>

                <hr class="md:hidden border border-raisin-black mt-2 mb-4">

                <div class="article-area--content md:col-span-9">
                    <?php the_content() ?>
                </div>
            </div>
        </article>

        <hr class="border border-raisin-black mt-8 mb-8">

        <ul class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:justify-between">
            <?php
            $prev = get_previous_post();
            $next = get_next_post();
            ?>
            <?php if ( $prev ): ?>
            <li><a
                title="<?= get_the_title($prev) ?>"
                class="flex items-center space-x-2 border-container px-4 py-2"
                href="<?= get_the_permalink($prev) ?>">
                <span class="text-xl">⬅️</span>
                <span>Prev</span>
            </a></li>
            <?php else: ?>
                <span></span>
            <?php endif; ?>

            <?php if ( $next ): ?>
            <li><a
                title="<?= get_the_title( $next ) ?>"
                class="flex items-center space-x-2 border-container px-4 py-2"
                href="<?= get_the_permalink( $next ) ?>">
                <span>Next</span>
                <span class="text-xl">➡️</span>
            </a></li>
            <?php else: ?>
                <span></span>
            <?php endif; ?>
        </ul>
    <?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>