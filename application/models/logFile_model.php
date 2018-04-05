<?php 

Class Logfile_model extends CI_Model
{
	var $table = 'user_login';

	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	public function get_all(){
		$this->db->form($this->table);
		$query = $this->db->get();
		return $query->result();
	}

}

 ?>