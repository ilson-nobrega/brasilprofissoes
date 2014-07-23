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
					
					</div>	
				</div>
				<div class="col-md-6 col-form">
					<div class="form_cursos">
					</div>
				</div>
			
			</div>

        </div>
    </section>
    
<?php get_footer(); ?>