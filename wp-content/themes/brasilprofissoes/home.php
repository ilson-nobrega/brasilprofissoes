<?php get_header(); ?>
   
    <section>
        <div class="container">
        	<div class="row">
	        	<div class="col-md-9 col-sm-9 nopad">
	        		<?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
	        	</div>
	        	<img class="col-md-3 col-sm-3 nopad-right img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/estado.jpg">
        	</div>
        	<!-- Carrreira -->
        	<div class="row carreira">
				<h1><p>Chegou a hora de encontrar a</p> <p>profissão certa e turbinar sua carreira:</p></h1>
				<div class="col-md-3 col-sm-3">
					<a href="<?php echo home_url(); ?>/categoria-de-profissoes/tecnicas/">
					   <img src="<?php echo get_stylesheet_directory_uri() ?>/img/proficoes_tecnicas.jpg" class="img-responsive">
					</a>
				</div>	
				<div class="col-md-3 col-sm-3">
					<a href="<?php echo home_url(); ?>/categoria-de-profissoes/academicas/">
					   <img src="<?php echo get_stylesheet_directory_uri() ?>/img/academicas.jpg" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3">
					<a href="<?php echo home_url(); ?>/categoria-de-profissoes/publicas/">
					   <img src="<?php echo get_stylesheet_directory_uri() ?>/img/publicas.jpg" class="img-responsive">
				    </a>
				</div>
				<div class="col-md-3 col-sm-3">
					<a href="<?php echo home_url(); ?>/categoria-de-profissoes/empreendedoras/">
					   <img src="<?php echo get_stylesheet_directory_uri() ?>/img/emprededorismo.jpg" class="img-responsive">
				    </a>
				</div>
				
	        </div>
		<!-- Caminhos futuros -->	
	        <div class="row pad-y caminhos_futuros">
	        	<div class="col-md-9 col-sm-9">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/caminhos_futuros.jpg" class="img-responsive"></a>	
	        	</div>
				
				<div class="col-md-3 col-sm-3">
					<div class="enquete">
						<h4>Qual desses cusos precisam de maior prioridade?</h4>
						<form action="" class="form_enquete" method="post">
							<ul>
								<li class="col-md-12 col-sm-9">
									<input type="radio" name="saude" id="saude" value="saude"/><label for="saude">Saude</label>
								</li>
								<li class="col-md-12 col-sm-9">
									<input type="radio" name="educação" id="educação" value="educação"/><label for="educação">Educação</label>
								</li>
								<li class="col-md-12 col-sm-9">
									<input type="radio" name="lazer" id="lazer" value="lazer"/><label for="lazer">Lazer</label>
								</li>
								<li class="col-md-12 col-sm-9">
									<input type="radio" name="outras" id="outras" value="outras"/><label for="outras">Outras</label>
								</li>
								<li class="text-right">
									<button type="submit"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_prioridade.jpg" class="img-responsive col-md-12 col-sm-3"></button>	
								</li>
							</ul>
						  </form>
					</div>
				</div>	
	        </div>
			<!-- instituições -->
			<div class="row pad-y intituicoes">
				<div class="col-md-5 col-sm-5">
					<div class="encontrar_vagas">
						<h1>encontre</br> vagas e cursos</br> por instituições</h1>
					</div>
				</div>
				
				<div class="col-md-7 col-sm-7">
					<div class="carousel-parceiros">
					<!--Nestas imagens há um css que deixa a altura delas com 289px no home.css linha 65 (tirar quando por o caroucel)-->	
						<a href="?cat=24"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/parceiro1.jpg"  class="col-md-5 col-sm-5 nopad  img-responsive"></a>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/parceiro2.jpg" class="col-md-3 col-sm-3 nopad img-responsive">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/parceiro3.jpg" class="col-md-4 col-sm-4 nopad img-responsive">
						
					</div>
				</div>

			</div>
			<!-- Busca por cursos -->
			<div class="row pad-y busca_cursos">
				<div class="titulo">
					<h3>Buscar por cursos</h3>
				</div>
				<div class="col-md-6 col-sm-6 col-titulo">
					<div class="titulo_cursos">
						<h1>Busque entre mais</br> de 1000 cursos:</h1>
					</div>	
				</div>
				<div class="col-md-6 col-sm-6 col-form">
					<div class="form_cursos">
						<form action="" method="post">
							<ul>
							<li>
								<input type="text" name="curso" class="curso col-md-12" placeholder="digite o curso ou tema desejado">
							</li>
							<li class="select_estado">
								<label for="estado_curso" class="col-md-2 pad-y">Buscar em:</label>
								<select name="estado" id="estado_curso" class="estado_curso col-md-5">
									<option value="">Distrito Federal</option>
									<option value="">São Paulo</option>
									<option value="">Rio de Janeiro</option>
								</select>
							</li>
							<li class="text-right">
								<button type="submit"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_buscar.jpg"></button>
							</li>	
							</ul>
						</form>
						<ul class="col-md-11 col-sm-11 ul_link">
						<li class="ico_msg "><a href="#">Receba Grátis em seu email um aviso sobre cursos</a></li>
						</ul>
					</div>
				</div>
			
			</div>
			<!-- Cursos em destaque -->
			<div class="row pad-y cursos_destaque">
				<div class="titulo">
					<h3>Cursos em destaque</h3>
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
			<!-- Noticias -->
			<div class="row pad-y noticias">
				<!-- <div class="col-md-5 col-sm-6">
					<div class="ultimas_noticias">
						<h1>Últimas Notícias</h1>
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri() ?>/img/Noticias.jpg" class="img-responsive">
							<figcaption>09 de janeiro de 2013</figcaption>
						</figure>
							<div class="cursos_empregos">
								<h3>Notícias sobre cursos e empregos</h3>
								<p>Wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora,
		                           non adipiscing. Nulla nunc porta lorem</p>
									
									<div class="col-md-12 container_noticias">
										
										<div class="boxum pad-y">
											
											<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img_noticias.jpg" class="col-md-3 nopad img-responsive">
											<div class="col-md-9 textobox">
												<h4>Notícias sobre cursos e empregos</h4>
												<p>09 de janeiro de 2013</p>

												<p>wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing. Nulla nunc porta lorem <a href="#" class="link1"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_mais.png"></a></p>
												
												
											</div>
										</div>

										<div class="boxum pad-y">
											
											<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img_noticias.jpg" class="col-md-3 nopad img-responsive">
											<div class="col-md-9 textobox">
												<h4>Notícias sobre cursos e empregos</h4>
												<p>09 de janeiro de 2013</p>

												<p>wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing. Nulla nunc porta lorem <a href="#" class="link1"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_mais.png"></a></p>
												
												
											</div>
										</div>
										
									</div>		
							</div>
					</div>
				</div>

				<div class="col-md-5 col-sm-6">
					<div class="mais_lidas">
						<h1>Mais Lidas</h1>
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri() ?>/img/mais_lidas.jpg" class="img-responsive">
							<figcaption>09 de janeiro de 2013</figcaption>
						</figure>
							<div class="cursos_empregos">
								<h3>Notícias sobre cursos e empregos</h3>
								<p>Wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora,
		                           non adipiscing. Nulla nunc porta lorem</p>
									
									<div class="col-md-12 container_noticias">
										<div class="boxum pad-y">
											
											<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img_noticias.jpg" class="col-md-3 nopad img-responsive">
											<div class="col-md-9 textobox">
												<h4>Notícias sobre cursos e empregos</h4>
												<p>09 de janeiro de 2013</p>

												<p>wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing. Nulla nunc porta lorem <a href="#" class="link1"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_mais.png"></a></p>
												
												
											</div>
										</div>

										<div class="boxum pad-y">
											
											<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img_noticias.jpg" class="col-md-3 nopad img-responsive">
											<div class="col-md-9 textobox">
												<h4>Notícias sobre cursos e empregos</h4>
												<p>09 de janeiro de 2013</p>

												<p>wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing. Nulla nunc porta lorem <a href="#" class="link1"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_mais.png"></a></p>
												
												
											</div>
										</div>
									</div>		
							</div>
					</div>
				</div>
				 -->
				<div id="notihomebox" class="col-md-10 col-sm-10">
					<?php
						$notihomebox = get_posts('numberposts=4&category=10');
						foreach($notihomebox as $post) :
						setup_postdata($post);
					?>
					<div class="col-md-6 col-sm-6 mais_lidas">
						<h2>
							<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
						<figure><?php the_post_thumbnail( 'medium' ); ?></figure>
						<?php the_excerpt(); ?>
					</div>
					<?php endforeach; ?>
				</div>

				
				<div class="col-md-2 col-sm-2">
					<div class="publicidade">
						<h2>Publicidade</h2>
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/microsoft_training.jpg" class="img-responsive"></a>
					</div>
				</div>



			</div>
			<!-- Facebook -->
			<div class="row pad-y">
			<div class="titulo">
				<h3>Curtam nossa fan page</h3>
			</div>	
			
				<iframe class="col-md-9 iframe_facebook" id="facebook" src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fbrasilprofissoes&amp;width=900&amp;height=300&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
					
					<div class="col-md-3 nopad">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/ad_vertical.jpg" class="img-responsive"></a>
					</div>
			</div>		

        </div>
    </section>
    
<?php get_footer(); ?>