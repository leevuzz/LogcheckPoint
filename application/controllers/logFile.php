<?php defined('BASEPATH') OR exit ('No direct script access allowed') ;

/**
*  
*/

class logFile extends CI_controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('logFile_model');
		
	}
	function index()
	{
		
		$this->load->view('index_view');
	}
	function admin()
	{
		
		$this->load->view('show_data_v');
	
	}
}