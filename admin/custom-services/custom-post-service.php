<?php

function custom_post_type_service() {
    register_post_type('service', array(
        'label' => 'Serviços',
        'description' => 'Serviços',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'service', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes','post-formats', 'thumbnail'),

        'labels' => array (
            'name' => 'services',
            'singular_name' => 'service',
            'menu_name' => 'Serviços',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo service',
            'edit' => 'Editar',
            'edit_item' => 'Editar service',
            'new_item' => 'Novo service',
            'view' => 'Ver service',
            'view_item' => 'Ver service',
            'search_items' => 'Procurar Serviços',
            'not_found' => 'Nenhum service Encontrado',
            'not_found_in_trash' => 'Nenhum service Encontrado no Lixo',
        )
    ));
}
add_action('init', 'custom_post_type_service');

/* Método para o registro da Custom Taxonomy Tipo de Serviço para poder colocar categoria em cada serviço*/ 
function create_custom_tax_tipo_service(){
    register_taxonomy( 'categories_service', array('service'), array(
        'hierarchical' => true, 
        'label' => 'Categorias', 
        'singular_label' => 'Categoria', 
        'rewrite' => array( 'slug' => 'categories-service', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories_service', 'service' );
}
add_action( 'init', 'create_custom_tax_tipo_service' );