<?php
get_header();
?>


    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">
                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white"><?= get_the_title(); ?> </span>
                </header>

                <div class="body-hero-min head_service head_project">
                    
                    <h1 class="color-white title-sm"><?= get_the_title(); ?></h1>

                    <h2 class="color-white title-sm"><?= get_the_date('Y') ?></h2>

                </div>
            </div>
        </section>

        <section class="bg-black d-flex">
            <?php

                $imgs = get_field('galeria_de_imagens');

                foreach($imgs as $img):
                ?>

                <img src="<?= $img['url'] ?>" alt="">

            <?php endforeach; ?>
        </section>

        <div class="space-border-gray"></div>
    </main>

    
<?php get_footer(); ?>