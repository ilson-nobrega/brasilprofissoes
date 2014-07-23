<?php get_header(); 
    $categoria = get_the_category();

    switch ($categoria['0']->term_id) {
        //Parceiros
        case '24':
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
            //Noticias
            case '10':
    ?>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <br>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li><a href="<?php echo home_url(); ?>/?cat=24">Notícias</a></li>
                                <li class="active"><?php the_title(); ?></li>
                            </ol>
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
                        <div class="col-md-3 nopad">
                            <div class="mais-lidas">
                                <h3>Mais lidas</h3>
                                <ol>
                                    <li><a href="noticia.php">Wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing.</a></li>
                                    <li><a href="noticia.php">Wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing.</a></li>
                                    <li><a href="noticia.php">Wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing.</a></li>
                                    <li><a href="noticia.php">Wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing.</a></li>
                                    <li><a href="noticia.php">Wisi quam lorem vestibulum nec nibh, sollicitudin volutpat at libero litora, non adipiscing.</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php
        break;
            default:
            echo "default";
            break;
        }
    ?>
    
<?php get_footer(); ?>