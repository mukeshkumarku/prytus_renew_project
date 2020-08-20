<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_controller extends CI_Controller 
{

	function __construct()
	  {
		parent::__construct();
		$this->load->library('session');
        $this->load->model('Contact_us_model','Con_model');
        $this->load->model('Request_quote_model','Request_quote_model');
 
    }
	public function index()
	{ 
		$this->load->view('Home_page_folder/Header_view');
		$this->load->view('Home_page_folder/Home_body_view');
		$this->load->view('Home_page_folder/Home_footer');
	}

	public function About_us_controller()
	{
		$this->load->view('About_us_view');
		$this->load->view('Home_page_folder/Header_view');		
		$this->load->view('Home_page_folder/Home_footer');
	}

	public function Readmore_controller()
	{
		$this->load->view('Readmore_view');
		$this->load->view('Home_page_folder/Header_view');		
		$this->load->view('Home_page_folder/Home_footer');
	}

	public function Services_view_controller()
	{
		$this->load->view('Services_view');
		$this->load->view('Home_page_folder/Header_view');	
		$this->load->view('Home_page_folder/Home_footer');
	}

	public function Team_view_controller()
	{
		$this->load->view('Team_view');
		$this->load->view('Home_page_folder/Header_view');	
		$this->load->view('Home_page_folder/Home_footer');
	}

	// public function Contact_view_controller()
	// {
	// 	$this->load->view('Contact_us_view');
	// 	$this->load->view('Home_page_folder/Header_view');	
	// 	$this->load->view('Home_page_folder/Home_footer');
	// }

	// public function Contact_us_model_controller()
	// {
	// 	$this->Con_model->Contact_us_data();
	// 	$this->load->view('Contact_us_view');
	// 	$this->load->view('Home_page_folder/Header_view');	
	// 	$this->load->view('Home_page_folder/Home_footer');
	// }
	public function Request_view_controller()
	{
		$this->load->view('Request_view');
		$this->load->view('Home_page_folder/Header_view');	
		$this->load->view('Home_page_folder/Home_footer');
	}

	public function Request_view_model_controller()
	{
		
		$this->Request_quote_model->Save_request_quote();

		//$this->load->view('Request_view');
		//$this->load->view('Home_page_folder/Header_view');	
		//$this->load->view('Home_page_folder/Home_footer');
	}

	 
		public function send()
		{
				
		}

}