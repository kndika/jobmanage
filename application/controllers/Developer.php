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



                // ad new new_developer

                if($this->input->post('new_developer')){
                        $this->form_validation->set_rules('userid', 'User Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean');
                        if ($this->form_validation->run() == FALSE) {

                                $data = array(
                                        "page_title" => "Users",
                                        "page_content" => "developer/index",
                                         "error" => '<script type="text/javascript">
                                                                Swal.fire({
                                                                  position: "top-end",
                                                                  icon: "warning",
                                                                  title: "Warning !",
                                                                  text: "Please check some field empty",
                                                                  showConfirmButton: true,
                                                                  timer: 1000,
                                                                }).then(function() {
                          window.location = "'.base_url('developer/developer').'";
                          });
                          
                                                                </script>',
                                                        );

                        }
                        else{

                        }

                        

                }


		                    
                        $this->load->view('template/template', $data);
         	}







}
