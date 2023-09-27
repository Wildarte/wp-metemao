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
                            <li ><a href="" data-type="<?= $cat->slug; ?>"><?= $cat->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </section>

        <section class="d-flex bg-black list_project">

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

       
        </section>

    </main>

    <script>
        const list_projeto = document.querySelectorAll('.list_cat_projects li a');
        const cards_services = document.querySelectorAll('.list_project .card_project');

        list_projeto.forEach((item, index) => {

            item.addEventListener('click', (e) => {

                e.preventDefault()

                let sel = item.getAttribute('data-type');

                if(sel == "all"){
                    cards_services.forEach((item2) => {

                        item2.classList.remove('hide_card_projeto')

                    });
                }else{
                    

                    let cat_select = item.getAttribute('data-type');

                    cards_services.forEach((item2) => {
                        
                        item2.classList.add('hide_card_projeto')

                    });

                    cards_services.forEach((item2) => {

                        if(item2.getAttribute('data-type').includes(cat_select)){
                            item2.classList.remove('hide_card_projeto');
                        }

                    });

                    item.classList.add('active')
                }

                list_projeto.forEach((item2) => {
                    item2.classList.remove('active')
                });
                
                list_projeto[index].classList.add('active')
                

            });

        });
    </script>

<?php get_footer(); ?>