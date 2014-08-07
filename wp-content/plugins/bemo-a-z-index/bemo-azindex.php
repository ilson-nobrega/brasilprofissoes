<?php
/*
Plugin Name: BEMO A-Z Index
Plugin URI: http://www.bemoore.com/bemo-a-z-index-pro/
Description: This is a simple plugin that provides an A-Z index of the posts displayed on a particular page based on the post title.
Version: 0.0.7
Author: Bob Moore (BeMoore Software)
Author URI: http://www.bemoore.com
License: GPL2
*/

/*  
Copyright 2013  Bob Moore  (email : bob.moore@bemoore.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/********************************************************************/
/* SHORTCODES														*/
/********************************************************************/
//Register the AZ Index shortcode [azindex]
$bemoazindex = '';

add_shortcode('azindex','bemoazindex_get_filter');
function bemoazindex_get_filter($attr){

	echo '<div class="bemoazindex clearfix">';
	bemoazindex_get_alphabetical_index(); 
	echo '</div>';
}

/********************************************************************/
/* ACTIONS															*/
/********************************************************************/
//Pick up the shortcode
add_action('init', 'set_index_var');
function set_index_var()
{
	global $bemoazindex;
	$tmp = get_query_var('bemoazindex');
	
	if($tmp != "")
		$bemoazindex = $tmp;
}

//Add WHERE addition to query 
add_filter( 'posts_where' , 'bemoazindex_posts_where',10,2 );

function bemoazindex_posts_where( $where, &$wp_query) {
    global $wpdb;
	global $bemoazindex;
	//global $azindextype;
	
	//var_dump($wpdb);
	
	if(isset($bemoazindex)	)
		$where .= " AND {$wpdb->posts}.post_title LIKE '{$bemoazindex}%' ";
	
    return $where;
}

//Add stylesheet
add_action( 'wp_enqueue_scripts', 'bemoazindex_add_stylesheet' );
/**
 * Enqueue plugin style-file
 */
function bemoazindex_add_stylesheet() {
	// Respects SSL, Style.css is relative to the current file
	wp_register_style( 'bemoazindex-style', plugins_url('bemoazindex.css', __FILE__) );
	wp_enqueue_style( 'bemoazindex-style' );
}

/********************************************************************/
/* FILTERS															*/
/********************************************************************/
// Add the query var bemoazindex so WP won't drop it
add_filter( 'query_vars', 'bemoazindex_add_query_vars');

function bemoazindex_add_query_vars($vars){
    $vars[] = "bemoazindex";
    return $vars;
}
/********************************************************************/
/* MAIN CODE														*/
/********************************************************************/
function bemoazindex_get_alphabetical_index(  )
{
	$bemoazindex = get_query_var('bemoazindex');

	if($bemoazindex == '')
		$bemoazindex = -1;
	
	$base_url = get_permalink(get_the_ID());

	for($i=0;$i<26;$i++)
	{
		$letter[$i] = chr($i + 65);
		
		$href = $base_url.'index.php?bemoazindex='.$letter[$i];
		$base_add = '';
		
		if($bemoazindex == "")	//Not selected -> link
			echo '<div><a href="'.$href.'">'.$letter[$i].'</a></div>';
		else if($bemoazindex == $letter[$i])
			echo '<div class="selected" >'.$letter[$i].'</div>';
		else
			echo '<div><a href="'.$href.'">'.$letter[$i].'</a></div>';
	}
	
	if($bemoazindex == -1)
		echo '<div class="all" >Todos</div>';
	else
		echo '<div><a href="'.$base_url.'">Todos</a></div>';
}
?>