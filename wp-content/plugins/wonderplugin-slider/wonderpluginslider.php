<?php
/*
Plugin Name: WonderPlugin Slider
Plugin URI: http://www.wonderplugin.com
Description: WordPress Image and Video Slider Plugin
Version: 1.9
Author: Magic Hills Pty Ltd
Author URI: http://www.wonderplugin.com
License: Copyright 2014 Magic Hills Pty Ltd, All Rights Reserved
*/

define('WONDERPLUGIN_SLIDER_VERSION', '1.9');
define('WONDERPLUGIN_SLIDER_URL', plugin_dir_url( __FILE__ ));
define('WONDERPLUGIN_SLIDER_PATH', plugin_dir_path( __FILE__ ));

require_once 'app/class-wonderplugin-slider-controller.php';

class WonderPlugin_Slider_Plugin {
	
	function __construct() {
	
		$this->init();
	}
	
	public function init() {
		
		// init controller
		$this->wonderplugin_slider_controller = new WonderPlugin_Slider_Controller();
		
		add_action( 'admin_menu', array($this, 'register_menu') );
		
		add_shortcode( 'wonderplugin_slider', array($this, 'shortcode_handler') );
		
		add_action( 'init', array($this, 'register_script') );
		add_action( 'wp_enqueue_scripts', array($this, 'enqueue_script') );
		
		if ( is_admin() )
		{
			add_action( 'wp_ajax_wonderplugin_slider_save_item', array($this, 'wp_ajax_save_item') );
			add_action( 'admin_init', array($this, 'admin_init_hook') );
		}
	}
	
	function register_menu()
	{
		$userrole = $this->get_userrole();
		
		$menu = add_menu_page(
				__('WonderPlugin Slider', 'wonderplugin_slider'),
				__('WonderPlugin Slider', 'wonderplugin_slider'),
				$userrole,
				'wonderplugin_slider_overview',
				array($this, 'show_overview'),
				WONDERPLUGIN_SLIDER_URL . 'images/logo-16.png' );
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				'wonderplugin_slider_overview',
				__('Overview', 'wonderplugin_slider'),
				__('Overview', 'wonderplugin_slider'),
				$userrole,
				'wonderplugin_slider_overview',
				array($this, 'show_overview' ));
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				'wonderplugin_slider_overview',
				__('New Slider', 'wonderplugin_slider'),
				__('New Slider', 'wonderplugin_slider'),
				$userrole,
				'wonderplugin_slider_add_new',
				array($this, 'add_new' ));
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				'wonderplugin_slider_overview',
				__('Manage Sliders', 'wonderplugin_slider'),
				__('Manage Sliders', 'wonderplugin_slider'),
				$userrole,
				'wonderplugin_slider_show_items',
				array($this, 'show_items' ));
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				'wonderplugin_slider_overview',
				__('Settings', 'wonderplugin_slider'),
				__('Settings', 'wonderplugin_slider'),
				'manage_options',
				'wonderplugin_slider_edit_settings',
				array($this, 'edit_settings' ) );
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				null,
				__('View Slider', 'wonderplugin_slider'),
				__('View Slider', 'wonderplugin_slider'),	
				$userrole,	
				'wonderplugin_slider_show_item',	
				array($this, 'show_item' ));
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				null,
				__('Edit Slider', 'wonderplugin_slider'),
				__('Edit Slider', 'wonderplugin_slider'),
				$userrole,
				'wonderplugin_slider_edit_item',
				array($this, 'edit_item' ) );
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
	}
	
	function register_script()
	{
		wp_register_script('wonderplugin-slider-skins-script', WONDERPLUGIN_SLIDER_URL . 'engine/wonderpluginsliderskins.js', array('jquery'), WONDERPLUGIN_SLIDER_VERSION, false);
		wp_register_script('wonderplugin-slider-script', WONDERPLUGIN_SLIDER_URL . 'engine/wonderpluginslider.js', array('jquery'), WONDERPLUGIN_SLIDER_VERSION, false);
		wp_register_script('wonderplugin-slider-creator-script', WONDERPLUGIN_SLIDER_URL . 'app/wonderplugin-slider-creator.js', array('jquery'), WONDERPLUGIN_SLIDER_VERSION, false);
		wp_register_style('wonderplugin-slider-admin-style', WONDERPLUGIN_SLIDER_URL . 'wonderpluginslider.css');
	}
	
	function enqueue_script()
	{
		wp_enqueue_script('wonderplugin-slider-skins-script');
		wp_enqueue_script('wonderplugin-slider-script');
	}
	
	function enqueue_admin_script($hook)
	{
		wp_enqueue_script('post');
		if (function_exists("wp_enqueue_media"))
		{
			wp_enqueue_media();
		}
		else
		{
			wp_enqueue_script('thickbox');
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
		}
		wp_enqueue_script('wonderplugin-slider-skins-script');
		wp_enqueue_script('wonderplugin-slider-script');
		wp_enqueue_script('wonderplugin-slider-creator-script');
		wp_enqueue_style('wonderplugin-slider-admin-style');
	}

	function admin_init_hook()
	{
		// change text of history media uploader
		if (!function_exists("wp_enqueue_media"))
		{
			global $pagenow;
			
			if ( 'media-upload.php' == $pagenow || 'async-upload.php' == $pagenow ) {
				add_filter( 'gettext', array($this, 'replace_thickbox_text' ), 1, 3 );
			}
		}
		
		// add meta boxes
		$this->wonderplugin_slider_controller->add_metaboxes();
	}
	
	function replace_thickbox_text($translated_text, $text, $domain) {
		
		if ('Insert into Post' == $text) {
			$referer = strpos( wp_get_referer(), 'wonderplugin-slider' );
			if ( $referer != '' ) {
				return __('Insert into slider', 'wonderplugin_slider' );
			}
		}
		return $translated_text;
	}
	
	function show_overview() {
		
		$this->wonderplugin_slider_controller->show_overview();
	}
	
	function show_items() {
		
		$this->wonderplugin_slider_controller->show_items();
	}
	
	function add_new() {
		
		$this->wonderplugin_slider_controller->add_new();
	}
	
	function show_item() {
		
		$this->wonderplugin_slider_controller->show_item();
	}
	
	function edit_item() {
	
		$this->wonderplugin_slider_controller->edit_item();
	}
	
	function edit_settings() {
	
		$this->wonderplugin_slider_controller->edit_settings();
	}
	
	function get_userrole() {
	
		return $this->wonderplugin_slider_controller->get_userrole();
	}
	
	function shortcode_handler($atts) {
		
		if ( !isset($atts['id']) )
			return __('Please specify a slider id', 'wonderplugin_slider');
		
		return $this->wonderplugin_slider_controller->generate_body_code( $atts['id'], false);
	}
	
	function wp_ajax_save_item() {
				
		header('Content-Type: application/json');
		echo json_encode($this->wonderplugin_slider_controller->save_item($_POST["item"]));
		die();
	}
	
}

/**
 * Init the plugin
 */
$wonderplugin_slider_plugin = new WonderPlugin_Slider_Plugin();

/**
 * Global php function
 * @param $id
 */
function wonderplugin_slider($id) {

	echo $wonderplugin_slider_plugin->wonderplugin_slider_controller->generate_body_code($id, false);
}

/**
 * Uninstallation
 */
function wonderplugin_slider_uninstall() {

	global $wpdb;
	$table_name = $wpdb->prefix . "wonderplugin_slider";
	$wpdb->query("DROP TABLE IF EXISTS $table_name");
}

if ( function_exists('register_uninstall_hook') )
{
	register_uninstall_hook( __FILE__, 'wonderplugin_slider_uninstall' );
}

define('WONDERPLUGIN_SLIDER_VERSION_TYPE', 'F');
