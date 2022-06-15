<article id="id-<?php the_ID(); ?>">
    <div>
        <img src="https://picsum.photos/id/240/500/500" class="max-w-full">
    </div>

    <div>
        <div>
            <p><?php the_title(); ?></p>
        </div>

        <div>
            <p><?php the_excerpt(); ?></p>

            <a href="<?= esc_url(get_the_permalink()) ?>">
                <?= __('Read now', 'aydev'); ?>
            </a>
        </div>
    </div>
</article>