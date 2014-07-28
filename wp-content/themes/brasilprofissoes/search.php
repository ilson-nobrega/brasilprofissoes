<?php get_header(); ?>
    
    <section>
        <div class="container">
        	<div class="row">
        	<br>
            <h2>Resultados da Pesquisa</h2>
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        			<article>
                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <p><?php echo excerpt(10); ?></p>
                    </article>
                <?php endwhile?>
                <?php else: ?>
                    <article class="col-md-5">
                        <div>
                            <h4>Nenhum resultado encontrado</h4>
                            <p>Por favor, tente uma nova pesquisa.</p>
                        </div>
                    </article>            
                <?php endif; ?>
                <div class="col-md-7 nopad novapesquisa">
                    <?php get_search_form(); ?>
                </div>
        	</div>
        </div>
    </section>
    
<?php get_footer(); ?>