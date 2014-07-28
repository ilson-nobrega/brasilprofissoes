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
                    <h2>Todas</h2>
                    <ul id="lista_123">
						<li>
							<img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto_m1.jpg"> Representa as Profissões. Quando o ícone <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto_m1.jpg"> aparece em quadros de Cursos ou Oportunidades de Empregos, indica que há Profissões cadastradas no Portal relacionadas aos Cursos ou Oportunidades de Empregos em questão.
						</li>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto_m2.jpg"> Representa as Profissões. Quando o ícone <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto_m2.jpg"> aparece em quadros de Profissões ou Oportunidades de Empregos, indica que há Cursos disponíveis cadastrados no Portal relacionados às Profissões ou Oportunidades de Empregos em questão.
						</li>
			            <li>
			            	<img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto_m3.jpg"> Representa as Profissões. Quando o ícone <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_texto_m3.jpg"> aparece em quadros de Profissões ou Cursos, indica que há Oportunidades de Emprego disponíveis anunciadas no Portal, relacionadas às Profissões ou Cursos em questão.
			            </li>
		            </ul>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            			<article class="col-md-3 min-pad">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
                            </a>
                        </article>
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
					
					
					
					
					
					<div class="col-md-3 col-sm-2">
						<div class="img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-3">
						<div class=" img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-2">
						<div class=" img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-2">
						<div class=" img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>		
				</div>
			</div>	

			<div class="row pad-y">
				<div class="cursos">
					
					<div class="titulo">
						
						<h3 class="nopad col-md-8"><span class="cor">Oportunidades</span></h3>
						<div class="busca nopad col-md-4">
							<form action="" method="post" name="form_busca_cursos">
							
							<a href="#" class=" col-md-3 link_vertodos">Ver todos</a>
							
							<input type="text" name="buscaCursos" id="buscaCursos" class="col-md-7" placeholder="busca espeficífica">
							
							<button class="" type="submit"></button>
							</form>
						</div>
						<div style="clear:both"></div>
					</div>
					
					
					<div class="col-md-3 col-sm-2">
						<div class="img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-3">
						<div class=" img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-2">
						<div class=" img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-2">
						<div class=" img_cursos">
							<div class="blue">
								<a href="#"><h3>Administrador Publico</h3></a>
							</div>
						</div>	
					</div>		
				</div>
			</div>

        </div>
    </section>
    
<?php get_footer(); ?>