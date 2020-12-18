<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct() {
        parent::__construct();
       $this->load->database();
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->model('Customer_model');
        $this->load->model('User_model');
        // $this->load->model('Sms_model');
	}
	


	public function customer() {
		$data = array(
			"page_title" => "Customer",
			"page_content" => "customer/index",);
			$this->load->view('template/template', $data);
         	}


	// dash bord
public function dashbord(){

	     $data = array(
        "page_title" => "Dashbord",
		"page_content" => "dashbord/index",);
		$this->load->view('template/template', $data);
        }





}
