<?php get_header(); ?>
    
    <section>
        <div class="container parceiros">
        	<div class="row">
        	<br>
            <h2>Projetos de <?php single_cat_title(); ?></h2>
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        			<article class="col-md-3 parceiro">
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
                <div id="destaquebox clearfix">
                    <article class="noti-destaque col-md-4">
                        <?php
                            $destaquebox = get_posts('numberposts=1&featured=yes&category=10');
                            foreach($destaquebox as $post) :
                            setup_postdata($post);
                        ?>
                        <article>
                            <h2><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </article>
                        <?php endforeach; ?>
                    </article>
                    <div class="col-md-6">
                        <?php
                            $noticiasbox = new WP_Query(array(
                                                'post_type' => 'post',
                                                'category_name' => 'noticias',
                                                'featured' => 'no',
                                                'posts_per_page' => 5
                                            ));

                            $posts = $noticiasbox->get_posts();

                            foreach ($posts as $post) {
                                
                                echo $post->post_name.'<br>';
                            }
                            // $noticiasbox = get_posts('numberposts=5&category=10&featured=');
                            // foreach($noticiasbox as $post) :
                            // setup_postdata($post);
                        ?>
                       <!--  <article class="col-md-6">
                            <h2><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </article> -->
                        <?php //endforeach; ?>
                    </div>
                </div>
                <div class="col-md-2 nopad"><h4>publicidade</h4><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/microsoft_training.jpg"></div>
            </div>

        </div>
    </section>
    
<?php get_footer(); ?>