<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_controller extends CI_Controller 
{

	function __construct()
	  {
		parent::__construct();
		$this->load->library('session','email');
        $this->load->model('Contact_us_model','Con_model');
 
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

	public function Contact_view_controller()
	{
		$this->load->view('Contact_us_view');
		$this->load->view('Home_page_folder/Header_view');	
		$this->load->view('Home_page_folder/Home_footer');
	}

	// public function Contact_us_model_controller()
	// {
	// 	$this->Con_model->Contact_us_data();
	// 	$this->load->view('Contact_us_view');
	// 	$this->load->view('Home_page_folder/Header_view');	
	// 	$this->load->view('Home_page_folder/Home_footer');
	// }

	
public function send()
{
    $to =  $this->input->post('from');  // User email pass here
    $subject = 'Welcome To Prytus';

    $from = 'mukesh.ssvm@gmail.com';              // Pass here your mail id

	$emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" 
	style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;
	padding-left:3%"><img src="http://Prytus.com/assets/img/emailheader.jpg" width="570px" height="100px"
	 vspace=10 /></td></tr>';
    $emailContent .='<tr><td style="height:20px"></td></tr>';


	$emailContent .= $this->input->post('name');  //   Post message available here
	$emailContent .= $this->input->post('phone_no');  //   Post message available here
	$emailContent .= $this->input->post('message');  //   Post message available here




    $emailContent .='<tr><td style="height:20px"></td></tr>';
	$emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: 
	center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://Prytus.com/' 
	target='_blank' style='text-decoration:none;color: #60d2ff;'>www.Prytus.com</a></p></td></tr></table>
	</body></html>";
                

	
    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'smtp.secureserver.net';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'contact@prytus.com';    //Important
    $config['smtp_pass']    = 'contact@123';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

     
    $this->load->library('email',$config);

    // $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
    $this->email->send();

    $this->session->set_flashdata('msg',"Thanks for contacting us! we will be in touch with you shortly. ");
    $this->session->set_flashdata('msg_class','alert-success');
    return redirect('Main_controller/Contact_view_controller');
}

	   

	   
	   
}