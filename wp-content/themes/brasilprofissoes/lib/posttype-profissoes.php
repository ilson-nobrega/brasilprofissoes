<?php

	/**
	 * Cria o Post-Type personalizado de Profissões
	 */
		function cria_post_type_profissoes(){
			
		    //Define a labels do post-type
		    $labels = array(
	            'name'          =>    __('Profissões'),
	            'singular_name' =>    __('Profissão'),
	            'menu_name'          => _x( 'Profissões', 'admin menu', 'brasilprofissoes' ),
	            'name_admin_bar'     => _x( 'Profissões', 'add new on admin bar', 'brasilprofissoes' ),
	            'add_new'            => _x( 'Adicionar Nova', 'profissao', 'brasilprofissoes' ),
	            'add_new_item'       => __( 'Adicionar Nova Profissão', 'brasilprofissoes' ),
	            'new_item'           => __( 'Nova Profissão', 'brasilprofissoes' ),
	            'edit_item'          => __( 'Editar Profissão', 'brasilprofissoes' ),
	            'view_item'          => __( 'Ver Profissão', 'brasilprofissoes' ),
	            'all_items'          => __( 'Todas as Profissões', 'brasilprofissoes' ),
	            'search_items'       => __( 'Procurar Profissões', 'brasilprofissoes' ),
	            'parent_item_colon'  => __( 'Profissão Principal:', 'brasilprofissoes' ),
	            'not_found'          => __( 'Nenhuma profissão foi encontrada.', 'brasilprofissoes' ),
	            'not_found_in_trash' => __( 'Nenhuma profissão foi encontrada no lixo.', 'brasilprofissoes' )
		    );
		    
		    //Define todos os argumentos que serão utilizados
		    $args = array(
		        'labels'        => $labels,
	            'public' 		=> true,
	            'menu_icon' 	=> 'dashicons-businessman',
	            'menu_position' => 51,
	            'has_archive'	=> true,
	            'rewrite'       => array('slug' => 'profissao'),
	            'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions'),
	            'taxonomies'    => array('post_tag')
		    );
		    
			register_post_type('profissao', $args);
		}

	/**
	 * Cria as taxonomias personalizadas de Profissões
	 */
		function cria_taxonomy_profissoes(){
			
		    //Seta as labels da taxonomia
		    $labels = array(
	            'name'             =>  __('Profissões'),
	            'singular_name'    =>  __('Profissões')
		    );
		    
		    //Seta os argumentos da taxonomia
			$args = array(
				    'labels'       => $labels,
				    'rewrite'       =>  array('slug' => 'categoria-de-profissoes'),
				    'hierarchical'  => true
		    );
			
			register_taxonomy('profissoes',	'profissao', $args);
		}
		
	/**
	 * Registros do Post-Type Profissões
	 */
		//Registra o Post-Type
		add_action('init', 'cria_post_type_profissoes');
		//Registra as Taxonomias
		add_action('init', 'cria_taxonomy_profissoes');