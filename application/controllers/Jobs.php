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
        "page_title" => "New Job",
		"page_content" => "jobs/index",);


		if($this->input->post('newJob')){

			$this->form_validation->set_rules('job_customer_id', 'User Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('job_developers_id', 'Password', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('job_cost', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('job_name', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('job_targat_date', 'Langvages', 'trim|required|xss_clean');
			$this->form_validation->set_rules('job_requament', 'Status', 'trim|required|xss_clean');		
		 
			if ($this->form_validation->run() == FALSE) {

				$data = array(
					"page_title" => "New Job",
					"page_content" => "jobs/index",
					 "error" => '<script type="text/javascript">
											Swal.fire({
											  position: "top-end",
											  icon: "warning",
											  title: "warning !",
											  text: "  Cannot Save Plese Full Fill",
											  showConfirmButton: true,
											  timer: 1000,
											}).then(function() {
	  window.location = "'.base_url('jobs/new_job').'";
	  }); </script>',);

			}
			else{
			$job_details=array(
				"job_customer_id"=>$this->input->post('job_customer_id'),
				"job_developers_id"=>$this->input->post('job_developers_id'),
				"job_cost"=>$this->input->post('job_cost'),
				"job_name"=>$this->input->post('job_name'),
				"job_start_date"=>date('Y-m-d'),
				"job_targat_date"=>$this->input->post('job_targat_date'),
				"job_requament"=>$this->input->post('job_requament'),
				"job_requament_attachment"=>'',
				"job_add_date"=>date('Y-m-d'),
				"job_add_user_id"=>$this->session->user_id,
				"job_status"=>1,
			);


			//print_r($job_details);
			$this->Jobs_model->crate($job_details);


			$data = array(
				"page_title" => "Job List",
				"page_content" => "jobs/joblist",
				 "error" => '<script type="text/javascript">
										Swal.fire({
										  position: "top-end",
										  icon: "success",
										  title: "Success !",
										  text: "Save Success Full",
										  showConfirmButton: true,
										  timer: 1000,
										}).then(function() {
  window.location = "'.base_url('jobs/joblist').'";
  }); </script>',);


		}
		}



		$this->load->view('template/template', $data);

}




public function joblist(){
	$data = array(
        "page_title" => "Job List",
		"page_content" => "jobs/joblist",);
	$this->load->view('template/template', $data);


}





}
