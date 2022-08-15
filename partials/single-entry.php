<?php
    if ( key_exists( 'left', $args ) ) {
        $left = $args[ 'left' ];
    } else {
        $left = false;
    }
?>

<article class="entry">
    <div class="flex flex-col md:grid md:grid-cols-12 gap-6 <?= $left ? ' grid-flow-row-dense' : ''?>">
        <header class="box-container col-span-7 <?= !$left ? 'col-start-1' : 'col-end-13' ?>">
            <img src="https://picsum.photos/1000/1000?grayscale&random=<?= random_int(1, 100) ?>" class="w-100 h-100 max-w-500 max-h-500" alt="">
        </header>

        <div class="entry-content col-span-5 relative md:mt-20 <?= !$left ? 'col-start-8 md:-ml-48' : 'col-end-6 md:-mr-48' ?> drop-shadow-md">
            <?php the_title( '<h3 class="box-container bg-floral-white mb-6">', '</h3>' ) ?>
            <div class="box-container bg-floral-white">
                <p><?= get_the_excerpt() ?></p>
                <div class="flex justify-start mt-4">
                    <a class="btn btn-primary"><?= __( 'Read more', 'aydev' ) ?></a>
                </div>
            </div>
        </div>
    </div>
</article> 