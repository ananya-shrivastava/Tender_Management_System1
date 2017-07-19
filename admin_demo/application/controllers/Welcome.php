<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
		$is_logged_in = $this->session->userdata('is_logged_in');
				if(isset($is_logged_in) ||  $is_logged_in == true)
					{
						 $data['countRow']=$this->Admin_model->countRow();
						$data['countRow1']=$this->Admin_model->countRow1();
						$data['countRow2']=$this->Admin_model->countRow2();
						$data['countRow4']=$this->Admin_model->countRow4();

						$data['security_list1']=$this->Admin_model->security_list1();
        
            $this->load->view('dashboard',$data);
					
					
					}
				else{
					redirect('Login','refresh');
					}
		
		
		
	
		//$this->load->view('login');
	}
	

	public function depositor()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) ||  $is_logged_in == true)
		{
			//$this->load->view('depositor');
			redirect("Welcome/depo");
		}else{
			redirect('Login','refresh');
		}
	
	}
	public function dashboard()
	{
		$this->load->view('home');
	}
	
	public function rep()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) ||  $is_logged_in == true)
		{
		$data['depositor_list'] = $this->Admin_model->depositor_list();
		$data['tender_list'] = $this->Admin_model->tender_list();
		$data['security_list'] = $this->Admin_model->security_list();
		$data['detail_list'] = $this->Admin_model->detail_list();

		
		$this->load->view('report',$data);
			
			
			}
			
			else{
			redirect('Login','refresh');
		}
	}
	
	
	
	
	public function report()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) ||  $is_logged_in == true)
		{
			$data['report_list'] = $this->Admin_model->report_list();
			$data['depositor_list'] = $this->Admin_model->depositor_list();
			$data['tender_list'] = $this->Admin_model->tender_list();
			$data['security_list'] = $this->Admin_model->security_list();

			$this->load->view('report',$data);
			
			
		}else{
			redirect('Login','refresh');
		}
	
}
	
	

}
