<?php

    /**
     * Cria o Post-Type personalizado de Guias
     */
         function cria_post_type_guias(){
             
             
             //Define a labels do post-type
             $labels = array(
                     'name'          =>    __('Guias'),
                     'singular_name' =>    __('Guia'),
                     'menu_name'          => _x( 'Guias', 'admin menu', 'brasilprofissoes' ),
                     'name_admin_bar'     => _x( 'Guias', 'add new on admin bar', 'brasilprofissoes' ),
                     'add_new'            => _x( 'Adicionar Novo', 'Guia', 'brasilprofissoes' ),
                     'add_new_item'       => __( 'Adicionar Nova Guia', 'brasilprofissoes' ),
                     'new_item'           => __( 'Nova Guia', 'brasilprofissoes' ),
                     'edit_item'          => __( 'Editar Guia', 'brasilprofissoes' ),
                     'view_item'          => __( 'Ver Guia', 'brasilprofissoes' ),
                     'all_items'          => __( 'Todos os Guias', 'brasilprofissoes' ),
                     'search_items'       => __( 'Procurar Guias', 'brasilprofissoes' ),
                     'parent_item_colon'  => __( 'Guia Principal:', 'brasilprofissoes' ),
                     'not_found'          => __( 'Nenhuma guia foi encontrada.', 'brasilprofissoes' ),
                     'not_found_in_trash' => __( 'Nenhuma guia foi encontrada no lixo.', 'brasilprofissoes' )
             );
             
             //Define todos os argumentos que serão utilizados
             $args = array(
                     'labels'        => $labels,
                     'public' 		=> true,
                     'menu_icon' 	=> 'dashicons-welcome-learn-more',
                     'menu_position' => 52,
                     'has_archive'	=> true,
                     'rewrite'       => array('slug' => 'guia'),
                     'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions'),
                     'taxonomies'    => array('post_tag')
             );
             
             register_post_type('guia', $args);
             
        }
        
        
    /**
	 * Cria as taxonomias personalizadas de Guias
	 */
        function cria_taxonomy_guias(){
             
            //Seta as labels da taxonomia
            $labels = array(
                    'name'             =>  __('Categorias de Guias'),
                    'singular_name'    =>  __('Categoria de Guias')
            );
        
            //Seta os argumentos da taxonomia
            $args = array(
                    'labels'       => $labels,
                    'rewrite'       =>  array('slug' => 'categoria-de-guias'),
                    'hierarchical'  => true
            );
             
            register_taxonomy('guias', 'guia', $args);
        
        }
        
		
	/**
	 * Registros do Post-Type Guias
	 */
		//Registra o Post-Type
		add_action('init', 'cria_post_type_guias');
		//Registra as Taxonomias
		add_action('init', 'cria_taxonomy_guias');