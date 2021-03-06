<?php get_header(); 
     $categoria = get_the_category();

    switch ($categoria['0']->term_id) {
        //Parceiros
        case '24':
            if(is_tax(the_slug())){
                echo 'True';
            }else{
                echo 'False';
            }
    ?>
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

    <?php
        break;
        default:
    ?>
            
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-8 noticias">
                            <br>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li><a href="<?php echo home_url(); ?>/?cat=10">Notícias</a></li>
                                <li class="active"><?php the_title(); ?></li>
                            </ol>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <article>
                                    <?php the_post_thumbnail('thumbnail25', array('class' => 'img-responsive')); ?>
                                    <h2><?php the_title(); ?></h2>
                                    <p class="data"><?php the_time('j F, Y') ?></p>
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
                        <div class="col-md-3 col-sm-4 nopad">
                            <?php dynamic_sidebar( 'menu-noticias' ); ?>
                            <div class="mais-lidas">
                                 <?php dynamic_sidebar( 'maislidas' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php
        break;
        }
    ?>
            
    
<?php get_footer(); ?>