<?php

	/**
	 * Cria o Post-Type personalizado de Profissões
	 */
		function cria_post_type_profissoes(){
			
			register_post_type('profissoes',
				array(
					'labels' => array(
						'name'          =>    __('Profissões'),
						'singular_name' =>    __('Profissão')
					),
					'public' 		=> true,
					'menu_icon' 	=> 'dashicons-businessman',
					'menu_position' => 51,
					'has_archive'	=> true,
					'rewrite'       => array('slug' => 'profissoes'),
					'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields'),
					'taxonomies'    => array('post_tag')
				)
			);
		}

	/**
	 * Cria as taxonomias personalizadas de Profissões
	 */
		function cria_taxonomy_profissoes(){
			
			register_taxonomy(
				'profissoes',
				'profissoes',
				array(
				    'labels'    => array(
    					'name'             =>  __('Categorias de Profissões'),
    					'singular_name'    =>  __('Categoria de Profissões')
				    ),
				'rewrite'       =>  array('slug' => 'categoria-de-profissoes'),
				'hierarchical'  => true
				)
			);
		}
		
	/**
	 * Registros do Post-Type Profissões
	 */
		//Registra o Post-Type
		add_action('init', 'cria_post_type_profissoes');
		//Registra as Taxonomias
		add_action('init', 'cria_taxonomy_profissoes');