<?php get_header(); ?>
<section>
            <div class="container">
                <div class="row pad-y texto_proficao">
                
                    <div class="col-md-3 col-sm-4 nopad">
                        <div class="menu_esquerdo">
                            <?php dynamic_sidebar( 'menu-esquerdo' ); ?>
                        </div>
                    </div>
                    
                    
                                
                    <?php if (have_posts()):
                    
                              while ( have_posts() ) : the_post(); ?>
                            <article class="col-md-9">
                                   

                                <div class="col-md-6">
                                   
                                    <h3><?php the_title(); ?>

                                    </h3>
                                    
                                    <p style="text-align: justify;">
                                    
                                        
                                    <?php 
                                    
                                        $content = apply_filters( 'the_content', get_the_content() );
                                        $content = str_replace( ']]>', ']]&gt;', $content );
                                        $content = strip_tags($content);
                                        echo $content;
                                    
                                    ?>
                                    
                                    </p> 

                                    
                                </div>

                                  <div class="btn col-md-3">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon_curso.png" class="col-md-6">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon_oportunidade.png" class="col-md-6">
                                    </div>
                                
                                    <?php 
                                        $teste = selecionaCustomFields();
                                        
                                        if($teste != false){
                                            foreach ($teste as $value):
                                    ?>
                                                 <div class="col-md-9">
                            						<h4 class="icone_descricao"><?php echo $value['title']; ?></h4>
                                                	<p style="text-align: justify;"><?php echo $value['content']; ?></p>
                            					</div>
                                    <?php    
                                            endforeach;
                                        }
                                    ?>
					<?php 
					          endwhile;
					      else:
					?>
                                <h2>Nada Encontrado</h2>
                                <p>Lamentamos mas não foram encontrados artigos.</p>
                            </article>            
                   <?php  endif; ?>
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
							<form action="" method="post" name="form_busca_cursos">
							
							<a href="#" class=" col-md-3 link_vertodos">Ver todos</a>
							
							<input type="text" name="buscaCursos" id="buscaCursos" class="col-md-7" placeholder="busca espeficífica">
							
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
                                <div class="col-md-3 col-sm-2 lista-profissoes">
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
							<form action="" method="post" name="form_busca_cursos">
							
							<a href="#" class="col-md-3 link_vertodos">Ver todos</a>
							
							<input type="text" name="buscaCursos" id="buscaCursos" class="col-md-7" placeholder="busca espeficífica">
							
							<button class="" type="submit"></button>
							</form>
						</div>
						<div style="clear:both"></div>
					</div>
					
					
					<?php
					   
					   /**
					    * Função que busca os posts de Cursos e os lista abaixo
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
                                <div class="col-md-3 col-sm-2 lista-profissoes">
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