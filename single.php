<?php get_header() ?>
<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): the_post(); ?>
            <div class="relative">
                <?php the_title('<h1 class="absolute top-0 left-0 ml-4 mt-4 text-white">', '</h1>') ?>
                <img src="https://picsum.photos/2000/600?grayscale">
            </div>

            <hr class="border border-raisin-black mt-4 mb-2 md:mb-8">

            <div class="article-area md:grid md:grid-cols-12 md:gap-5">
                <div class="article-area--sidebar md:col-span-3">
                    <ul class="font-light text-xl md:text-2xl flex justify-center md:flex-col md:justify-start space-x-4 md:space-x-0">
                        <li><?= get_the_date('M d, Y') ?></li>
                        <span class="md:hidden">|</span>
                        <li>
                            <?= __( 'Author', 'aydev' ); ?>:
                            <span class="italic font-bold"><?= get_the_author() ?></span>
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
            <li><a
                title="<?= get_the_title($prev) ?>"
                class="flex items-center space-x-2 border-container px-4 py-2"
                href="<?= get_the_permalink($prev) ?>">
                <span class="text-xl">⬅</span>
                <span>Prev</span>
            </a></li>
            <li><a
                title="<?= get_the_title($next) ?>"
                class="flex items-center space-x-2 border-container px-4 py-2"
                href="<?= get_the_permalink($prev) ?>">
                <span>Next</span>
                <span class="text-xl rotate-180">⬅</span>
            </a></li>
        </ul>
    <?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>