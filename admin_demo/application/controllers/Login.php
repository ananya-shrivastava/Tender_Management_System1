<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function index(){
	  
    $data=array();
    if($this->session->userdata('is_logged_in')==true){
         //redirect(base_url('welcome'));
    }

    if($this->input->post()){
		
      $this->form_validation->set_rules('name','User Name', 'required|trim');
      $this->form_validation->set_rules('password','User Password', 'required|trim');
	  
        if($this->form_validation->run() == true){
          $query = $this->Admin_model->validate_user(); //validate user
		  //print_r($query);die;
          if($query){
                $data=array(
                  'user_id' => $query[0]->userid,
                  'usertype' => $query[0]->type,
				  'name' => $query[0]->username,
                  'is_logged_in' => true
                );
                
              $this->session->set_userdata('is_logged_in',$data);
              redirect(base_url('welcome'));
          }
		  
		  else{
			  //echo "hiiiiiii";
			 // redirect(base_url('login'));
             // $data['message'] = 'Login credential incorrect! Try again';
			  //$this->error['warning']='Login credential incorrect! Try again';
			  //return !$this->error;
			// $message = 'Login credential incorrect! Try again';
			  
			  echo "<script type = 'text/javascript'>alert('$message');</script>";
			  //redirect(base_url('welcome/tender'));
			  //print_r($data['message']);
			  
          }
        }
    }

    $this->load->view('login');
  }
}?>
