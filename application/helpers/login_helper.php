<?php 


function check_access()
{
	$ci =& get_instance();
	if (!isset($_SESSION)) {
		session_start();
	}
	if (!$ci->session->userdata('isLoggedIn')) {
		redirect(base_url() . 'login');
	}

	return;
}

 ?>