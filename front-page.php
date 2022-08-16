<?php get_header() ?>
<?php if ( have_posts() ): ?>
    <?php while( have_posts() ): the_post() ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>


<h2 class="mt-5 mb-20 inline-block pb-4 pr-10 md:pr-20 border-b-4 border-b-raisin-black">Latest posts</h2>

<?php
    $the_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => get_option( 'posts_per_page', 5),
    ]);

    get_template_part('partials/loop', 'entries', ['the_query' => $the_query]);
?>
<?php get_footer() ?>