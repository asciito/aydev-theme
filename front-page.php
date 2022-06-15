<?php get_header(); ?>

<!-- INTO -->
<div>
    <div>
        <img src="https://picsum.photos/id/237/500/500" class="max-w-full">
    </div>

    <div>
        <p>Soy Ayax</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem fugiat omnis obcaecati. Reprehenderit autem nulla unde corporis harum animi. Reiciendis.</p>

        <a href="/">Más sobre mi</a>
    </div>
</div>
<!-- END:INTRO -->

<!-- NEWSLETTER -->
<div>
    <div>
        <form action="#" method="POST">
            <input type="text" placeholder="Tu e-mail">

            <button type="submit"><span class="hidden"></span><i>check</i></button>
        </form>
    </div>
</div>
<!-- END:NEWSLETTER -->


<!-- MOST RECENT BLOG POSTS -->
<?php get_template_part('template-parts/content/content', 'recents'); ?>
<!-- END:MOST RECENT BLOG POSTS -->

<?php get_footer() ?>