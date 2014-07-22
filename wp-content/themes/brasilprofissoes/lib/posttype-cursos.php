<?php

    /**
     * Cria o Post-Type personalizado de Cursos
     */
        function cria_post_type_cursos(){
            	
            register_post_type('cursos',
                array(
                    'labels' => array(
                    'name'          =>    __('Cursos'),
                    'singular_name' =>    __('Curso')
                ),
                    'public' 		=> true,
                    'menu_icon' 	=> 'dashicons-welcome-learn-more',
                    'menu_position' => 32,
                    'has_archive'	=> true,
                    'rewrite'       => array('slug' => 'cursos'),
                    'supports'      => array('title', 'editor', 'thumbnail'),
                    'taxonomies'    => array('post_tag')
                )
            );
        }
        
    /**
     * Cria as taxonomias personalizadas de Cursos
     */
        function cria_taxonomy_cursos(){
            	
            register_taxonomy(
                'tipos_de_cursos',
                'cursos',
                array(
                    'labels'    => array(
                    'name'             =>  __('Categorias de Cursos'),
                    'singular_name'    =>  __('Categoria de Cursos')
                ),
                    'rewrite'       =>  array('slug' => 'categoria-de-cursos'),
                    'hierarchical'  => true
                )
            );
        }
        
        /**
         * Registros do Post-Type Cursos
         */
        //Registra o Post-Type
        add_action('init', 'cria_post_type_cursos');
        add_action('init', 'cria_taxonomy_cursos');
