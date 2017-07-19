<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function index()
	{
       $user_data = $this->session->all_userdata();
	   $this->session->unset_userdata($user_data);
       $this->session->sess_destroy();
	   
       redirect(base_url(), 'refresh');
	}

	
}
?>