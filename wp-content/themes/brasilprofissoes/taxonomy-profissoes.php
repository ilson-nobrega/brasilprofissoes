<?php get_header(); ?>
    
    <?php 
    
    
    $var = get_the_taxonomies();
    
    $textoTratado = substr($var['profissoes'], 12);
    $textoTratado = str_replace(".", "", $textoTratado);
    echo '<br><br><br><br>'.$textoTratado;
    
    
    
    ?>
    
<?php get_footer(); ?>