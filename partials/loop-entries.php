<?php
    global $wp_query;

    if ( key_exists( 'the_query', $args ) ) {
        $the_query = $wp_query = $args['the_query'];
    }
?>

<div class="entries-container flex flex-col space-y-16 md:space-y-10">
<?php if ( !have_posts() ): $i = 1 ?>
    <?php while ( have_posts() ): the_post() ?>
        <?php get_template_part( 'partials/single', 'entry', [ 'left' => $i % 2 !== 0 ] ); ?>
    <?php $i++; endwhile; ?>

    <?php if ( isset($the_query) ):
        $the_query->reset_postdata(); ?>
    <?php else: ?>
        <div class="pagination-container flex justify-center space-x-4">
        <?= paginate_links( [
            'total' => $wp_query->max_num_pages,
            'before_page_number' => '<span class="screen-reader-text">Page</span><span class="number">',
            'after_page_number' => '</span>',
            'prev_next' => false,
        ] );?>
        </div>
    <?php endif ?>
    
<?php else: ?>
    <p class="box-container text-2xl text-center max-w-2xl self-center">
        <?= __( 'There\'s no entries available right now, back later', 'aydev' ); ?>
    </p>
<?php endif; ?>
</div>