<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenderC extends CI_Controller {

public function tender()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) ||  $is_logged_in == true)
		{
			$data['tender_list'] = $this->Admin_model->tender_list();
			$this->load->view('tenderform',$data);
			
			
		}else{
			redirect('Login','refresh');
		}
	
    }
	
public function add_tender()
	{
		$valid=array(
			  "tender_id"=>array(
			  "field"=>"tender_id",
			  "rules"=>"trim|required"
			  ),
			"tender_name"=>array(
			  "field"=>"tender_name",
			  "rules"=>"trim|required|min_length[5]|max_length[30]"
			  ),
			"tender_amount"=>array(
			  "field"=>"tender_amount",
			  "rules"=>"trim|required"
			  )
		);
         // set the rules
         $this->form_validation->set_rules($valid); 

         // Override the message
         $this->form_validation->set_message('required','The %s field is required!');
    

        if($this->form_validation->run() == FALSE)  // didn't validate
         { 
          $this->tender();
		  echo validation_errors();die();
         }
        else
        {   		   
            if($query = $this->Admin_model->add_tender())
            {
                redirect("TenderC/tender");
            }
           else
            {
            	$this->tender();
            }
			
        }    
	   
	}
	
	
	public function edit_tender($id)
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
				if(isset($is_logged_in) ||  $is_logged_in == true)
					{
						$id = $this->uri->segment(3);
						$data['edit_tender']=$this->Admin_model->tenderdetails($id);
		
						$this->load->view('tend',$data);		
					
					
					}
				else{
					redirect('Login','refresh');
					}
	}
	
	public function update_tender($id)
	{
	$this->	Admin_model->update_tender($id);
			redirect("TenderC/tender");
	
	}
	
	
	
	
}