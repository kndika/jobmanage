<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {

	public function __construct() {
        parent::__construct();
       $this->load->database();
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->model('Developer_model');
        $this->load->model('User_model');
        // $this->load->model('Sms_model');
	}
	


	public function developer() {
		$data = array(
			"page_title" => "Developer's",
                        "page_content" => "developer/index",);                      
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
