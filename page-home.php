<?php get_header(); 
//Template Name: Home Page
?>

    <main>
        <section class="hero">

            <?php
            
                $slides = get_field('slide_hero');

                if($slides ):

                // insert style ================================
                echo '<style> @media(max-width: 768px){';
                $count_slide = 0;
                foreach($slides as $slide):
                   
                    echo '.slide-hero-'.$count_slide.'{background-image: url('.$slide['imagem_mobile']['url'].')!important}';
                    $count_slide++;
                    
                endforeach;
                echo '}</style>';
                // insert style ================================

            ?>
            <div class="carousel_hero owl-carousel">

                <?php
                    
                    $count_slide = 0;

                    foreach( $slides as $slide ):
                        
                        the_row();

                        $slide_title = $slide['titulo_slide'];
                        $slide_link = $slide['link_botao'];
                        $img_desktop = $slide['imagem_desktop'];
                        $img_mobile = $slide['imagem_mobile'];

                        $class_slide = "slide-hero-".$count_slide;


                        ?>
                        
                        <div class="slide_hero content_hero d-flex <?= $class_slide; ?>" style="background-image: url(<?= $img_desktop['url'] ?>);">
                            <div class="container d-flex">
                                <div class="hero_left f-60 p-10">
                                    <h1 class="title-lg color-white"><?= $slide_title; ?></h1>
                                    <a href="<?= $slide_link; ?>" class="btn-transparent text-uppercase">Fale Conosco <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="f-40">
                
                                </div>
                            </div>
                        </div>
                        
                        <?php

                        $count_slide++; //increment count_slide

                    endforeach;

                ?>

            </div>

            <?php endif; ?>

        </section>
       
        <section>

        </section>

        <section class="method">
            <div class="container content_method d-flex">

                <div class="f-50 left_method">
                    <h2 class="title-md color-white">Método <br>MTM</h2>

                    <ul class="w-100 list_method">
                        <li><span>estratégia,</span></li>
                        <li><span>tática,</span></li>
                        <li><span>operação</span></li>
                    </ul>

                </div>
                <div class="f-50 d-flex right_method">
                    <p class="color-white text-lg"><?php the_field('campo_de_texto') ?> </p>

                    <div class="d-flex w-100">
                        <a href="" class="b-bottom-red color-white">Venha fazer parte <i class="bi bi-arrow-right"></i></a>
                    </div>
                    
                </div>

            </div>
        </section>

        <section class="section_carousel">

            <?php

                $args2 = [
                    'post_type' => 'projeto',
                    'posts_per_page' => 3
                ];

                $results_project = new WP_Query($args2);

                if($results_project->have_posts()):

            ?>

            <div class="carousel_project owl-carousel">

                <?php
                    while($results_project->have_posts()):
                        $results_project->the_post();
                ?>

                <article class="card_project card_project_slide" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'large') ?>);">

                    <div class="marquee_title title-md color-white">
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
    
                        <p class="color-white text-lg">Conheça a história da Bem Sorriso, Otta Sushi e Lilás Cozinha.</p>
    
                        <div class="info_card_project">
                          
                            
                            <?php

                                $categories = get_the_terms(get_the_ID(), 'categories');
                                //var_dump($categories);

                                if($categories) {
                                    echo '<ul class="list_cat_card_project">';
                                    foreach ($categories as $category) {
                                        echo '<li><span  class="text-uppercase">' . esc_html($category->name) . '</span></li>';
                                    }
                                    echo '</ul>';
                                }

                            ?>
    
                            <div class="btn_view_project">
                                <a href="<?= get_the_permalink(); ?>">Ver Projeto</a>
                            </div>
                        </div>
                    </div>
                    
                </article>

                <?php endwhile; ?>

                <!-- 

                <article class="card_project card_project_slide" style="background-image: url(assets/img/rec.png);">

                    <div class="marquee_title title-md color-white">bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso</div>
    
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

                <article class="card_project card_project_slide" style="background-image: url(assets/img/rec2.png);">

                    <div class="marquee_title title-md color-white">bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso bem sorriso</div>
    
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
            </div>

            <?php endif; wp_reset_postdata(); ?>
        </section>

        <section class="section_carousel_mobile bg-black">

            <div class="carousel_project_mobile">

                <article class="card_project card_project_slide">

                    <img src="assets/img/rec3.png" alt="">

                    <div class="marquee_title title-md color-white">bem sorriso</div>
    
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
                                <a href="">Ver Projetos</a>
                            </div>
                        </div>
                    </div>
                    
                </article>

                <article class="card_project card_project_slide">

                    <img src="assets/img/rec.png" alt="">

                    <div class="marquee_title title-md color-white">bem sorriso</div>
    
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

                <article class="card_project card_project_slide">

                    <img src="assets/img/rec2.png" alt="">

                    <div class="marquee_title title-md color-white">bem sorriso </div>
    
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
            </div>
        </section>

        <section class="section_clientes">
            <div class="container content_clientes">
                <h2 class="title-simple">Clientes</h2>

                <section class="d-flex list_clientes">
                    <?php

                        $clientes = get_field('clientes');

                        //var_dump($clientes[0]);

                        foreach($clientes as $cliente):
                    ?>

                    <img src="<?= $cliente ?>" alt="">

                    <?php endforeach; ?>
                </section>
            </div>
        </section>

        <section class="section_services bg-black" >
            <div class="container content_services">
                <div class="d-flex">
                    <div class="f-40 d-flex text-left over_title_services">
                        <h2 class="b-bottom-red color-white">Serviços</h2>
                    </div>
                    <div class="f-60">
                        <p class="color-white text-lg">Do branding estratégico ao marketing, descubra o poder de impulsionar sua marca a construir valor e alcançar a reputação desejada.</p>
                    </div>
                </div>
                
                <div class="d-flex content_body_services">
                    <div class="f-50 left_body_services">
                        <ul class="list_services">
                            <li><a href="#services" class="active" data-type="all">Todos</a></li>

                            <?php
                                $cats_service = get_terms([
                                    'taxonomy' => 'categories_service'
                                ]);

                                foreach($cats_service as $cat):
                            ?>
                            <li ><a href="#services" data-type="<?= $cat->slug; ?>"><?= $cat->name; ?></a></li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="f-50 right_body_services" id="services">

                        <?php

                            $args = [
                                'post_type' => 'service',
                                'posts_per_page' => -1
                            ];

                            $result = new WP_Query($args);

                            if($result->have_posts()):
                                while($result->have_posts()):
                                    $result->the_post();

                                    $cats_single = get_the_terms(get_the_ID(), 'categories_service');

                        ?>

                        <article class="card_service" data-type="<?php  foreach($cats_single as $item){ echo $item->slug;} ?>">
                            <h3 class="color-white"><?= get_the_title() ?></h3>
                            <p class="color-white"><?= get_the_excerpt(); ?></p>
                            
                            <a href="<?= get_the_permalink() ?>" class="b-bottom-red color-white">Ler mais <i class="bi bi-arrow-right"></i></a>
                        </article>

                        <?php  endwhile; endif; wp_reset_postdata() ?>




                    </div>
                </div>

                <script>
                    const list_services = document.querySelectorAll('.list_services li a');
                    const cards_services = document.querySelectorAll('.right_body_services .card_service');

                    list_services.forEach((item, index) => {

                        item.addEventListener('click', () => {

                            let sel = item.getAttribute('data-type');

                            if(sel == "all"){
                                cards_services.forEach((item2) => {

                                    item2.classList.remove('hide_card_service')

                                });
                            }else{
                                list_services.forEach((item2) => {

                                    item2.classList.remove('active')

                                });

                                let cat_select = item.getAttribute('data-type');

                                cards_services.forEach((item2) => {
                                    item2.classList.add('hide_card_service')

                                });
                                cards_services.forEach((item2) => {

                                if(item2.getAttribute('data-type').includes(cat_select)){
                                    item2.classList.remove('hide_card_service')
                                }

                                });

                                item.classList.add('active')
                            }

                            
                            

                        });

                    });
                </script>

                <div class="d-flex bottom_services">
                    <h2 class="title-md color-white text-center">Da mente vem a <span class="color-red">ideia</span>, da mão a criação. <img src="<?= get_template_directory_uri() ?>/assets/img/hand-big.png" alt=""></h2>

                    <div class="w-100 text-center link_bottom_services">
                        <a href="" class="b-bottom-red color-white">Entre em contato <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <div class=" space-border-gray"></div>
        <section class="section_blog bg-black">
           
            <div class="container content_blog">
                <div class="d-flex w-100">
                    <div class="f-50 d-flex text-left over_title_blog">
                        <div class="d-flex text-left over_title_blog">
                            <h4 class="b-bottom-red color-white f-40">Notícias</h4>
                        </div>
                        
                        <h2 class="title-md color-white text-uppercase f-60">Últimas do Blog</h2>
                    </div>
                    <div class="f-50">
                        
                    </div>
                </div>

                <section class="list_posts owl-carousel">

                    <?php 

                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ];

                        $results = new WP_Query($args);
                    
                        if($results->have_posts()):
                            while($results->have_posts()):
                                $results->the_post();
                    
                    ?>

                    <article class="card_post card_post_slide">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                        </a>
        
                        <div class="hr-gray"></div>
        
                        <div class="info_card_post">
                            <div>
                                <?php

                                    $categories = get_the_category();

                                ?>
                                <ul class="list_cat_post">
                                    <?php

                                    if ($categories) {
                                        echo '<ul class="lista-de-categorias">';
                                        foreach ($categories as $category) {
                                            //echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                                            echo '<li>' . esc_html($category->name) . '</li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?>
                                </ul>
                                <span class="date_card_post"><?= get_the_date('d/m/Y') ?></span>
                            </div>
                            
                            <div class="head_card_post">
                                <h2 class="color-white"><a href="<?= get_the_permalink() ?>"><?= get_the_title(); ?></a></h2>
                            </div>
                        </div>
                    </article>

                    <?php endwhile; endif; wp_reset_postdata(); ?>
        
                    
                </section>
            </div>
        </section>
        <div class="bg-black">
            <div class="container space-border-gray"></div>
        </div>
    </main>

    

<?php get_footer(); ?>