<?php get_header() ?>
<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): the_post(); ?>
        <article>
            <div class="">
                <img class="-mb-[4.6rem]" src="https://picsum.photos/2000/600?grayscale">
                <?php the_title('<h1 class="pl-2 text-white">', '</h1>') ?>
            </div>
            <?php the_content() ?>
        </article>
        <?= posts_nav_link(); ?>
    <?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>