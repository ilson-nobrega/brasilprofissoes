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
                <div class="col-md-9 col-sm-8">
                    <h2>
                    <?php 
                            $term =	$wp_query->queried_object;
                            echo $term->name;
                    ?>
                        </h2>
                     <table class="table table-hover">
                           
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto.jpg" class="img-responsive"></td>
                                    <th><p>Aparece em quadros de Cursos ou Oportunidades de Empregos, indica que há Profissões cadastradas no Portal relacionadas aos Cursos ou Oportunidades de Empregos em questão.</p></th>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto2.jpg" class="img-responsive"></td>
                                    <th><p>aparece em quadros de Profissões ou Oportunidades de Empregos, indica que há Cursos disponíveis cadastrados no Portal relacionados às Profissões ou Oportunidades de Empregos em questão.</p></th>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto3.jpg" class="img-responsive"></td>
                                    <th><p>aparece em quadros de Profissões ou Cursos, indica que há Oportunidades de Emprego disponíveis anunciadas no Portal, relacionadas às Profissões ou Cursos em questão.</p></th>
                                </tr>
                            </tbody>
                        </table>
                    <?php 
                    
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                        
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( '310', '560' ), true, '' );
                    ?>
                        <div class="min-pad col-md-3 col-sm-2 lista-profissoes">
                            <a href="<?php echo the_permalink(); ?>" class="rel-curso" style="background: url(<?php echo $src[0]; ?> ) center !important;"><p><?php echo get_the_title(); ?></p></a> 
                        </div>
                        <!--article class="col-md-3 min-pad" style="background: url(<?php echo $src[0]; ?> ) center !important;">
                            <a href="<?php the_permalink() ?>">
                                <h3><?php echo get_the_title(); ?></h3>
                            </a>
                        </article-->
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
						<div style="clear:both"></div>
                    </div>
                    
                    <?php
                       
                       /**
                        * Função que busca os posts de Cursos e os lista abaixo
                        */
                    
                           //Argumentos que será utilizado na busca
                           $args = array(
                               'post_type' => 'curso',
                               'posts_per_page' => '4',
                               'orderby' => 'rand',
							   'tag_name' => $term->name
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
					?>                </div>
            </div>

        </div>
    </section>
    
<?php get_footer(); ?>