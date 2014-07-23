<?php get_header(); ?>
   
    <section>
        <div class="container">
        	<div class="row">
	        	<div class="col-md-9 gray" style="height:516px;"></div>
	        	<img class="col-md-3 nopad-right img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/estado.jpg">
        	</div>
        	
        	<div class="row carreira">
				<h1><p>Chegou a hora de encontrar a</p> <p>profissão certa e turbinar sua carreira:</p></h1>
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/proficoes_tecnicas.jpg" class="img-responsive"></a>
				</div>	
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/academicas.jpg" class="img-responsive"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/publicas.jpg" class="img-responsive"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/emprededorismo.jpg" class="img-responsive"></a>
				</div>
				
	        </div>

	        <div class="row pad-y caminhos_futuros">
	        	<div class="col-md-9">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/caminhos_futuros.jpg" class="img-responsive"></a>	
	        	</div>
				
				<div class="col-md-3">
					<div class="enquete">
						<h4>Qual desses cusos precisam de maior prioridade?</h4>
						<form action="" class="form_enquete" method="post">
							<ul>
								<li>
									<input type="radio" name="saude" id="saude" value="saude"/><label for="saude">Saude</label>
								</li>
								<li>
									<input type="radio" name="educação" id="educação" value="educação"/><label for="educação">Educação</label>
								</li>
								<li>
									<input type="radio" name="lazer" id="lazer" value="lazer"/><label for="lazer">Lazer</label>
								</li>
								<li>
									<input type="radio" name="outras" id="outras" value="outras"/><label for="outras">Outras</label>
								</li>
								<li class="text-right">
									<button type="submit"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_prioridade.jpg"></button>	
								</li>
							</ul>
						  </form>
					</div>
				</div>	
	        </div>
			
			<div class="row pad-y intituicoes">
				<div class="col-md-5">
					<div class="encontrar_vagas">
						<h1><p>encontre</p> <p>vagas e cursos</p> <p>por instituições</p></h1>
					</div>
					
				</div>
				
				<div class="col-md-7">
					<div class="carousel-parceiros">
					</div>
				</div>

			</div>

			<div class="row pad-y busca_cursos">
				
				<div class="col-md-6 col-titulo">
					<div class="titulo_cursos">
						<h1><p>Busque entre mais</p> <p>de 1000 cursos:</p></h1>
					</div>	
				</div>
				<div class="col-md-6 col-form">
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
						<ul class="col-md-11 ul_link">
						<li class="ico_msg "><a href="#">Receba Grátis em seu email um aviso sobre cursos</a></li>
						</ul>
					</div>
				</div>
			
			</div>
			
			<div class="row pad-y cursos_destaque">
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/tecnico_administracao.jpg" class="img-responsive"></a>
				</div> 
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/gerente_banco.jpg" class="img-responsive"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/juiz_direito.jpg" class="img-responsive"></a>
				</div> 
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/curso_sebrae.jpg" class="img-responsive"></a>
				</div> 


			</div>
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

        </div>
    </section>
    
<?php get_footer(); ?>