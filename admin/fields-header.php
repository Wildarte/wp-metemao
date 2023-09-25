<?php

function theme_customize_register_header($wp_customize) {

    $wp_customize->add_section('header_settings', array(
        'title' => 'Informações do Cabeçalho',
        'priority' => 29,
    ));

    $wp_customize->add_setting('link_botao', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('link_botao', array(
        'label' => 'link botão',
        'section' => 'header_settings',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_customize_register_header');

