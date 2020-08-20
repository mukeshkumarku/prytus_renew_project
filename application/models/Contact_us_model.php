<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Contact_us_model extends CI_Model
{

	function Contact_us_data()
	{
		
			$data = array(
				'full_name' => $this->input->post('name'),
				'email'=> $this->input->post('email'),
				'phone_no'	=> $this->input->post('phone_no'),
				'message'=>$this->input->post('message')
			
		
          	 );	
			$this->db->insert('contact_us',$data);
		}
 

}