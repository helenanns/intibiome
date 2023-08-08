<?php

function register_cpt()
{
	register_post_type('produtos', [
		'labels' => [
			'name' => 'Produtos',
			'singular_name' => 'produto',
			'add_new' => 'Adicionar',
			'add_new_item' => 'Adicionar',
			'edit' => 'Editar',
			'edit_item' => 'Editar produto',
			'new_item' => 'Novo produtos',
			'view' => 'Ver',
			'view_item' => 'Ver produto',
			'search_items' => 'Buscarproduto',
			'not_found' => 'Nenhum produto encontrado',
			'not_found_in_trash' => 'Nenhuma produto encontrado',
		],
		'public' => true,
		'hierarchical' => false,
		'has_archive' => false,
		'menu_icon' => 'dashicons-products',
		'supports' => ['title', 'editor', 'thumbnail'],
		'can_export' => true,
	]);

	register_taxonomy(
		'produtos_categoria',
		['produtos'],
		[
			'hierarchical' => true,
			'labels' => [
				'name' => 'Categorias',
				'singular_name' => 'Categoria',
				'search_items' => 'Buscar Categoria',
				'all_items' => 'Todas Categorias',
				'parent_item' => 'Categoria Pai',
				'parent_item_colon' => 'Categoria Pai',
				'edit_item' => 'Editar Categoria',
				'update_item' => 'Atualizar Categoria',
				'add_new_item' => 'Adicionar nova categoria',
				'new_item_name' => 'Adicionar categoria',
				'menu_name' => 'Categorias',
			],
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
		]
	);
}

add_action('init', 'register_cpt');
