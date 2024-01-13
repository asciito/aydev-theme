<?php
/**
 * Partial template for a single entry in a loop
 *
 * @package Aydev
 * @since 1.0.0
 */

if ( key_exists( 'left', $args ) ) {
    $left = $args[ 'left' ];
} else {
    $left = false;
}
?>

<article class="entry">
    <div class="flex flex-col md:grid md:grid-cols-12 gap-6 <?php echo $left ? ' grid-flow-row-dense' : ''?>">
        <header class="box-container col-span-7 self-start <?php echo !$left ? 'col-start-1' : 'col-end-13' ?>">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'ay_cube_medium_large', [ 'class' => 'w-100 h-100 grayscale' ] );
            } else {
                echo <<<TMN
                <img class="w-100 h-100 grayscale" src="https://dummyimage.com/800x800/3c3c3c/fff">
                TMN;
            }
            ?>
        </header>

        <div class="entry-content col-span-5 relative md:mt-20 <?php echo !$left ? 'col-start-8 md:-ml-48' : 'col-end-6 md:-mr-48' ?> drop-shadow-md">
            <?php the_title( '<h3 class="box-container bg-floral-white mb-6">', '</h3>' ) ?>
            <div class="box-container bg-floral-white">
                <p><?php echo get_the_excerpt() ?></p>
                <div class="flex justify-start mt-4">
                    <a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php echo __( 'Read more', 'aydev' ) ?></a>
                </div>
            </div>
        </div>
    </div>
</article> 