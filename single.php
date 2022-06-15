<?php get_header(); ?>

<article>
    <h1 class="text-4xl font-thin"><?= get_the_title(); ?></h1>
    <?php the_content(); ?>
</article>

<aside></aside>

<?php get_footer() ?>