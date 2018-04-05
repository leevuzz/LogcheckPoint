<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
*  
*/
class Show_data extends CI_Controller
{
	
	public function __construct()
	{
		# code...
		parent:: __construct();
		$this->load->model('user_m');
	}
	public function index()
	{
		check_access();
		$this->load->helper('url');
		$form['ds_server'] = $this->user_m->get_name_server();
		$form['load_action'] = $this->user_m->get_all();
		$this->load->view('show_data_v',$form);
	}

	public function ajax_get_data()
	{

		$name_server = $this->input->post('name_server');
		$d_start_date = $this->input->post('start_date');
		$start_date = date("Y-m-d",strtotime($d_start_date));
		$d_end_date = $this->input->post('end_date');
		$end_date =  date("Y-m-d",strtotime($d_end_date));
		$data = $this->user_m->get_data($name_server,$start_date,$end_date);
		 // var_dump($name_server);
		 echo json_encode($data);
	}

	public function ajax_get_date()
	{
		$name_server = $this->input->post('name_server');
		$d_start_date = $this->input->post('start_date');
		$start_date = date("Y-m-d",strtotime($d_start_date));
		$d_end_date = $this->input->post('end_date');
		$end_date =  date("Y-m-d",strtotime($d_end_date));
		$data = $this->user_m->get_distinct_date($name_server,$start_date,$end_date);
		echo json_encode($data);
	}

	public function ajax_count_begin($name_server,$time1,$loai_action)
	{
		$data = $this->user_m->count_begin($name_server,$time1,$loai_action);
		echo json_encode($data);
	}
	public function ajax_count_end($name_server,$time1,$loai_action)
	{
		$data = $this->user_m->count_end($name_server,$time1,$loai_action);
		echo json_encode($data);
	}

}
 ?>