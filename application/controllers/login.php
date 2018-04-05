<?php defined('BASEPATH') OR exit ('No direct script access allowed') ;
class login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('user_m');
	}

	function index()
	{
		if($this->session->userdata('isLoggedIn')){
			redirect('');
		}
		else{
			$this->show_login(FALSE);
		}
	}

	function show_login($show_err = FALSE){
		if(!$this->session->userdata('isLoggedIn'))
		{
			$data['error'] = $show_err;
			$this->load->view('index_view',$data);
		}
		else{
			// hien thi trang admin
			redirect('show_data');
		}
	}
	function login_user(){
		$user_name = $this->input->post('user_name');
		$pass_word = $this->input->post('pass_word');

		if($user_name && $pass_word && $this->user_m->validate_user($user_name,$pass_word) || $this->session->userdata('user_name')){
			redirect('show_data');
		}
		else{
			// Hien thi man hinh login
			$this->show_login(TRUE);
		}
	}

	function logout_user()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}
?>