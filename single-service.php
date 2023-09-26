<?php
get_header();

if(have_posts()): while(have_posts()): the_post();

?>

    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">

                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <?php $cats_single = get_the_terms(get_the_ID(), 'categories_service'); ?>
                    <span class="color-white"><?= $cats_single[0]->name ?></span>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white"><?= get_the_title(); ?> </span>

                </header>

                <div class="body-hero-min head_service head_project">
                    
                    <h1 class="color-white title-sm"><?= get_the_title(); ?></h1>

                    <h2 class="color-white title-sm"><?= get_the_date('Y') ?></h2>

                </div>
            </div>
        </section>

        <section class="bg-black">
            <div class="container header_single_service">
                <img src="<?= get_the_post_thumbnail_url(null, 'large') ?>" alt="">
            </div>
            <div class="content_post d-flex" style="max-width: 1100px; margin: auto">
                <?php the_content() ?>
            </div>
        </section>

        <div class="space-border-gray"></div>
    </main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>