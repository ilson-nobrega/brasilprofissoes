<?php
/**
 * Cria um separador no Menu Admin
 * @param string $position
 */
function add_admin_menu_separador($position) {

	global $menu;
	$index = 0;

	foreach($menu as $offset => $section) {
		if (substr($section[2],0,9)=='separator')
			$index++;
		if ($offset>=$position) {
			$menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
			break;
		}
	}

	ksort( $menu );
}