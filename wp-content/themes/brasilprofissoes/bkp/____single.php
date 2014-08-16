<?php get_header(); 
     $categoria = get_the_category();

    switch ($categoria['0']->term_id) {
        //Parceiros
        case '24':
            if(is_tax(the_slug())){
                echo 'True';
            }else{
                echo 'False';
            }
    ?>
            <section>
                <div class="container">
                    <div class="row">
                    <br>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article>
                                <?php the_title(); ?>
                                <?php the_content(); ?>
                            </article>
                        <?php endwhile?>
                        <?php else: ?>
                            <article>
                                <h2>Nada Encontrado</h2>
                                <p>Lamentamos mas não foram encontrados artigos.</p>
                            </article>            
                        <?php endif; ?>
                    </div>
                </div>
            </section>
<!--     <?php
        break;
        
        //Noticias
        case '10':
    ?>
            conteudo -->
    <?php
        break;
        default:
    ?>
            
            <!-- <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-8 noticias">
                            <br>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li><a href="<?php echo home_url(); ?>/?cat=10">Notícias</a></li>
                                <li class="active"><?php the_title(); ?></li>
                            </ol>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <article>
                                    <?php the_post_thumbnail('thumbnail25', array('class' => 'img-responsive')); ?>
                                    <h2><?php the_title(); ?></h2>
                                    <p class="data"><?php the_time('j F, Y') ?></p>
                                    <?php the_content(); ?>
                                </article>
                            <?php endwhile?>
                            <?php else: ?>
                                <article>
                                    <h2>Nada Encontrado</h2>
                                    <p>Lamentamos mas não foram encontrados artigos.</p>
                                </article>            
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3 col-sm-4 nopad">
                            <?php dynamic_sidebar( 'menu-noticias' ); ?>
                            <div class="mais-lidas">
                                 <?php dynamic_sidebar( 'maislidas' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>      -->

              <!-- Minha parte -  editada -->  
              <section>
            <div class="container">
                <div class="row pad-y texto_proficao">
                
                    <div class="col-md-3 col-sm-4 nopad">
                        <div class="menu_esquerdo">
                            <?php dynamic_sidebar( 'menu-cursos' ); ?>
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
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon_formacao.png" class="col-md-6"></a>
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon_oportunidade.png" class="col-md-6"></a>
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
                        <h3 class="nopad col-md-8"><span class="cor">Profissões</span></h3>
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
                               'post_type' => 'profissao',
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
              <!-- Fim minha parte  -  editada -->

    <?php
        break;
        }
    ?>
            
    
<?php get_footer(); ?>