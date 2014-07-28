<?php

    /**
     * Cria o Post-Type personalizado de Cursos
     */
        function cria_post_type_cursos(){
            
            
            //Define a labels do post-type
            $labels = array(
                    'name'          =>    __('Cursos'),
                    'singular_name' =>    __('Curso'),
                    'menu_name'          => _x( 'Cursos', 'admin menu', 'brasilprofissoes' ),
                    'name_admin_bar'     => _x( 'Cursos', 'add new on admin bar', 'brasilprofissoes' ),
                    'add_new'            => _x( 'Adicionar Novo', 'profissao', 'brasilprofissoes' ),
                    'add_new_item'       => __( 'Adicionar Novo Curso', 'brasilprofissoes' ),
                    'new_item'           => __( 'Novo Curso', 'brasilprofissoes' ),
                    'edit_item'          => __( 'Editar Curso', 'brasilprofissoes' ),
                    'view_item'          => __( 'Ver Curso', 'brasilprofissoes' ),
                    'all_items'          => __( 'Todos os Cursos', 'brasilprofissoes' ),
                    'search_items'       => __( 'Procurar Cursos', 'brasilprofissoes' ),
                    'parent_item_colon'  => __( 'Curso Principal:', 'brasilprofissoes' ),
                    'not_found'          => __( 'Nenhum curso foi encontrado.', 'brasilprofissoes' ),
                    'not_found_in_trash' => __( 'Nenhum curso foi encontrado no lixo.', 'brasilprofissoes' )
            );
            
            //Define todos os argumentos que serão utilizados
            $args = array(
                    'labels'        => $labels,
                    'public' 		=> true,
                    'menu_icon' 	=> 'dashicons-welcome-learn-more',
                    'menu_position' => 52,
                    'has_archive'	=> true,
                    'rewrite'       => array('slug' => 'curso'),
                    'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields'),
                    'taxonomies'    => array('post_tag')
            );
            
            register_post_type('curso', $args);

        }
        
    /**
     * Cria as taxonomias personalizadas de Cursos
     */
        function cria_taxonomy_cursos(){
            	
            //Seta as labels da taxonomia
            $labels = array(
                    'name'             =>  __('Categorias de Cursos'),
                    'singular_name'    =>  __('Categoria de Cursos')
            );
            
            //Seta os argumentos da taxonomia
            $args = array(
                    'labels'       => $labels,
                    'rewrite'       =>  array('slug' => 'categoria-de-cursos'),
                    'hierarchical'  => true
            );
            	
            register_taxonomy('cursos',	'curso', $args);
            
        }
        
        /**
         * Registros do Post-Type Cursos
         */
        //Registra o Post-Type
        add_action('init', 'cria_post_type_cursos');
        add_action('init', 'cria_taxonomy_cursos');
