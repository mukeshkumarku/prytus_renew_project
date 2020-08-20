<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Request_quote_model extends CI_Model
{

	function Save_request_quote()
	{
		
			$data = array(
				'fname' => $this->input->post('Fname'),
				'email'=> $this->input->post('email'),
				'phone_no'	=> $this->input->post('phone'),
				'services'=>$this->input->post('services'),
				'description'=> $this->input->post('message'),
				'date'=> date('Y-m-d')
				
          	 );	

		if($this->db->insert('request_quote',$data))
		{
			$this->session->set_flashdata('success',"<b>Well Done!</b> Message send successfully");
			redirect('Main_controller/Request_view_controller','refresh');
		}
	}
 

}