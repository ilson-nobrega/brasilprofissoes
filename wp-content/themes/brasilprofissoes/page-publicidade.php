<?php get_header(); ?>
    
    <section>
        <div class="container">
        	<div class="row">
        			<div class="col-md-9 img_publicidade ">
        				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/publicidade.jpg" class="img-responsive">
					</div>
					<div class="col-md-3 nopad">
					
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/estado.jpg" class="img-responsive">
        			</div>	
        	</div>
			<div class="row">
				<h1>Parceiros anunciantes</h1>
				<p>O Portal Brasil Profissões possui grande visibilidade e crescimento. Com novos parceiros, que terão uma página própria em nosso Portal, visamos atrair ainda mais interessados no mercado profissional e profissionalizante.</p>
				<p>Pela abrangência que o Portal tem em oferecer diversos tipos de cursos em variadas instituições e oportunidades de carreiras de trabalho em todas as áreas e em todo o país, o público também é bem abrangente e crescente.</p>
			</div>
			<div class="row">
				<h1>Opções de publicidade</h1>
				<p>Para os anunciantes interessados nesse público, possuímos espaço para anúncios de grande visibilidade no formato de banners digitais em alguns locais diferentes do site.</p>
			</div>
			<div class="row">
				<h1>“Parceiro Brasil Profissões”</h1>
				<p>Outra opção de divulgação em nosso Portal é o “Parceiro Brasil Profissões”, no qual é criada uma parceria, para que a instituição interessada no espaço do Portal Brasil Profissões, passe a possuir uma página própria dentro do site, formando assim, uma contribuição mútua que resulta em um maior alcance e um  grande apoio ao desenvolvimento educacional e social do país e, principalmente, às pessoas que a constroem.</p>
			</div>
        	<div class="row pad-y formulario-parceiro">
				<h1>Deseja conhecer mais sobre esta parceria?</h1>
					<form action="" method="post" name="form_parceiro">
						<div class="col-md-6 aling-left">
							
							<input type="text" name="nome" placeholder="Nome/Responsável">
							
							<input type="text" name="empresa" placeholder="Empresa">
							
							<input type="tel" name="telefone" placeholder="Telefone">	
							
							<input type="text" name="assunto" placeholder="E-mail">

						</div>
						<div class="col-md-6 aling-right">
							<textarea name="mensagem" placeholder="Mensagem"></textarea>
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