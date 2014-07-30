<?php 

require_once 'class-wonderplugin-slider-model.php';
require_once 'class-wonderplugin-slider-view.php';

class WonderPlugin_Slider_Controller {

	private $view, $model;

	function __construct() {

		$this->model = new WonderPlugin_Slider_Model($this);	
		$this->view = new WonderPlugin_Slider_View($this);
		$this->init();
	}
	
	function add_metaboxes()
	{
		$this->view->add_metaboxes();
	}
	
	function show_overview() {
		
		$this->view->print_overview();
	}
	
	function show_items() {
	
		$this->view->print_items();
	}
	
	function add_new() {
		
		$this->view->print_add_new();
	}
	
	function show_item()
	{
		$this->view->print_item();
	}
	
	function edit_item()
	{
		$this->view->print_edit_item();
	}
	
	function edit_settings()
	{
		$this->view->print_edit_settings();
	}
	
	function save_settings($options)
	{
		$this->model->save_settings($options);
	}
	
	function get_userrole()
	{
		return $this->model->get_userrole();
	}
	
	function generate_body_code($id, $has_wrapper) {
		
		return $this->model->generate_body_code($id, $has_wrapper);
	}
	
	function delete_item($id)
	{
		return $this->model->delete_item($id);
	}
	
	function clone_item($id)
	{
		return $this->model->clone_item($id);
	}
	
	function save_item($item)
	{
		return $this->model->save_item($item);	
	}
	
	function get_list_data() {
	
		return $this->model->get_list_data();
	}
	
	function init() {
	
		$engine = array("WordPress Slider", "WordPress Slideshow", "WordPress Image Slider", "WordPress Image Slideshow", "WordPress Slider Plugin", "WordPress Slideshow Plugin", "WordPress Image Slider Plugin", "WordPress Image Slideshow Plugin");
		$option_name = 'wonderplugin-slider-engine';
		if ( get_option( $option_name ) == false )
			update_option( $option_name, $engine[array_rand($engine)] );
	}
	
	function get_item_data($id) {
		
		return $this->model->get_item_data($id);
	}
}