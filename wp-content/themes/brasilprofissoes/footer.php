    <footer>
        <div id="redes_busca" class="clearfix">
        	<div class="container">
        		<div class="row">
	        		<div class="col-md-6 col-sm-6 col-xs-12" id="redes_sociais">
	        			<p class="siga">Siga o Brasil<br>
	        			Profissões<br>
	        			nas redes sociais</p>
	        			<div id="link_redes">
							<a class="fa fa-google-plus fa-3x" href="www.google.com"></a>
							<a class="fa fa-youtube fa-3x" href="#"></a>
							<a class="fa fa-linkedin fa-3x" href="#"></a>
							<a class="fa fa-twitter fa-3x" href="#"></a>
							<a class="fa fa-facebook-square fa-3x" href="#"></a>
						</div>
						<div style="clear:both;"></div>
	        		</div>
	        		<div class="col-md-6 col-sm-6 col-xs-12 nopad-right" id="busca_rodape">
	        			<img style="margin-top: 15px;" src="<?php echo get_stylesheet_directory_uri() ?>/img/brasil_profissoes.jpg" id="logo_rodape">
	        			<form class="col-xs-6" action="busca_geral.php" method="post" id="busca_form_um">
							<label for="busca">Busca no site</label>
							<input type="search" placeholder=" o que procura?" name="busca" id="busca" required="">
							<button type="submit"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/ico_seta_login.jpg"></button>
						</form>
	        		</div>
        		</div>
        	</div>
        	<div style="clear:both;"></div>
        </div>

        <div class="container">
        	<div class="row">
				<dl class="col-md-2 col-sm-3 col-xs-6 sitemap">
					<dt>O Portal</dt>
					<dd><a href="#">Quem somos</a></dd>
					<dd><a href="#">Responsabilidade Social</a></dd>
					<dd><a href="#">Fale Conosco</a></dd>
					<dd><a href="">Publicidade</a></dd>
					<dd><a href="#">Termos e Política</a></dd>
				</dl>
				<dl class="col-md-2 col-sm-3 col-xs-6 sitemap">
					<dt>Profissões</dt>
					<dd><a href="#">Profissões de A a Z</a></dd>
					<dd><a href="#">Técnicos</a></dd>
					<dd><a href="#">Acadêmicos</a></dd>
					<dd><a href="#">Públicas</a></dd>
					<dd><a href="">Estados e Profissões</a></dd>
					<dd><a href="#">Empreededores</a></dd>
				</dl>
				<dl class="col-md-2 col-sm-3 col-xs-6 sitemap">
					<dt>Guias</dt>
					<dd><a href="#">Vestibular</a></dd>
					<dd><a href="#">ENEM</a></dd>
					<dd><a href="#">PROUNI</a></dd>
					<dd><a href="">FIES</a></dd>
					<dd><a href="#">FNADE</a></dd>
					<dd><a href="#">SISU</a></dd>
					<dd><a href="#">Cursinhos</a></dd>
				</dl>
				<dl class="col-md-2 col-sm-3 col-xs-6 sitemap">
					<dt>Notícias</dt>
					<dd><a href="#">Notícias</a></dd>
					<dd><a href="#">Blog</a></dd>
					<dt>Cursos</dt>
					<dd><a href="#">Buscar curso</a></dd>
					<dd><a href="#">Ver Todos</a></dd>
				</dl>
				<dl id="news" class="col-md-4 col-sm-12 col-xs-12">
					<h1>Newsletter</h1>
					<p>Receba as nossas novidades de cursos grátis e outras	promoções direto em seu e-mail:</p>
					<form action="" method="post" name="newsletter" id="newslatter">
						<div class="col-md-12 col-sm-12 col-xs-7 nopad">
							<input type="text" required="" placeholder="  seu nome" name="seu_nome">
							<input type="email" required="" placeholder="  seu e-mail" name="seu_email">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-5 nopad-right">
							<button type="submit" name="bt_news"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/cadastrese.png"></button>
						</div>
					</form>
				</dl>
			</div>
		</div>

        <div id="rodape">
			<p id="copy" class="text-center">© Copyright <?php echo date(Y) ?> - Todos os Direitos Reservados. Brasil Profissões <a href="http://www.tekan.com.br" title="Tekan Marketing" id="tekan"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_tekan.png" alt="tekan"></a></p>
		</div>
    </footer>
  </body>
</html>