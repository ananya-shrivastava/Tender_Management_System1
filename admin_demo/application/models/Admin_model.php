<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function validate_user()
	{
	     $this->db->where('username', $this->input->post('name'));         
	     $this->db->where('password', $this->input->post('password'));
	     $query=$this->db->get('login');

	     if($query->num_rows() == 1)
	     {
			 
		    $result = $query->result();
			//print_r($result);
	        return $result;
	     }
		 
		 /*else
		 {
			 echo "wrong";
		 }*/
 	}

	public function user_details($user)
	{
		 $sql=$this->db->where('userid',$user);
		 $sql=$this->db->get('login');
		 $result= $sql->result();
	
     	 return $result;
	}
	
	
	/****************************************** user start**************************************/
	public function user_list()
	{
		$sql = $this->db->get('login');
		$result =	 $sql->result();
		return $result;
	}
	
	public function add_user()
	{
		$add_user_data = array(
			'username' => $this->input->post('user_name'),
			'contact_no' => $this->input->post('contact_no'),
			'email' => $this->input->post('email_id'),
			'password' => $this->input->post('password'),
			'type' => $this->input->post('security')
		);
		$insert = $this->db->insert('login',$add_user_data);
		return $insert;
	}
	
	
	public function userdetail($id)
	{
		$sql = $this->db->where('userid',$id);
		$sql = $this->db->get('login');
		$result = $sql->result();
		return $result;
		
	}
	
		public function update_user($id)
	{
		$update_user_data = array(
				'username' => $this->input->post('user_name'),
			'contact_no' => $this->input->post('contact_no'),
			'email' => $this->input->post('email_id'),
			'password' => $this->input->post('password'),
			'type' => $this->input->post('security')
		);
	
		$this->db->where('userid',$id);
		$update = $this->db->update('login',$update_user_data);
		return $update;
	}
	
	/*************************************** user end***********************************************/
	
	
	/******************** bank start************************/
	
	public function bank_list()
	{
		$sql = $this->db->get('bank');
		$result = $sql->result();
		return $result;
	}
	
	
	
	public function add_bank()
	{
		$add_bank_data = array(
			
			'bank_name' => $this->input->post('bank_name'),
			'bank_code' => $this->input->post('bank_code')
		);
		$insert = $this->db->insert('bank',$add_bank_data);
		return $insert;
	}
	
	public function bankdetails($bank_id)
	{
		$sql = $this->db->where('bank_id',$bank_id);
		$sql = $this->db->get('bank');
		$result = $sql->result();
		return $result;
		
	}
	public function update_bank($bank_id)
	{
		$update_bank_data = array(
				'bank_name' => $this->input->post('bank_name'),
			'bank_code' => $this->input->post('bank_code')
			
		);
	
		$this->db->where('bank_id',$bank_id);
		$update = $this->db->update('bank',$update_bank_data);
		return $update;
	}
	
	
	/******************** bank end************************/
	
	
	
	/********Tender start *******************/
	public function tender_list()
	{
		$sql = $this->db->get('tender');
		$result = $sql->result();
		return $result;
	}
	
	public function add_tender()
	{
		$add_tender_data = array(
			'tender_id' => $this->input->post('tender_id'),
			'work' => $this->input->post('tender_name'),
			'amount' => $this->input->post('tender_amount')
		);
		$insert = $this->db->insert('tender',$add_tender_data);
		return $insert;
	}
	
	public function getTeder_data($id)
	{
		$sql = $this->db->query("select work,amount from tender where id='$id'");
		$result = $sql->result();
		
		return $result;	
	}
	
	public function tenderdetails($id)
	{
		$sql = $this->db->where('id',$id);
		$sql = $this->db->get('tender');
		$result = $sql->result();
		return $result;	
	}
	
	public function update_tender($id)
	{
		$update_tender_data = array(
									'tender_id' => $this->input->post('tender_id'),
									'work' => $this->input->post('tender_name'),
									'amount' => $this->input->post('tender_amount')
									);
	
		$this->db->where('id',$id);
		$update = $this->db->update('tender',$update_tender_data);
		return $update;
	}
	
	
	/*********************** tender end**************************/
	
	
	/*********************** depositor start**************************/
	
	
	public function depositor_list()
	{
		$sql = $this->db->get('depositor');
		$result = $sql->result();
		return $result;
	}
	public function detail_list()
	{
		$sql = $this->db->query('select d.name, d.contact , s.S_date, t.tender_id, t.amount from depositor d,security s,tender t where d.depo_id=s.depo_id and t.id=d.id ');
		$result = $sql->result();
		return $result;
	}
	
	public function security_list()
	{
		$sql = $this->db->get('security');
		$result = $sql->result();
		return $result;
	}
	
  public function add_depositor($file)
	{	
	
	
		$add_depo_data = array(
			'name' => $this->input->post('dname'),
			'contact' => $this->input->post('contact'),
			'email' => $this->input->post('email'),
			'id' => $this->input->post('tenderid'),
			'description' => $this->input->post('description'),						
			'file' => $file
		);
		$this->db->insert('depositor',$add_depo_data);
		$getid=$this->db->insert_id();
		//echo $getid; die;
		
		$sec = $this->input->post('sec');
		$security_date = $this->input->post('security_date');
		$secno = $this->input->post('secno');
		$amount = $this->input->post('amount');
		$bank = $this->input->post('bank');
		$branch = $this->input->post('branch');
		$valid_date = $this->input->post('valid_date');
		
		$count=0;
		for($i=0;$i<count($sec);$i++){
			$add_sec_data[] = array(
				'S_type' => $sec[$i],
				'S_date' => $security_date[$i],
				'S_no' => $secno[$i],
				'Amount' => $amount[$i],
				'Bankname' => $bank[$i],
				'branch' => $branch[$i],
				'Validitydate' => $valid_date[$i],
				'depo_id'=>$getid
		    );	
			
			$count+=$amount[$i];
		}
		$am = $this->input->post('amt');
		if($count==$am)
		{
			$this->db->insert_batch('security',$add_sec_data); 
		}
		else
		{
			$msg = "enter valid amount";
				echo "<script type = 'text/javascript'> alert('$msg');</script>";
		}
	
		return true;
		
	}
	
	
		public function depo_list($id)
	{
	
		$this->db->select('amount');
	$this->db->from('security');
			$this->db->where('tender_id',$id);
			$sql = $this->db->get();
		$result = $sql->result();
		return $result;
	}
	
	
	public function countRow()
    {
        $this->db->select('*');
        $query=$this->db->get('tender');
        $result=$query->num_rows();
        return $result;
    }
        public function countRow1()
    {
        $this->db->select('*');
        $query=$this->db->get('login');
        $result=$query->num_rows();
        return $result;
    }
        public function countRow2()
    {
        $this->db->select('*');
        $query=$this->db->get('bank');
        $result=$query->num_rows();
        return $result;
    } 
	
	
	//report
	
	public	function report_list() {
		
	$s_item1= $this->input->post('d_name');	
	$s_item2= $this->input->post('s_type');	
	$s_item3= $this->input->post('t_id');
	$s_item4= $this->input->post('s_date');

	
       if($s_item1!='')
	   {		 
	
			$query = $this->db->query("select * from view1 where depo_id='$s_item1' "); 
		}
      else if($s_item2!='')
	   {		 
					$query = $this->db->query("select * from view1 where S_type='$s_item2' "); 

		
	   }
	    else if($s_item3!='')
	   {		 
					$query = $this->db->query("select * from view1 where tender_id='$s_item3' "); 

	   }
	   
	   
	     else if($s_item4!='')
			{		 
								$query = $this->db->query("select * from view1 where S_date='$s_item4' "); 

		   }

	   else
	   {
		   $ms="enter any field";
			echo "<script type='text/javascript'>alert('$ms');</script> ";
	   }
	 
       $res=$query->result();
	   return $res;
		}
		
		
public function countRow4()
{
$this->db->select('*');
$query=$this->db->get('depositor');
$result=$query->num_rows();
return $result;
} 

public function countdays()
{
$this->db->select('Validitydate'); 
$this->db->from('security'); 
$sql= $this->db->get();
$result=$sql->result_array();
//$sql=$this->db->query('Select * from security where Datetime(Validitydate)->diff(Datetime("now")');
return $result;
/*$this->db->select('*');
$query=$this->db->get('security');
$res=$query->num_rows();*/

/*$datetime1 = new Datetime($result[0]['Validitydate']);
$datetime2 = new Datetime("now");
$interval = $datetime2->diff($datetime1);
return $interval->format('%d days');*/

//$result = $date->diff($now)->format("%d days");




// echo $date->diff($now)->format("%d days");
} 
public function security_list1()
{

/*$this->db->select('*');
$this->db->from('security');*/
$sql1 = $this->db->get('security');

//print_r($sql1->result());
$sql=$this->db->query('Select S_no,name,security.depo_id,Validitydate,DATEDIFF(Validitydate,curdate()) as date1,S_type,Amount from security,depositor where security.depo_id=depositor.depo_id and DATEDIFF(Validitydate,curdate())<=30');
//$sql=$this->db->query('Select DATEDIFF(Validitydate,curdate()) as today from security');
//print_r($sql->result());

//$sql = $this->db->get('security');
$result = $sql->result();

return $result;
}
		
		
	
	
}
