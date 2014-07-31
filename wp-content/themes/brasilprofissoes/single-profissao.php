<?php get_header(); ?>
<section>
            <div class="container">
                <div class="row pad-y texto_proficao">
                
                    <div class="col-md-3 col-sm-4 nopad">
                        <div class="menu_esquerdo">
                            <?php dynamic_sidebar( 'menu-esquerdo' ); ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>                        
                    </div>
    					<img class="col-md-4 nopad img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/ad_vertical.jpg">
                              
                    <?php if ( have_posts() ) :
                    
                              while ( have_posts() ) : the_post(); ?>
                                <div class="col-md-9 col-md-offset-3">
            						<h4 class="icone_descricao">a:</h4>
                                	<p>b</p>
            					</div>
					<?php 
					          endwhile;
					      else:
					?>
                            <article class="col-md-9 col-md-offset-3">
                                <h2>Nada Encontrado</h2>
                                <p>Lamentamos mas não foram encontrados artigos.</p>
                            </article>            
                   <?php  endif; ?>
					

                   

                </div>
                <div class="row pad-y texto_proficao">
					<div class="col-md-offset-3 col-md-9">
						<h4 class="icone_descricao">Características:</h4>
                    	<p>É necessário ter boa capacidade de análise, raciocínio abstrato e aptidão numérica. Também deve ter liderança e ser sociável. Características desejáveis para ser um administrador:</p>
	                    	<ul class="col-md-6 pad-y">
	                    		<li>autoconfiança;</li>
	                    		<li>capacidade de adaptação a novas situações;</li>
	                    		<li>capacidade de decisão;</li>
	                    		<li>capacidade de negociação;</li>
	                    		<li>capacidade de organização;</li>
	                    		<li>capacidade de pensar e agir sob pressão;</li>
	                    		<li>capacidade de planejamento;</li>
	                    		<li>capacidade de resolver problemas práticos;</li>
	                    	</ul>

	                    	<ul class="col-md-6 pad-y">
	                    		<li>autoconfiança;</li>
	                    		<li>capacidade de adaptação a novas situações;</li>
	                    		<li>capacidade de decisão;</li>
	                    		<li>capacidade de negociação;</li>
	                    		<li>capacidade de organização;</li>
	                    		<li>capacidade de pensar e agir sob pressão;</li>
	                    		<li>capacidade de planejamento;</li>
	                    		<li>capacidade de resolver problemas práticos;</li>
	                    	</ul>
					</div>

					<div class="col-md-9 col-md-offset-3">
						<h4 class="icone_descricao">Características:</h4>
                    	<p>Existem duas formas para se formar como administrador, fazendo curso de bacharel em administrador, que tem duração de 4 anos, ou o curso técnico de administração que tem duração média de um ano e meio. O mercado brasileiro oferece a possibilidade de estudar administração de empresas, onde a orientação e formar profissionais para atuar em organizações privadas. Também o curso de administração pública prepara e orienta os administradores a uma atuação em organizações públicas e possibilidades de gestão de políticas e projetos de caráter público. Por ter um caráter mais generalista na sua formação, o administrador pode optar por várias áreas de trabalho como profissional. Finanças, Marketing, Tecnologia e Informação, Recursos Humanos e etc. são áreas de grande atenção dos administradores. Marketing Esportivo, Turismo, Administração Hospitalar também são consideradas áreas promissoras para o universo dos administradores. No Brasil, para exercer a profissão, uma vez que esta é uma profissão regulamentada, é preciso obter o registro profissional no Conselho Regional de Administração (CRA). Os empregadores, através de headhunters (profissionais que recrutam e selecionam candidatos a vagas disponíveis em empresas contratantes), classificam em jornais e outras formas de recrutamento, buscam os profissionais mais bem preparados, no âmbito acadêmico. Portanto, fazer um curso de pós-graduação ou especialização é sempre um diferencial positivo que o profissional de administração deve considerar.</p>
					</div>
					<div class="col-md-9 col-md-offset-3">
						<h4 class="icone_descricao">Principal atividades</h4>
						<p>Ele deve planejar, organizar e controlar as atividades de empresas públicas e privadas, além de traçar estratégias e métodos de trabalho nas mais variadas áreas - rural, hospitalar, agroindustrial, escolar, financeira e muitas outras. Seu papel é fundamental nas situações de crise, pois cabe a ele definir onde investir o dinheiro e como equilibrar a saúde financeira e produtiva da empresa.</p>
					</div>

					<div class="col-md-9 col-md-offset-3">
						<h4 class="icone_descricao">Áreas de atuação</h4>
						<p>Administração agroindustrial: desenvolve projetos, controla a produção e dá assistência ao produtor do campo. Administração de cooperativas: supervisionar e fiscalizar a entrada de recursos e distribuição de direitos entre os produtores Administração de empresas: organiza e dirige uma empresa, atuando em todas as áreas. Administração hospitalar: geralmente pessoas formadas em medicina, que fazem uma especialização em administração, dirigem e administram um hospital. Análise de sistemas: gerencia os sistemas de computação em empresas. Comércio exterior: trabalha especificamente com o mercado internacional, balança de comércio, taxas alfandegárias, importações e exportações. Controladoria: controla finanças, contabilidade, técnicas de organização e métodos administrativos. Realiza auditorias. Marketing ou mercadologia: trabalha com o mercado, fazendo pesquisas, orientando lançamento de produtos, orientação de vendas e publicidade. Orçamento e finanças: trabalha com mercado de capitais, bolsa de valores, aplicações, investimentos de empresas. Produção: controla a entrada e saída de suprimentos e os custos da produção. Recursos humanos: faz seleção, treinamento e admissão de pessoal, define políticas de carreira, salário e benefícios, negocia com sindicatos. Administração do Terceiro Setor: Planejamento estratégico das operações de ONG's (Organizações Não Governamentais), como fundações e entidades filantrópicas, com vistas a captação de recursos e sua aplicação em projetos sociais, ambientais e educacionais, entre outros.</p>
					</div>
					<div class="col-md-9 col-md-offset-3">
						<h4 class="icone_descricao">Mercado de trabalho</h4>
						<p>As áreas de administração de empresas e administração financeira oferecem as melhores oportunidades de trabalho a esse profissional, nas diversas regiões do país, seja no setor público, seja na iniciativa privada. Operadoras logísticas de grande porte também costumam abrir vagas para especialistas na área. Como a concorrência é grande, o diferencial na hora da contratação é a qualificação. Quem tem no currículo curso de especialização, MBA ou pós-graduação tem maiores possibilidades.</p>
					</div>	

					<div class="col-md-9 col-md-offset-3">
						<h4 class="icone_descricao">Mais informações</h4>
						<p>As áreas de administração de empresas e administração financeira oferecem as melhores oportunidades de trabalho a esse profissional, nas diversas regiões do país, seja no setor público, seja na iniciativa privada. Operadoras logísticas de grande porte também costumam abrir vagas para especialistas na área. Como a concorrência é grande, o diferencial na hora da contratação é a qualificação. Quem tem no currículo curso de especialização, MBA ou pós-graduação tem maiores possibilidades.</p>
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
                                <div class="col-md-3 col-sm-2">
            						<div class="img_cursos" style="background: url(<?php echo $src[0]; ?> ) center !important;">
            							<div class="blue">
            								<a href="<?php echo the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
            							</div>
            						</div>	
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
                                <div class="col-md-3 col-sm-2">
            						<div class="img_cursos" style="background: url(<?php echo $src[0]; ?> ) center !important;">
            							<div class="blue">
            								<a href="<?php echo the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
            							</div>
            						</div>	
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
<?php get_footer(); ?>