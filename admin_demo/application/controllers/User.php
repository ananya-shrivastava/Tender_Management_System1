<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	
	
	public function index()
	{
		
		$is_logged_in = $this->session->userdata('is_logged_in');
				if(isset($is_logged_in) ||  $is_logged_in == true)
					{
						$this->load->view('headside2');
					
					
					}
				else{
					redirect('Login','refresh');
					}
		
		
		
	
		//$this->load->view('login');
	}
	
	public function reguser()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) ||  $is_logged_in == true)
		{
			$data['user_list'] = $this->Admin_model->user_list();
			$this->load->view('registeruser',$data);
			
		}else{
			redirect('Login','refresh');
		}
		
	}
	
	public function add_user()
	{
		$valid=array(
			  "user_name"=>array(
			  "field"=>"user_name",
			  "rules"=>"trim|required|min_length[3]|max_length[20]"
			  ),
			"contact_no"=>array(
			  "field"=>"contact_no",
			  "rules"=>"trim|required|regex_match[/^[0-9]{10}$/]"
			  ),
			"email_id"=>array(
			  "field"=>"email_id",
			  "rules"=>"trim|required|valid_email"
			  ),
			  "password"=>array(
			  "field"=>"password",
			  "rules"=>"trim|required|min_length[6]|max_length[20]"
			  ),
			  "security"=>array(
			  "field"=>"security",
			  "rules"=>"trim|required"
			  ),
			  
			  
			  
		);
         // set the rules
         $this->form_validation->set_rules($valid); 

         // Override the message
         $this->form_validation->set_message('required','The %s field is required!');
    

        if($this->form_validation->run() == FALSE)  // didn't validate
         { 
          $this->reguser();
		  echo validation_errors();die();
         }
        else
        {   		   
            if($query = $this->Admin_model->add_user())
            {
                redirect("User/reguser");
            }
           else
            {
            	$this->reguser();
            }
			
        }
	   
	}
	
	public function edit_user($userid)
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
				if(isset($is_logged_in) ||  $is_logged_in == true)
					{
						$id = $this->uri->segment(3);
						$data['edit_user']=$this->Admin_model->userdetail($id);
		
						$this->load->view('upd',$data);		
					
					
					}
				else{
					redirect('Login','refresh');
					}
	}
	
	public function update_user($id)
	{
	$this->	Admin_model->update_user($id);
			redirect("User/reguser");
	
	}
}
