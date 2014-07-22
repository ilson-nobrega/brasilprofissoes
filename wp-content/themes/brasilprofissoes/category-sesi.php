<?php get_header(); ?>
    
    <section>
        <div class="container parceiros">
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4 nopad">
                    <div class="parceiro-logo" style="background: #0068b3;">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/sesi.jpg" alt="">
                    </div>
                    <div class="parceiro-info">
                        <h3>Projetos e eventos</h3>
                        <a href="#">Cidades participantes</a>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3>Cursos e oportunidades</h3>
                        <a href="#">Alavanche seu sucesso</a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8 nopad-right">
                    <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "sesi" ); } ?>
                </div>
            </div>
        	<div class="row">
                <h2>Projetos do <?php single_cat_title(); ?></h2>
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        			<article class="col-md-3 col-xs-3 parceiro">
                        <div>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                <span>saiba mais</span>
                                <?php the_post_thumbnail('thumbnail25', array('class' => 'img-responsive')); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile?>
                <?php else: ?>
                    <article>
                        <h2>Nada Encontrado</h2>
                        <p>Lamentamos mas não foram encontrados artigos.</p>
                    </article>            
                <?php endif; ?>
        	</div>
            <div class="row">
                <div class="noticiasboxes col-md-10 col-xs-12 nopad-left">
                    <h2 class="text-center">Notícias</h2>
                    <div class="noti-destaque pad-y col-md-6 col-xs-6">
                        <?php
                            $destaquebox = get_posts('numberposts=1&featured=yes&category=10');
                            foreach($destaquebox as $post) :
                            setup_postdata($post);
                        ?>
                        <article>
                            <?php the_post_thumbnail('destaquebox-img', array('class' => 'img-responsive')); ?>
                            <p class="data"><?php the_time('j F, Y') ?></p>
                            <h2><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h2>
                            <?php echo excerpt(80); ?>
                        </article>
                        <?php endforeach; ?>
                    </div>
                    <div class="noti-posts col-md-6 col-xs-6 nopad">
                        <?php
                            $noticiasbox = get_posts('numberposts=4&featured=no&category=10');
                            foreach($noticiasbox as $post) :
                            setup_postdata($post);
                        ?>
                        <article class="col-md-6 col-xs-6">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
                            <p class="data"><?php the_time('j F, Y') ?></p>
                            <h3><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h3>
                            <?php echo excerpt(10); ?>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="ad-home-noti col-md-2 nopad-right"><h4>publicidade</h4><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/microsoft_training.jpg"></div>
            </div>

        </div>
    </section>
    
<?php get_footer(); ?>