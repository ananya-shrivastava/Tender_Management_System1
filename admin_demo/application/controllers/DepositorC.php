<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepositorC extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('headside2');
		
	}

	public function depositor()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) ||  $is_logged_in == true)
		{
			$data['bank_list'] = $this->Admin_model->bank_list();
			$data['tender_list'] = $this->Admin_model->tender_list();
			$data['depositor_list'] = $this->Admin_model->depositor_list();
			$this->load->view('depositor',$data);
			
		}else{
			redirect('Login','refresh');
		}
		
	}
	
	public function getTeder_data()
	{
		$id = $this->input->post('tid');
		$query = $this->Admin_model->getTeder_data($id);
		echo json_encode($query);
	}
	
	public function add_depositor()
	{
		//print_r($_FILES);die;
		$valid=array(
			"dname"=>array(
			  "field"=>"dname",
			  "rules"=>"trim|required|min_length[5]|max_length[30]"
			  ),
			"contact"=>array(
			  "field"=>"contact",
			  "rules"=>"trim|required|regex_match[/^[0-9]{10}$/]"
			  ),
			"email"=>array(
			  "field"=>"email",
			  "rules"=>"trim|required|valid_email"
			  ),
			"tenderid"=>array(
			  "field"=>"tenderid",
			  "rules"=>"trim|required"
			  ),
			"work"=>array(
			  "field"=>"work",
			  "rules"=>"trim|required"
			  ),
			"amt"=>array(
			  "field"=>"amt",
			  "rules"=>"trim|required"
			  ),
			"sec"=>array(
			  "field"=>"sec",
			  "rules"=>"trim"
			  ),
			"secno"=>array(
			  "field"=>"secno",
			  "rules"=>"trim"
			  ),
			  "amount"=>array(
			  "field"=>"amount",
			  "rules"=>"trim"
			  ),
			  "security_date"=>array(
			  "field"=>"security_date",
			  "rules"=>"trim"
			  ),
			  "bank"=>array(
			  "field"=>"bank",
			  "rules"=>"trim"
			  ),
			   "branch"=>array(
			  "field"=>"branch",
			  "rules"=>"trim"
			  ),
			   "valid_date"=>array(
			  "field"=>"valid_date",
			  "rules"=>"trim"
			  )
		);
		 //print_r($_POST);
         // set the rules
         $this->form_validation->set_rules($valid); 

         // Override the message
         $this->form_validation->set_message('required','The %s field is required!');
    

        if($this->form_validation->run() == FALSE)  // didn't validate
         { 
		 //print_r($_POST);
          $this->depositor();
		  echo validation_errors();die();
         }
        else
        {
			
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['max_size'] = 1000000;
			$config['max_width']  = 102400;
			$config['max_height']  = 76800;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
				if($this->upload->do_upload('docfile')){
                   $file = $this->upload->data(); 
				   $new_file = $file['file_name'];
					
                }else{
                    $new_file = '';
					$error = $this->upload->display_errors(); 
					print_r($error);die;
                }
			//echo $new_file;die;
            if($query = $this->Admin_model->add_depositor($new_file))
            {
				
               redirect("Welcome/index");
            }
           else
            {
            	$this->depositor();
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