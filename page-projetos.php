<?php
get_header();
//Template Name: Page Projetos
?>


    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">
                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_template_directory_uri() ?>assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white">Método MTM</span>
                </header>

                <div class="body-hero-min head_service">
                    
                    <ul class="list_cat_projects">
                        <li><a href="" class="active" data-type="all">Todos</a></li>

                        <?php
                                $cats_service = get_terms([
                                    'taxonomy' => 'categories'
                                ]);

                                foreach($cats_service as $cat):
                            ?>
                            <li ><a href="#services" data-type="<?= $cat->slug; ?>"><?= $cat->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </section>

        <section class="d-flex bg-black">

        <?php

            $args = [
                'post_type' => 'projeto',
                'posts_per_page' => -1
            ];

            $result = new WP_Query($args);

            if($result->have_posts()):
                while($result->have_posts()):
                    $result->the_post();

                    $cats_projeto = get_the_terms(get_the_ID(), 'categories');

        ?>

            <article class="card_project" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'large') ?>);" data-type="<?php  foreach($cats_projeto as $item){ echo $item->slug;} ?>">

                <div class="marquee_title title-md color-white response_marquee_title">
                    <?php
                        for($n = 0; $n < 10; $n++){
                            echo get_the_title()." ";
                        }
                    ?>
                </div>

                <div class="content_card_project">

                    <div class="arrow_card_project">
                        <i class="bi bi-arrow-up-right"></i>
                    </div>

                    <p class="color-white text-lg"><?= get_the_content() ?></p>

                    <p class="color-white text-lg"></p>

                    <div class="info_card_project">
                        
                        <?php
                            if($cats_projeto) {
                                echo '<ul class="list_cat_card_project">';
                                foreach ($cats_projeto as $category) {
                                    echo '<li><span  class="text-uppercase">' . esc_html($category->name) . '</span></li>';
                                }
                                echo '</ul>';
                            }
                        ?>

                        <div class="btn_view_project">
                            <a href="<?= get_the_permalink() ?>">Ver Projeto</a>
                        </div>
                    </div>
                </div>

            </article>
                    
        <?php endwhile; wp_reset_postdata(); endif; ?>

        <!-- 
            <article class="card_project" style="background-image: url(assets/img/rec2.jpg);" data-type="ui-ux">

                <div class="marquee_title title-md color-white">bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso</div>

                <div class="content_card_project">

                    <div class="arrow_card_project">
                        <i class="bi bi-arrow-up-right"></i>
                    </div>

                    <p class="color-white text-lg">Construímos marcas que desejam crescimento e autoridade no mercado através do Método MTM.</p>

                    <p class="color-white text-lg">Conheça a história da Bem Sorriso, Otta Sushi e Lilás Cozinha.</p>

                    <div class="info_card_project">
                      
                        <ul class="list_cat_card_project">
                            <li><span class="color-red text-uppercase">Branding</span></li>
                            <li><span class="text-uppercase">UI.UX</span></li>
                            <li><span class="text-uppercase">Mobile</span></li>
                        </ul>

                        <div class="btn_view_project">
                            <a href="">Ver Projeto</a>
                        </div>
                    </div>
                </div>
                
            </article>

            <article class="card_project" style="background-image: url(assets/img/rec3.jpg);" data-type="redes-sociais">

                <div class="marquee_title title-md color-white">bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso</div>

                <div class="content_card_project">

                    <div class="arrow_card_project">
                        <i class="bi bi-arrow-up-right"></i>
                    </div>

                    <p class="color-white text-lg">Construímos marcas que desejam crescimento e autoridade no mercado através do Método MTM.</p>

                    <p class="color-white text-lg">Conheça a história da Bem Sorriso, Otta Sushi e Lilás Cozinha.</p>

                    <div class="info_card_project">
                      
                        <ul class="list_cat_card_project">
                            <li><span class="color-red text-uppercase">Branding</span></li>
                            <li><span class="text-uppercase">UI.UX</span></li>
                            <li><span class="text-uppercase">Mobile</span></li>
                        </ul>

                        <div class="btn_view_project">
                            <a href="">Ver Projeto</a>
                        </div>
                    </div>
                </div>
                
            </article>

            <article class="card_project" style="background-image: url(assets/img/rec4.png);" data-type="foto-e-video">

                <div class="marquee_title title-md color-white">bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso</div>

                <div class="content_card_project">

                    <div class="arrow_card_project">
                        <i class="bi bi-arrow-up-right"></i>
                    </div>

                    <p class="color-white text-lg">Construímos marcas que desejam crescimento e autoridade no mercado através do Método MTM.</p>

                    <p class="color-white text-lg">Conheça a história da Bem Sorriso, Otta Sushi e Lilás Cozinha.</p>

                    <div class="info_card_project">
                      
                        <ul class="list_cat_card_project">
                            <li><span class="color-red text-uppercase">Branding</span></li>
                            <li><span class="text-uppercase">UI.UX</span></li>
                            <li><span class="text-uppercase">Mobile</span></li>
                        </ul>

                        <div class="btn_view_project">
                            <a href="">Ver Projeto</a>
                        </div>
                    </div>
                </div>
                
            </article>

            <article class="card_project" style="background-image: url(assets/img/rec4.jpg);" data-type="campanha">

                <div class="marquee_title title-md color-white">bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso</div>

                <div class="content_card_project">

                    <div class="arrow_card_project">
                        <i class="bi bi-arrow-up-right"></i>
                    </div>

                    <p class="color-white text-lg">Construímos marcas que desejam crescimento e autoridade no mercado através do Método MTM.</p>

                    <p class="color-white text-lg">Conheça a história da Bem Sorriso, Otta Sushi e Lilás Cozinha.</p>

                    <div class="info_card_project">
                      
                        <ul class="list_cat_card_project">
                            <li><span class="color-red text-uppercase">Branding</span></li>
                            <li><span class="text-uppercase">UI.UX</span></li>
                            <li><span class="text-uppercase">Mobile</span></li>
                        </ul>

                        <div class="btn_view_project">
                            <a href="">Ver Projeto</a>
                        </div>
                    </div>
                </div>
                
            </article>
             -->
        </section>

    </main>

<?php get_footer(); ?>