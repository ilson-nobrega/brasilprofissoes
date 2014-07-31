<?php get_header(); ?>
    
     <section>
        <div class="container">
        	<div class="row">
        	<br>
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        			<article>
                        <?php the_title(); ?>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile?>
                <?php else: ?>
                    <article>
                        <h2>Nada Encontrado</h2>
                        <p>Lamentamos mas não foram encontrados artigos.</p>
                    </article>            
                <?php endif; ?>
        	</div>
        </div>
    </section>
    
<?php get_footer(); ?>