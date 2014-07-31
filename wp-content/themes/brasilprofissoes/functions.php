<?php

	/**
	  * Importa todas as bibliotecas necessárias
	 */
		//Post Type
		require_once 'lib/posttype-profissoes.php';
		require_once 'lib/posttype-cursos.php';
		require_once 'lib/posttype-guias.php';
		require_once 'lib/posttype-oportunidades.php';
		
		//Bootstrap Menu para WordPress
		require_once 'lib/wp_bootstrap_navwalker.php';
		
		//Separador de Menu
		require_once 'lib/separador-de-menu.php';
		
		//Editor Customizado
		require_once 'lib/custom_editor.php';

		//Paginação nas noticias
		require_once 'lib/paginacao.php';
	
	/**
	 * Função responsável por retornar os custom fields do post
	 * Retorna false caso não possua nenhum custom field, e em caso positivo
	 * retorna uma array com o titulo e o conteúdo do custom field
	 */
		function selecionaCustomFields(){
		    
		    $getPostCustomKeys = get_post_custom_keys(get_the_ID());
		    
		    foreach ($getPostCustomKeys as $key => $value) {
		    
		        $valueTrim = trim($value);
		    
		        if('_' == $valueTrim{0}){
		            continue;
		        }else{
		            $valueFinal[] = $value;
		        }
		    
		    }
		    
		    if(count($valueFinal)>0){
		        
    		    foreach ($valueFinal as $key => $value) {
    		    
    		        $getPostCustomValues = get_post_custom_values($value);
    		    
    		        $return[] = array('title'   => $valueFinal[$key],
    		                        'content' => $getPostCustomValues[0]);

    		    }
    		    return $return;
		    }
		    
		    return false;
		}
		
	/**
	 * Adiciona o separador de menu
	 * (Ver a em /libs/separador-de-menu.php
	 */
		function admin_menu_separador() {
		
			add_admin_menu_separador(50);
		}
		
	/**
	 * Adiciona imagem destacada */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'thumbnail-noti', 220, 220, true );
	add_image_size( 'thumbnail25', 320, 300 );
	add_image_size( 'destaquebox-img', 503, 300 );
		
	/**
	 * Adiciona os estilos utilizados no template
	 */
		function bp_estilos(){
			
			wp_enqueue_style( 'custom_editor', get_template_directory_uri() . '/css/custom_editor.css' );
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
			wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/fontes/font-awesome/css/font-awesome.min.css' );
			wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
			wp_enqueue_style( 'media_query_customizada', get_template_directory_uri() . '/css/mediaquery.css' );

		}
	
	/**
	 * Adiciona os scripts que serão utilizados no template
	 */
		function bp_scripts(){
		    
		    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js' );
		    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js' );
		    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js' );
		    wp_enqueue_script( 'slider_min_pack', get_template_directory_uri() . '/js/slider/jquery-easing-1.3.pack.js' );
		    wp_enqueue_script( 'slider_min_compability', get_template_directory_uri() . '/js/slider/jquery-easing-compatibility.1.2.pack.js' );
		    wp_enqueue_script( 'coda_slider', get_template_directory_uri() . '/js/slider/coda-slider.1.1.1.pack.js' );
		    
		}
		
	/**
	 * Lista de todos os registros
	 * OBS: Os registros das bibliotecas encontram-se no arquivo de cada uma
	 */	
		// Registra o separador de menu
		add_action('admin_menu','admin_menu_separador');
		// Registra os estilos personalizados
		add_action('wp_enqueue_scripts','bp_estilos');
		// Registra os scripts do template
		add_action('wp_enqueue_scripts','bp_scripts');
		
		
		
		
/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'brasilprofissoes' ),
) );


/*************************************************************
****** Related portfolio *******
*************************************************************/

if ( !function_exists( 'unik_related_portfolio' ) ) {
	function unik_related_portfolio() {
		global $post;
		global $smof_data;
		/*if ( $smof_data['display_related_portfolio'] == 1 ) {*/
			$terms = get_the_term_list( get_the_ID(), 'portfolio-filter', '', ', ' );

			$args=array(
				'post_type' => 'portfolio',
				'portfolio-filter' => $terms,
				'post__not_in' => array( $post->ID ),
				'posts_per_page'=> 9
			);

			$my_query = new wp_query( $args );
			$post_count = $my_query->post_count;
			$slide_count = ceil( $post_count/3 );

			if ( $my_query->have_posts() ) {
				echo '<div class="related-posts">';
				echo '<div class="related-upper clear">';
				echo '<h2 class="related-posts-title">' . __( 'Related Portfolio', 'unik' ) . '</h2>';
				if ( $post_count > 3 ) {
				echo '<div class="related-nav-container">';
				echo '<a href="#" class="prev-button direction-button"><i class="font-awesome-left-open"></i></a>';
				echo '<a href="#" class="next-button direction-button"><i class="font-awesome-right-open"></i></a>';		
				echo '</div>';
				}
				echo '</div>';
				echo '<div class="related-slides flexslider">';
				echo '<ul class="slides">';
				while ( $my_query->have_posts() ) {
					$my_query->the_post(); ?>
					<div class="related-post">
						<a href="<?php the_permalink() ?>" rel="bookmark" class="related-post-thumb" title="<?php the_title_attribute(); ?>">
							<?php 
							if ( has_post_thumbnail() ) {
								$thumb = get_post_thumbnail_id();
								$img_url = wp_get_attachment_url( $thumb, 'full' );
								$image = aq_resize( $img_url, 200, 200, true ); ?>
							<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
							<?php } else { ?>
							<img src="<?php echo get_template_directory_uri() . '/images/placeholder1.png'; ?>" alt="<?php the_title(); ?>" />
							<?php } ?>
						</a>

						<p class="related-title"><?php the_title(); ?></p>
					</div>
				<?php }
				echo '</ul>';
				echo '</div>';
				echo '</div>';
			}
			wp_reset_query();
		/*}*/
	}
}

if ( !function_exists( 'unik_portfolio_outside_main' ) ) {
	function unik_portfolio_outside_main() {
		global $smof_data;
		unik_related_portfolio(); 
		if ( !isset( $smof_data['portfolio_comments'] ) || $smof_data['portfolio_comments'] ) {
		comments_template();	
		}
	}
}

/*************************************************************
*************Excerpt com limite de caracteres*****************
*************************************************************/

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

register_sidebar( array(
    'name'         => __( 'Mais lidas' ),
    'id'           => 'maislidas',
    'description'  => __( 'Campo para as notícias mais lidas.' ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
	'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
register_sidebar( array(
    'name'         => __( 'Menu esquerdo' ),
    'id'           => 'menu-esquerdo',
    'description'  => __( 'Campo para o menu de profissões.' ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
	'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
