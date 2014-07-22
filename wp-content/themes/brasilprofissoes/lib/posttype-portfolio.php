<?php

//Creates Porfolio post type
add_action( 'init', 'create_post_type_portfolio' );
function create_post_type_portfolio(){
    $labels = array(
        'name' => __( 'Portfolio', 'unik'),
        'singular_name' => __( 'Portfolio' , 'unik' ),
        'add_new' => __( 'Add New', 'unik' ),
        'add_new_item' => __( 'Add New Portfolio', 'unik'),
        'edit_item' => __( 'Edit Portfolio', 'unik' ),
        'new_item' => __( 'New Portfolio', 'unik' ),
        'view_item' => __( 'View Portfolio', 'unik' ),
        'search_items' => __( 'Search Portfolio', 'unik' ),
        'not_found' =>  __( 'No portfolios found', 'unik' ),
        'not_found_in_trash' => __( 'No portfolios found in Trash', 'unik' ),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'rewrite' => array( 'slug' => __( 'portfolio', 'unik' ) ),
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments' ),
    );

    register_post_type( 'portfolio', $args);
}


//Creates Portfolio fiters
add_action( 'init', 'create_portfolio_filters', 0 );
function create_portfolio_filters() {
    $labels = array(
                'name' => __( 'Filters', 'unik' ),
                'search_items' => __( 'Search Filters', 'unik' ),
                'popular_items' => __( 'Most Used Filters', 'unik' ),
                'edit_item' => __( 'Edit Filter', 'unik' ),
                'update_item' => __( 'Update Filter', 'unik' ),
                'add_new_item' => __( 'Add New Filter', 'unik' ),
                'separate_items_with_commas' => '',
                'add_or_remove_items' => __( 'Add or remove filters', 'unik' ),
                'choose_from_most_used' => __( 'Choose from the most used filters', 'unik' )
            );
            
    register_taxonomy( 'portfolio-filter', 'portfolio', array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_ui' => true,
        'query_var' => true
    ));
}



//Portfolio icons in Dashboard
add_action( 'admin_head', 'portfolio_icons' );
function portfolio_icons() {
    ?>
    <style type="text/css" media="screen">
        #menu-posts-portfolio .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/images/portfolio-icon.png) no-repeat 6px 6px !important;
        }
    #menu-posts-portfolio:hover .wp-menu-image, #menu-posts-portfolio.wp-has-current-submenu .wp-menu-image {
            background-position:6px -16px !important;
        }
    #icon-edit.icon32-posts-portfolio {background: url(<?php get_template_directory_uri() ?>/images/portfolio-32x32.png) no-repeat;}
    </style>
<?php }




//Adds taxonomy filters
add_action( 'restrict_manage_posts', 'portfolio_add_taxonomy_filters' ); 
function portfolio_add_taxonomy_filters() {
    global $typenow;
    
    $taxonomies = array( 'portfolio-filter' );
 
    if ( $typenow == 'portfolio' ) {
 
        foreach ( $taxonomies as $tax_slug ) {
            $current_tax_slug = isset( $_GET[$tax_slug] ) ? $_GET[$tax_slug] : false;
            $tax_obj = get_taxonomy( $tax_slug );
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            if ( count( $terms ) > 0) {
                echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
                echo "<option value=''>$tax_name</option>";
                foreach ( $terms as $term ) {
                    echo '<option value=' . $term->slug, $current_tax_slug == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
                }
                echo "</select>";
            }
        }
    }
}