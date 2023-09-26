<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <h1><?= get_the_title(); ?></h1>
        </div>

        <div class="container content_post">
            <?php the_content() ?>
        </div>
    </section>
</main>

<?php get_footer() ?>