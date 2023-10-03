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
            'menu-principal' => 'Menu Principal', 
            'menu-rodape'   => 'Menu Rodapé',
        )
    );
}
add_action('init', 'registrar_menus');


function registrar_widgets() {
    register_sidebar(
        array(
            'name'          => 'Barra lateral', 
            'id'            => 'barra-lateral',
            'description'   => 'Esta é a barra lateral do seu tema.', 
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>', 
            'before_title'  => '<h2 class="widget-title">', 
            'after_title'   => '</h2>', 
        )
    );
}
add_action('widgets_init', 'registrar_widgets');


add_theme_support('post-thumbnails');


//add_theme_support('post-formats', array('aside', 'gallery', 'video'));


function comprimento_resumo_personalizado($length) {
    return 20; 
}
add_filter('excerpt_length', 'comprimento_resumo_personalizado');

function classes_css_body($classes) {
    if (is_single() || is_page()) {
        $classes[] = 'pagina-unica'; 
    }
    return $classes;
}
add_filter('body_class', 'classes_css_body');

function adicionar_suporte_a_logo() {
    add_theme_support('custom-logo', );
}
add_action('after_setup_theme', 'adicionar_suporte_a_logo');

function theme_customize_register($wp_customize) {
    $wp_customize->add_section('alternate_logo', array(
        'title' => 'Logo Alternativa',
        'priority' => 28,
    ));

    $wp_customize->add_setting('alternate_logo', array(
        'default' => '',
        'transport' => 'refresh', 
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'alternate_logo', array(
        'label' => 'Escolha uma logo alternativa',
        'section' => 'alternate_logo',
        'settings' => 'alternate_logo',
    )));
}

add_action('customize_register', 'theme_customize_register');

// Adicione um tamanho de imagem personalizado
add_image_size('head_post', 1100, 600, true);



require('admin/custom-project/custom-post-project.php');
require('admin/custom-services/custom-post-service.php');
require('admin/fields-footer.php');
require('admin/fields-header.php');
require('admin/fields-contato.php');