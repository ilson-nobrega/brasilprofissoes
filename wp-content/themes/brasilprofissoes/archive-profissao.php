<?php get_header(); ?>
    <section>
        <div class="container">
        	<div class="row">
            	<br>
            	 <div class="col-md-3 col-sm-4 nopad">
                    <div class="menu_esquerdo">
                        <?php dynamic_sidebar( 'menu-esquerdo' ); ?>
                    </div>
                </div>
        		<div class="col-md-9 col-sm-8 nopad-right">
                    
                    <h2>Profissões de A a Z</h2>
                   	<p>Abaixo encontra-se uma listagem de toda as profissões ordenadas de A a Z.</p>
                    <?php 
                    	$posts=query_posts($query_string . '&orderby=title&order=ASC');
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( '310', '560' ), true, '' );
                    ?>
                       
                        <div class="col-md-3 col-sm-3 col-xs-6 lista-profissoes nopad-right">
    						<a href="<?php echo the_permalink(); ?>" class="rel-curso" style="background: url(<?php echo $src[0]; ?> ) center !important;"><p><?php echo get_the_title(); ?></p></a>
    					</div>
                    <?php endwhile?>
                        <?php paginate(); ?>
                    <?php else: ?>
                        <article>
                            <h2>Nada Encontrado</h2>
                            <p>Lamentamos mas não foram encontrados artigos.</p>
                        </article>            
                    <?php endif; ?>
                </div>
        	</div>
        	<div class="row pad-y">
        		<img style="width: 100%;" src="<?php echo get_stylesheet_directory_uri() ?>/img/ad_fullpage.jpg">
        	</div>
			
			<div class="row pad-y">
				<div class="cursos">
					
					<div class="titulo">
						<!-- Título e Busca Específica -->
						<h3 class="nopad col-md-8"><span class="cor">Cursos</span></h3>
						<div class="busca nopad col-md-4">
							<form action="<?php echo URL_TOTAL; ?>/curso/" method="post" name="form_busca_cursos">
							
							<a href="<?php echo URL_TOTAL; ?>/curso/" class=" col-md-3 link_vertodos">Ver todos</a>
							     <input type="text" class="col-md-7" placeholder="busca específica" value="<?php get_search_query(); ?>" name="s" id="s" />
							     <button class="" type="submit"></button>
							</form>
						</div>
						<div style="clear:both">
						</div>
					</div>
					
					<?php
					   
					   /**
					    * Função que busca os posts de Cursos e os lista abaixo
					    */
					
					       //Argumentos que será utilizado na busca
        				   $args = array(
        				   	   'post_type' => 'curso',
                               'posts_per_page' => '4',
                               'orderby' => 'rand'
        				   );

                            //Instancia a classe de busca do Wordpress e passa os argumentos
					       $busca = new WP_Query($args);
					       
					       
					       if($busca->have_posts()){

                                while ($busca->have_posts()){ 

                                    $busca->the_post();
                                    
                                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( '310', '560' ), true, '' );
                                    
                    ?>
                                <div class="min-pad col-md-3 col-sm-3 lista-profissoes">
            						<a href="<?php echo the_permalink(); ?>" class="rel-curso" style="background: url(<?php echo $src[0]; ?> ) center !important;"><p><?php echo get_the_title(); ?></p></a>
            					</div>
                    <?php    
                                }
                           }else{

                                echo 'Nenhum post foi encontrado.'; 
                           }
                           wp_reset_postdata();
					?>
				</div>
			</div>	

			<div class="row pad-y">
				<div class="cursos">
					
					<div class="titulo">
						
						<h3 class="nopad col-md-8"><span class="cor">Oportunidades</span></h3>
						<div class="busca nopad col-md-4">
							<form action="<?php echo URL_TOTAL; ?>/oportunidade/" method="post" name="form_busca_cursos">
							
							<a href="<?php echo URL_TOTAL; ?>/oportunidade/" class=" col-md-3 link_vertodos">Ver todos</a>
							     <input type="text" class="col-md-7" placeholder="busca específica" value="<?php get_search_query(); ?>" name="s" id="s" />
							
							<button class="" type="submit"></button>
							</form>
						</div>
						<div style="clear:both"></div>
					</div>
					
					
					<?php
					   
					   /**
					    * Função que busca os posts de Oportunidades e os lista abaixo
					    */
					
					       //Argumentos que será utilizado na busca
        				   $args = array(
        				   	   'post_type' => 'oportunidade',
                               'posts_per_page' => '4',
                               'orderby' => 'rand'
        				   );

                            //Instancia a classe de busca do Wordpress e passa os argumentos
					       $busca = new WP_Query($args);
					       
					       
					       if($busca->have_posts()){

                                while ($busca->have_posts()){ 

                                    $busca->the_post();
                                    
                                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( '310', '560' ), true, '' );
                                    
                    ?>
                                <div class="min-pad col-md-3 col-sm-2 lista-profissoes">
            						<a href="<?php echo the_permalink(); ?>" class="rel-curso" style="background: url(<?php echo $src[0]; ?> ) center !important;"><p><?php echo get_the_title(); ?></p></a>
            					</div>
                    <?php    
                                }
                           }else{

                                echo 'Nenhum post foi encontrado.'; 
                           }
                           wp_reset_postdata();
					?>
				</div>
			</div>

        </div>
    </section>
    
<?php get_footer(); ?>