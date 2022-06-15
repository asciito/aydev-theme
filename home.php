<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/designs/content', 'recent') ?>

    <?php endwhile; ?>

    <?php the_posts_pagination([
        'prev_text' => '<',
        'next_text' => '>',
        'class' => 'blog-pagination',
    ]); ?>
<?php endif; ?>

<?php get_footer() ?>