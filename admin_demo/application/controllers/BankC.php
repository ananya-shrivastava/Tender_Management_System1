


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BankC extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('headside2');
		
	}

	public function bank()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) ||  $is_logged_in == true)
		{
			$data['bank_list'] = $this->Admin_model->bank_list();
			$this->load->view('bankform',$data);
		}else{
			redirect('Login','refresh');
		}
		
	}
	
	
	public function add_bank()
	{
		$valid=array(
			"bank_name"=>array(
			  "field"=>"bank_name",
			  "rules"=>"trim|required|min_length[5]|max_length[15]"
			  ),
			"bank_code"=>array(
			  "field"=>"bank_code",
			  "rules"=>"trim|required|min_length[4]|max_length[15]"
			  )
		);
         // set the rules
         $this->form_validation->set_rules($valid); 

         // Override the message
         $this->form_validation->set_message('required','The %s field is required!');
    

        if($this->form_validation->run() == FALSE)  // didn't validate
         { 
          $this->bank();
		  echo validation_errors();die();
         }
        else
        {   		   
            if($query = $this->Admin_model->add_bank())
            {
                redirect("BankC/bank");
            }
           else
            {
            	$this->bank();
            }
			
        }
	   
	}
	
	
	public function edit_bank($bank_id)
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
				if(isset($is_logged_in) ||  $is_logged_in == true)
					{
						$id = $this->uri->segment(3);
						$data['edit_bank']=$this->Admin_model->bankdetails($bank_id);
		
						$this->load->view('bankf',$data);		
					
					
					}
				else{
					redirect('Login','refresh');
					}
	}
	
	public function update_bank($bank_id)
	{
	$this->	Admin_model->update_bank($bank_id);
			redirect("BankC/bank");
	
	}
	
	
	
	
	}