<?php
/**
 * Template part for displaying the most recent posts (only three)
 * 
 * @since 1.0.0
 */

?>

<div>
    <h3>Lo más reciente</h3>

    <?php  $query = new WP_Query([ 'posts_per_page' => 3 ]); ?>

    <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()): $query->the_post(); ?>

        <?php get_template_part('template-parts/designs/content', 'recent'); ?>

        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>

    <a href="#"><?= __('Load more', 'aydev'); ?></a>
</div>