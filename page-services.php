<?php
get_header();
//Template Name: Page Serviços
?>


    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">
                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white">Método MTM</span>
                </header>

                <div class="body-hero-min head_service">
                    <h1 class="title-md color-white">Consultoria Branding MTM</h1>

                    <p class="text-md color-white">Nunc et libero sed mi malesuada feugiat sit amet vestibulum mauris. Mauris pellentesque, nisi vitae facilisis commodo, nibh diam condimentum erat, eu aliquet lectus lectus ut nisl. Phasellus a lectus a urna aliquet sagittis. Proin pellentesque luctus nisi, a feugiat diam. Aliquam et eros quam. In at mi ut elit varius venenatis. Mauris condimentum ultricies nibh quis dapibus. Curabitur urna mauris, vestibulum vitae ullamcorper id, congue id augue.</p>

                    <a href="" class="btn-white text-uppercase">Saiba Mais</a>
                </div>
            </div>
        </section>

        <?php
            $cats_service = get_terms([
                'taxonomy' => 'categories_service'
            ]);

            foreach($cats_service as $cat):
        ?>
        

        <section class="bg-black ">
            <div class="container content_default">

                <div class="d-flex">
                    <div class="w-100 text-left">
                        <h2 class="title-sm color-white"><?= $cat->name ?></h2>
                    </div>

                    <section class="d-flex list_card_simple2 w-100">

                        <?php

                            $args = [
                                'post_type' => 'service',
                                'posts_per_page' => -1,
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'categories_service',
                                        'field' => 'slug',
                                        'terms' => $cat->slug
                                    ]
                                    
                                ]
                            ];

                            $results = new WP_Query($args);

                            if($results->have_posts()):
                                while($results->have_posts()):
                                    $results->the_post();

                        ?>

                        <div class="card_simple2">
                            <h3 class="color-white text-lg"><?= get_the_title() ?></h3>
    
                            <a href="<?= get_the_permalink() ?>" class="color-white b-bottom-red">Leia mais <i class="bi bi-arrow-right"></i></a>
                        </div>

                            <?php endwhile; wp_reset_postdata(); endif;  ?>
                        
                        <!-- 
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Plataforma de branding</h3>
    
                            <a href="" class="color-white b-bottom-red">Leia mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Naming</h3>
    
                            <a href="" class="color-white b-bottom-red">Leia mais <i class="bi bi-arrow-right"></i></a>
                        </div>
    
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Diagnóstico, análise de mercado, imersão e direcionadores</h3>
    
                            <a href="" class="color-white b-bottom-red">Leia Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
    
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Plataforma de branding</h3>
    
                            <a href="" class="color-white b-bottom-red">Leia Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
    
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Naming</h3>
    
                            <a href="" class="color-white b-bottom-red">Leia Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                         -->
                    </section>
                    
                </div>
            </div>
        </section>

        <?php endforeach; ?>

<!-- 
        <section class="bg-black">
            <div class="container content_default">
                <div class="d-flex">
                    <div class="w-100 text-left">
                        <h2 class="title-sm color-white">Planejamento</h2>
                    </div>

                    <section class="d-flex list_card_simple2">
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Planejamento de comunicação</h3>

                            <a href="" class="color-white b-bottom-red">Leia mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Planejamento de redes</h3>

                            <a href="" class="color-white b-bottom-red">Leia mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Planejamento de mídia</h3>

                            <a href="" class="color-white b-bottom-red">Leia mais <i class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Marketing</h3>

                            <a href="" class="color-white b-bottom-red">Leia Mais <i class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Gestão de Marketing</h3>

                            <a href="" class="color-white b-bottom-red">Leia Mais <i class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="card_simple2">
                            <h3 class="color-white text-lg">Produção social media</h3>

                            <a href="" class="color-white b-bottom-red">Leia Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </section>
                </div>
            </div>
        </section>
 -->

    </main>

    
<?php get_footer(); ?>