<?php 

class User_m extends CI_Model
{
	var $table = 'user_login';
	var $table1 = 'logfile';
	var $table2 = 'info_server';
	var $table3 = 'danh_muc';
	var $details;

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function validate_user($user_name,$pass_word)
	{
		// Build a query to retrieve the user's details
		// based on the received username and password
		$this->db->from($this->table);
		$this->db->where('user_name',$user_name);
		$this->db->where('pass_word',$pass_word);
		$login = $this->db->get()->result();

		// The results of the query are stored in $login.
		// If a value exists, then the user account exists and is validated
		if(is_array($login) && count($login) == 1)
		{
			// Set the users details into the $details property of this class
			$this->details = $login[0];
			// Call set_session to set the user's session vars via CodeIgniter
			$this->set_session();

			return TRUE;
		}
		return FALSE;
	}

	function set_session()
	{
		//session->set_userdata is a CodeIgniter function that
		// stores data in CodeIgniter's session storage.  Some of the values are built in
		// to CodeIgniter, others are added.  See CodeIgniter's documentation for details.
		$this->session->set_userdata(array(

			'user_name' => $this->details->user_name,
			'isLoggedIn' => TRUE

			));
	}

	function get_all()
	{
		$this->db->from($this->table3);
		$query = $this->db->get();
		return $query->result();
	}

	function get_distinct_date($name_server,$start_date,$end_date)
	{
		$query = $this->db->query("SELECT DISTINCT time1  FROM logfile WHERE system_name = '".$name_server."' AND time1 >= '".$start_date."' AND time1 <= '".$end_date."' ");
		return $query->result();
	}

	function get_name_server()
	{
		$this->db->from($this->table2);
		$query = $this->db->get();
		return $query->result();
	}

	function get_data($name_server,$start_date,$end_date)
	{
		$query = $this->db->query("SELECT * FROM logfile WHERE system_name = '".$name_server."' AND time1 >= '".$start_date."' AND time1 <= '".$end_date."' ");
		return $query->result();
	}

	function count_begin($name_server,$time1,$loai_action)
	{
		$query = $this->db->query("SELECT COUNT(*) FROM logfile WHERE system_name = '".$name_server."' AND time1 = '".$time1."' AND loai_action = '".$loai_action."' AND begin1 = 'BEGIN' ");
		return $query->result();
	}

	function count_end($name_server,$time1,$loai_action)
	{
		$query = $this->db->query("SELECT COUNT(*) FROM logfile WHERE system_name = '".$name_server."' AND time1 = '".$time1."' AND loai_action = '".$loai_action."' AND begin1 = 'END' ");
		return $query->result();
	}



}
?>