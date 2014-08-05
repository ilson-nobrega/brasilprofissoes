<?php get_header(); ?>
    
     <section>
        <div class="container">
        	<div class="row">
        			<div class="col-md-9 img_publicidade">
        				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/banerfaleconosco.jpg" class="img-responsive">
					</div>
					<div class="col-md-3 nopad">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/estado_menor.jpg" class="img-responsive">
        			</div>
        	</div>	

        	<div class="row pad-y formulario-parceiro">
				<h1>Fale conosco!</h1>
					<form action="" method="post" name="form_parceiro">
						<div class="col-md-6 aling-left">
							
							<input type="text" name="nome"placeholder="Nome/Responsavel">
							
							<input type="text" name="empresa"placeholder="Empresa">
							
							<input type="tel" name="telefone"placeholder="Telefone">	
							
							<input type="text" name="assunto"placeholder="Assunto">

						</div>
						<div class="col-md-6 aling-right">
							<textarea name="menssagem" placeholder="Menssagem"></textarea>
						</div>
						<div class="col-md-12 pad-y campo-botao">
							<input type="checkbox" name="novidades" class="col-md-1"><h3 class="col-md-8">Desejo fazer o download do media kit</h3>
						</div>
						<div class="col-md-12 pad-y campo-botao">
							<input type="checkbox" name="novidades" class="col-md-1"><h3 class="col-md-8">Desejo receber novidades e promoções do Brasil Profissões</h3>
							<button type="submit" class="col-md-2 col-md-offset-1">Enviar</button>	
						</div>
					</form>
        	</div>

        	<div class="row pad-y">
				<div class="col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/propaganda_microsoft_red.jpg" class="img-responsive">
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/propaganda_microsoft_menor.jpg" class="img-responsive">
				</div>
        	</div>
        </div>
    </section>
    
<?php get_footer(); ?>