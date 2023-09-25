<?php

function theme_customize_register_info($wp_customize) {

    $wp_customize->add_section('contact_info', array(
        'title' => 'Informações do rodapé',
        'priority' => 30,
    ));

    $wp_customize->add_setting('address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('address', array(
        'label' => 'Endereço',
        'section' => 'contact_info',
        'type' => 'text',
    ));

    $wp_customize->add_setting('phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('phone', array(
        'label' => 'Telefone',
        'section' => 'contact_info',
        'type' => 'text',
    ));

    $wp_customize->add_setting('email', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('email', array(
        'label' => 'E-mail',
        'section' => 'contact_info',
        'type' => 'text',
    ));

    $wp_customize->add_setting('politica', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('politica', array(
        'label' => 'Link políticas',
        'section' => 'contact_info',
        'type' => 'text',
    ));


    //========================== redes sociais =================================
    $wp_customize->add_section('social_settings', [
        'title' => 'Redes sociais',
        'priority' => 31
    ]);

    $wp_customize->add_setting('instagram', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('instagram', [
        'label' => 'instagram',
        'section' => 'social_settings',
        'type' => 'text'
    ]);

    $wp_customize->add_setting('youtube', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('youtube', [
        'label' => 'youtube',
        'section' => 'social_settings',
        'type' => 'text'
    ]);

    $wp_customize->add_setting('linkedin', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('linkedin', [
        'label' => 'linkedin',
        'section' => 'social_settings',
        'type' => 'text'
    ]);

    $wp_customize->add_setting('tiktok', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('tiktok', [
        'label' => 'tiktok',
        'section' => 'social_settings',
        'type' => 'text'
    ]);

    $wp_customize->add_setting('twitter', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('twitter', [
        'label' => 'twitter',
        'section' => 'social_settings',
        'type' => 'text'
    ]);
}

add_action('customize_register', 'theme_customize_register_info');

