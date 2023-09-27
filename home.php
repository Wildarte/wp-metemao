<?php
get_header();
//Template Name: Blog
?>

    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">
                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white">Omo</span>
                </header>

                <div class="body-hero-min head_service head_project">
                    
                    <h1 class="color-white title-sm">Omo Multiação</h1>

                    <h2 class="color-white title-sm">2022</h2>

                </div>
            </div>
        </section>

        <section class="bg-black">

            <div class="container d-flex">

                <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                ?>

                <article class="card_post">
                    <a href="<?= get_the_permalink(); ?>">
                        <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                    </a>
    
                    <div class="hr-gray"></div>
    
                    <div class="info_card_post">
                        <div>
                            <ul class="list_cat_post">
                                <?php
                                $categories = get_the_category(); 
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

                <?php endwhile; endif; ?>
    

                <!-- 
                <article class="card_post">
                    <a href="">
                        <img src="assets/img/rec-as.png" alt="">
                    </a>
    
                    <div class="hr-gray"></div>
    
                    <div class="info_card_post">
                        <div>
                            <ul class="list_cat_post">
                                <li><a href="">Design</a></li>
                                <li><a href="">Marketing</a></li>
                            </ul>
                            <span class="date_card_post">11/08/2023</span>
                        </div>
                        
                        <div class="head_card_post">
                            <h2><a href="">Branding & Valor: Preciso disso na minha empresa?</a></h2>
                        </div>
                    </div>
                </article>
    
                <article class="card_post">
                    <a href="">
                        <img src="assets/img/rec-pink.png" alt="">
                    </a>
    
                    <div class="hr-gray"></div>
    
                    <div class="info_card_post">
                        <div>
                            <ul class="list_cat_post">
                                <li><a href="">Design</a></li>
                                <li><a href="">Marketing</a></li>
                            </ul>
                            <span class="date_card_post">11/08/2023</span>
                        </div>
                        
                        <div class="head_card_post">
                            <h2><a href="">Branding & Valor: Preciso disso na minha empresa?</a></h2>
                        </div>
                    </div>
                </article>
    
                <article class="card_post">
                    <a href="">
                        <img src="assets/img/img-head.png" alt="">
                    </a>
    
                    <div class="hr-gray"></div>
    
                    <div class="info_card_post">
                        <div>
                            <ul class="list_cat_post">
                                <li><a href="">Design</a></li>
                                <li><a href="">Marketing</a></li>
                            </ul>
                            <span class="date_card_post">11/08/2023</span>
                        </div>
                        
                        <div class="head_card_post">
                            <h2><a href="">Branding & Valor: Preciso disso na minha empresa?</a></h2>
                        </div>
                    </div>
                </article>
                -->
            </div>

            <div class="container more_post">
                <?php
                    the_posts_pagination( array(
                        'mid_size' => 2,
                        'prev_text' => __( '&#8249;', 'textdomain' ),
                        'next_text' => __( '&#8250;', 'textdomain' ),
                    ) );

                    ?>
                ?>
            </div>
            
        </section>

        <div class="space-border-gray"></div>
    </main>

    
<?php get_footer(); ?>