<?php

    /**
     * Cria o Post-Type personalizado de Guias
     */
         function cria_post_type_guias(){
            	
            register_post_type('guias',
                array(
                    'labels' => array(
                    'name'          =>    __('Guias'),
                    'singular_name' =>    __('Guia')
                ),
                    'public' 		=> true,
                    'menu_icon' 	=> 'dashicons-welcome-write-blog',
                    'menu_position' => 53,
                    'has_archive'	=> true,
                    'rewrite'       => array('slug' => 'guias'),
                    'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields', 'post-formats'),
                    'taxonomies'    => array('post_tag')
                )
            );
        }
        
        
    /**
	 * Cria as taxonomias personalizadas de Guias
	 */
		function cria_taxonomy_guias(){
			
			register_taxonomy(
				'guias',
				'guias',
				array(
				    'labels'    => array(
    					'name'             =>  __('Categorias de Guias'),
    					'singular_name'    =>  __('Categoria de Guias')
				    ),
				'rewrite'       =>  array('slug' => 'categoria-de-guias'),
				'hierarchical'  => true
				)
			);
		}
		
	/**
	 * Registros do Post-Type Guias
	 */
		//Registra o Post-Type
		add_action('init', 'cria_post_type_guias');
		//Registra as Taxonomias
		add_action('init', 'cria_taxonomy_guias');