<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header class="header">
        <div class="content_header container">
            <div class="left_header d-flex">
                <?php

                if(is_front_page()){
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full')[0];
                }else{
                    $alternate_logo = get_theme_mod('alternate_logo');
                    if ($alternate_logo) {
                        $logo = esc_url($alternate_logo);
                    }
                }
                   
                    
                ?>
                <a href="<?= home_url(); ?>" class="link_logo">
                    <?php if (has_custom_logo()): ?>
                    <img src="<?= esc_url($logo); ?>" alt="<?= get_bloginfo('name') ?>">
                    <?php endif; ?>
                </a>
    
                <nav class="menu <?= is_front_page() ? "" : "menu_white" ?>">
                    <div class="head_menu_mobile">
                        <?php
                            $custom_logo_id3 = get_theme_mod('custom_logo');
                            $logo3 = wp_get_attachment_image_src($custom_logo_id3, 'full')[0];
                        ?>
                        <a href="<?= home_url(); ?>" class="link_logo">
                            <?php if (has_custom_logo()): ?>
                            <img src="<?= esc_url($logo3); ?>" alt="<?= get_bloginfo('name') ?>">
                            <?php endif; ?>
                        </a>
                        <button class="btn_close_menu"><i class="bi bi-x-lg"></i></button>
                    </div>
                    <ul>
                        <li><a href="">Quem Somos</a></li>
                        <li><a href="">Método MTM</a></li>
                        <li><a href="">Serviços</a></li>
                        <li><a href="">Projetos</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>

                    <?php $link_botao = get_theme_mod('link_botao'); ?>
                    <a href="<?= $link_botao ?>" class="btn-white text-uppercase">
                        Orçamento
                    </a>
                </nav>

                <div class="btn_menu_mobile <?= is_front_page() ? "" : "btn_menu_mobile_white" ?>">
                    <div class="rec"></div>
                    <div class="rec"></div>
                    <div class="rec"></div>
                </div>
            </div>

        </div>
    </header>

    <script>

        <?php if(is_front_page()): ?>
        document.addEventListener('scroll', () => {

            var scroll_now = window.scrollY

            if(scroll_now > 100){
                <?php  $alternate_logo2 = get_theme_mod('alternate_logo'); ?>
                document.querySelector('.link_logo img').setAttribute('src', '<?= esc_url($alternate_logo2); ?>')
            }else{
                <?php
                    $custom_logo_id2 = get_theme_mod('custom_logo');
                    $logo2 = wp_get_attachment_image_src($custom_logo_id2, 'full')[0];
                ?>
                document.querySelector('.link_logo img').setAttribute('src', '<?= $logo2; ?>')
            }
        
        })
        <?php endif; ?>
    </script>