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
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    
                ?>
                <a href="<?= home_url(); ?>" class="link_logo">
                    <?php if (has_custom_logo()): ?>
                    <img src="<?= esc_url($logo[0]); ?>" alt="<?= get_bloginfo('name') ?>">
                    <?php endif; ?>
                </a>
    
                <nav class="menu ">
                    <div class="head_menu_mobile">
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
                    <a href="" class="btn-white text-uppercase">
                        Orçamento
                    </a>
                </nav>

                <div class="btn_menu_mobile">
                    <div class="rec"></div>
                    <div class="rec"></div>
                    <div class="rec"></div>
                </div>
            </div>

        </div>
    </header>