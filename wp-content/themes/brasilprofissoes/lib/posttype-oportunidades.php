<?php

	/**
	 * Cria o Post-Type personalizado de Profissões
	 */
		function cria_post_type_oportunidades(){
			
		    //Define a labels do post-type
		    $labels = array(
	            'name'          =>    __('Oportunidades'),
	            'singular_name' =>    __('Oportunidade'),
	            'menu_name'          => _x( 'Oportunidades', 'admin menu', 'brasilprofissoes' ),
	            'name_admin_bar'     => _x( 'Oportunidades', 'add new on admin bar', 'brasilprofissoes' ),
	            'add_new'            => _x( 'Adicionar Nova', 'oportunidade', 'brasilprofissoes' ),
	            'add_new_item'       => __( 'Adicionar Nova Oportunidade', 'brasilprofissoes' ),
	            'new_item'           => __( 'Nova Oportunidade', 'brasilprofissoes' ),
	            'edit_item'          => __( 'Editar Oportunidade', 'brasilprofissoes' ),
	            'view_item'          => __( 'Ver Oportunidade', 'brasilprofissoes' ),
	            'all_items'          => __( 'Todas as Oportunidades', 'brasilprofissoes' ),
	            'search_items'       => __( 'Procurar Oportunidades', 'brasilprofissoes' ),
	            'parent_item_colon'  => __( 'Profissão Principal:', 'brasilprofissoes' ),
	            'not_found'          => __( 'Nenhuma oportunidade foi encontrada.', 'brasilprofissoes' ),
	            'not_found_in_trash' => __( 'Nenhuma oportunidade foi encontrada no lixo.', 'brasilprofissoes' )
		    );
		    
		    //Define todos os argumentos que serão utilizados
		    $args = array(
		        'labels'        => $labels,
	            'public' 		=> true,
	            'menu_icon' 	=> 'dashicons-edit',
	            'menu_position' => 53,
	            'has_archive'	=> true,
	            'rewrite'       => array('slug' => 'oportunidade'),
	            'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions'),
	            'taxonomies'    => array('post_tag')
		    );
		    
			register_post_type('oportunidade', $args);
		}

	/**
	 * Cria as taxonomias personalizadas de Profissões
	 */
		function cria_taxonomy_oportunidades(){
			
		    //Seta as labels da taxonomia
		    $labels = array(
	            'name'             =>  __('Categorias de Oportunidades'),
	            'singular_name'    =>  __('Categoria de Oportunidades')
		    );
		    
		    //Seta os argumentos da taxonomia
			$args = array(
				    'labels'       => $labels,
				    'rewrite'       =>  array('slug' => 'categoria-de-oportunidades'),
				    'hierarchical'  => true
		    );
			
			register_taxonomy('oportunidades',	'oportunidade', $args);
		}
		
	/**
	 * Registros do Post-Type Profissões
	 */
		//Registra o Post-Type
		add_action('init', 'cria_post_type_oportunidades');
		//Registra as Taxonomias
		add_action('init', 'cria_taxonomy_oportunidades');