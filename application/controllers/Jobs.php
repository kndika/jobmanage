<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct() {
        parent::__construct();
       $this->load->database();
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->model('Jobs_model');
        $this->load->model('User_model');
        // $this->load->model('Sms_model');
	}
	


	public function index()
	{
         if($this->input->post('login')){		 
		
			// user check
			$this->form_validation->set_rules('userid', 'User Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean');
			if ($this->form_validation->run() == FALSE) {
				// redirec to 
				$this->load->view('uses/index?eroor=wrong');
			 }
			 else{
			  $userid= $this->input->post('userid');
			  $pass=$this->input->post('pass');
			$this->User_model->login($userid, $pass) ;
			 }
			
		 }

		$this->load->view('users/index');
	}


	// dash bord
public function dashbord(){

	     $data = array(
        "page_title" => "Dashbord",
		"page_content" => "dashbord/index",);
		$this->load->view('template/template', $data);
		}
		


// new jobs
public function new_job(){
	$data = array(
        "page_title" => "Dashbord",
		"page_content" => "jobs/index",);
		$this->load->view('template/template', $data);

}





}
