    <form role="search" method="get" name="searchform" id="searchform" class="nopad col-lg-3 col-md-4 col-sm-4 col-xs-12 searchform" action="http://clientes.tekan.com.br/brasilprofissoes/" style="float:right;background: #fff;">
        <input type="text" placeholder="busca no site" value="<?php get_search_query(); ?>" name="s" id="s" />
        <button type="submit" id="searchsubmit" class="area-search" value="<?php esc_attr_x( 'Search', 'submit button' ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/bt_busca_topo.png">
        </button>
    </form>