<?php

function custom_post_type_projeto() {
    register_post_type('projeto', array(
        'label' => 'Projetos',
        'description' => 'Projetos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'projeto', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes','post-formats', 'thumbnail'),

        'labels' => array (
            'name' => 'Projetos',
            'singular_name' => 'projeto',
            'menu_name' => 'Projetos',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo projeto',
            'edit' => 'Editar',
            'edit_item' => 'Editar projeto',
            'new_item' => 'Novo projeto',
            'view' => 'Ver projeto',
            'view_item' => 'Ver projeto',
            'search_items' => 'Procurar Projetos',
            'not_found' => 'Nenhum projeto Encontrado',
            'not_found_in_trash' => 'Nenhum projeto Encontrado no Lixo',
        )
    ));
}
add_action('init', 'custom_post_type_projeto');

/* Método para o registro da Custom Taxonomy Tipo de Serviço para poder colocar categoria em cada serviço*/ 
function create_custom_tax_tipo(){
    register_taxonomy( 'categories', array('projeto'), array(
        'hierarchical' => true, 
        'label' => 'Categorias', 
        'singular_label' => 'Categoria', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'projeto' );
}
add_action( 'init', 'create_custom_tax_tipo' );