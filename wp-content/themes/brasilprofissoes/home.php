<?php get_header(); ?>
   
    <section>
        <div class="container">
        	<div class="row">
	        	<div class="col-md-9 col-sm-9 gray" style="height:516px;">
	        		<!--inicio slider-->
	        		<!-- <div class="slider">
				<div id="main-photo-slider" class="csw">
					<div class="panelContainer">

						<div class="panel" title="Panel 1">
							<div class="wrapper">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners1.png" alt="temp" width="900" height="450" />
							</div>
						</div>
						<div class="panel" title="Panel 2">
							<div class="wrapper">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners2.png" alt="temp" width="900" height="450" />
							</div>
						</div>		
						<div class="panel" title="Panel 3">
							<div class="wrapper">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners3.png" alt="temp" width="900" height="450" />
							</div>
						</div>
						<div class="panel" title="Panel 4">
							<div class="wrapper"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners4.png" alt="temp" width="900" height="450" /></div>
						</div>
					</div>
				</div>

				<div class="icones">
					<div class="icone-slide"><a href="#1" class="cross-link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners1.png" width="225" height="133" class="nav-thumb" alt="temp-thumb" /></a></div>
					<div class="icone-slide"><a href="#2" class="cross-link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners2.png" width="225" height="133" class="nav-thumb" alt="temp-thumb" /></a></div>
					<div class="icone-slide"><a href="#3" class="cross-link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners3.png" width="225" height="133" class="nav-thumb" alt="temp-thumb" /></a></div>
					<div class="icone-slide"><a href="#4" class="cross-link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/banners4.png" width="225" height="133" class="nav-thumb" alt="temp-thumb" /></a></div>
				</div>
			</div> -->
	        		<!--fim slider-->
	        	</div>
	        	<img class="col-md-3 col-sm-3 nopad-right img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/estado.jpg">
        	</div>
        	<!-- Carrreira -->
        	<div class="row carreira">
				<h1><p>Chegou a hora de encontrar a</p> <p>profissão certa e turbinar sua carreira:</p></h1>
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/proficoes_tecnicas.jpg" class="img-responsive"></a>
				</div>	
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/academicas.jpg" class="img-responsive"></a>
				</div>
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/publicas.jpg" class="img-responsive"></a>
				</div>
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/emprededorismo.jpg" class="img-responsive"></a>
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
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/tecnico_administracao.jpg" class="img-responsive"></a>
				</div> 
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/gerente_banco.jpg" class="img-responsive"></a>
				</div>
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/juiz_direito.jpg" class="img-responsive"></a>
				</div> 
				<div class="col-md-3 col-sm-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/curso_sebrae.jpg" class="img-responsive"></a>
				</div> 


			</div>
			<!-- Noticias -->
			<div class="row pad-y noticias">
				<div class="col-md-5 col-sm-6">
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
				<div class="col-md-2 col-sm-2 pad-y">
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
    </section>
    
<?php get_footer(); ?>