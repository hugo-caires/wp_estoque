<?php 
/*Plugin Name: Criação dos Post Types
Description: This plugin registers the 'product' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_post_type_produto() {

	register_post_type( 'produto', [
		'labels' => [
            'name' => 'Produtos',
            'singular_name' => 'Produto',
            'add_new' => 'Adicionar Produto',
            'add_new_item' => 'Adicionar Produtos',
            'edit_item' => 'Editar Produto',
            'new_item' => 'Novo Produto',
            'all_items' => 'Todos os produtos',
            'view_item' => 'Ver Produto',
            'search_items' => 'Pesquisar Produto',
            'not_found' =>  'Nenhum produto encontrado',
            'not_found_in_trash' => 'Nenhum produto encontrado na lixeira', 
            'parent_item_colon' => '',
            'menu_name' => 'Produtos'
        ],
		'has_archive' => true,
        'show_ui' => true,
 		'public' => true,
		'supports' => [ /*'title', 'editor', 'excerpt',*/ 'custom-fields', 'page-attributes' ],
		//'taxonomies' => [ 'post_tag', 'category' ],	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => [ 'slug' => 'produtos' ],
		]
	);
}

function wpmudev_create_post_type_cliente() {

    register_post_type( 'cliente', [
        'labels' => [
            'name' => 'Clientes',
            'singular_name' => 'Cliente',
            'add_new' => 'Adicionar Cliente',
            'add_new_item' => 'Adicionar Clientes',
            'edit_item' => 'Editar Cliente',
            'new_item' => 'Novo Cliente',
            'all_items' => 'Todos os clientes',
            'view_item' => 'Ver Cliente',
            'search_items' => 'Pesquisar Cliente',
            'not_found' =>  'Nenhum cliente encontrado',
            'not_found_in_trash' => 'Nenhum cliente encontrado na lixeira', 
            'parent_item_colon' => '',
            'menu_name' => 'Clientes'
        ],
        'has_archive' => true,
        'show_ui' => true,
        'public' => true,
        'supports' => [ /*'title', 'editor', 'excerpt',*/ 'custom-fields', 'page-attributes' ],
        //'taxonomies' => [ 'post_tag', 'category' ],   
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => [ 'slug' => 'clientes' ],
        ]
    );
}

function wpmudev_create_post_type_pedido() {

    register_post_type( 'pedido', [
        'labels' => [
            'name' => 'Pedidos',
            'singular_name' => 'Pedido',
            'add_new' => 'Adicionar Pedido',
            'add_new_item' => 'Adicionar Pedidos',
            'edit_item' => 'Editar Pedido',
            'new_item' => 'Novo Pedido',
            'all_items' => 'Todos os pedidos',
            'view_item' => 'Ver Pedido',
            'search_items' => 'Pesquisar Pedido',
            'not_found' =>  'Nenhum pedido encontrado',
            'not_found_in_trash' => 'Nenhum pedido encontrado na lixeira', 
            'parent_item_colon' => '',
            'menu_name' => 'Pedidos'
        ],
        'has_archive' => true,
        'show_ui' => true,
        'public' => true,
        'supports' => [ /*'title', 'editor', */'excerpt', 'custom-fields', 'page-attributes' ],
        //'taxonomies' => [ 'post_tag', 'category' ],   
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => [ 'slug' => 'pedidos' ],
        ]
    );
}


add_action( 'init', 'wpmudev_create_post_type_produto' );
add_action( 'init', 'wpmudev_create_post_type_cliente' );
add_action( 'init', 'wpmudev_create_post_type_pedido' );
?>