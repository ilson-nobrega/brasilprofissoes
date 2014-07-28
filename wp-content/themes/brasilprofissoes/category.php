<?php get_header(); ?>
    
    <section>
        <div class="container">
        	<div class="row">
            	<br>
        		<div class="col-md-9 col-sm-8 noticias">
                    <h2><?php single_cat_title( '', true ); ?></h2>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            			<article>
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
                            </a>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <a class="readmore" href="<?php the_permalink() ?>">mais</a>
                        </article>
                    <?php endwhile?>
                        <?php paginate(); ?>
                    <?php else: ?>
                        <article>
                            <h2>Nada Encontrado</h2>
                            <p>Lamentamos mas não foram encontrados artigos.</p>
                        </article>            
                    <?php endif; ?>
                </div>
                <div class="col-md-3 col-sm-4 nopad">
                    <div class="mais-lidas">
                        <?php dynamic_sidebar( 'maislidas' ); ?>
                    </div>
                </div>
        	</div>
        </div>
    </section>
    
<?php get_footer(); ?>