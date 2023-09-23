<?php

function adicionar_estilos_e_scripts() {
    
    wp_enqueue_style('owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', [], '1.0');
    wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', [], '1.0');
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', [], '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');

    wp_enqueue_script('m-jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'adicionar_estilos_e_scripts');


function registrar_menus() {
    register_nav_menus(
        array(
            'menu-principal' => 'Menu Principal', // Nome do menu e sua descrição
            'menu-rodape'   => 'Menu Rodapé',
        )
    );
}
add_action('init', 'registrar_menus');


function registrar_widgets() {
    register_sidebar(
        array(
            'name'          => 'Barra lateral', // Nome da barra lateral
            'id'            => 'barra-lateral', // ID exclusivo da barra lateral
            'description'   => 'Esta é a barra lateral do seu tema.', // Descrição da barra lateral
            'before_widget' => '<div class="widget">', // HTML antes do widget
            'after_widget'  => '</div>', // HTML após o widget
            'before_title'  => '<h2 class="widget-title">', // HTML antes do título do widget
            'after_title'   => '</h2>', // HTML após o título do widget
        )
    );
}
add_action('widgets_init', 'registrar_widgets');


add_theme_support('post-thumbnails');


add_theme_support('post-formats', array('aside', 'gallery', 'video'));


function comprimento_resumo_personalizado($length) {
    return 20; // Número de palavras no resumo
}
add_filter('excerpt_length', 'comprimento_resumo_personalizado');

// Função para adicionar classes CSS ao corpo da página
function classes_css_body($classes) {
    if (is_single() || is_page()) {
        $classes[] = 'pagina-unica'; // Adicione uma classe específica para páginas únicas
    }
    return $classes;
}
add_filter('body_class', 'classes_css_body');

function adicionar_suporte_a_logo() {
    add_theme_support('custom-logo', );
}
add_action('after_setup_theme', 'adicionar_suporte_a_logo');

require('admin/custom-project/custom-post-project.php');