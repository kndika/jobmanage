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
                        $this->form_validation->set_rules('developers_name', 'User Name', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_contact', 'Password', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_email', 'Password', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_bankDetails', 'Password', 'trim|required|xss_clean');
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
                          }); </script>',);

                        }
                        else{

                                $this->db->where('developers_name',$this->input->post('developers_name'));
                                $this->db->where('developers_contact',$this->input->post('developers_contact'));
                                $query = $this->db->get('developers');
                                $count_row = $query->num_rows();
                               if ($count_row > 0) { 

                                $data = array(
                                        "page_title" => "Users",
                                        "page_content" => "developer/index",
                                         "error" => '<script type="text/javascript">
                                                                Swal.fire({
                                                                  position: "top-end",
                                                                  icon: "warning",
                                                                  title: "Warning !",
                                                                  text: "Duplicate entry please check",
                                                                  showConfirmButton: true,
                                                                  timer: 1000,
                                                                }).then(function() {
                          window.location = "'.base_url('developer/developer').'";
                          }); </script>',);


                               }
                                   else{


                                $devloper=array(
                                        "developers_name"=>$this->input->post('developers_name'),
                                        "developers_contact"=>$this->input->post('developers_contact'),
                                        "developers_email"=>$this->input->post('developers_email'),
                                        "developers_bankDetails"=>$this->input->post('developers_bankDetails'),
                                        "developers_langvages"=>$this->input->post('developers_langvages'),
                                        "developers_status"=>$this->input->post('developers_status'),

                                        
                                );
                                $this->Developer_model->crate( $devloper);

                                $data = array(
                                        "page_title" => "Users",
                                        "page_content" => "developer/index",
                                         "error" => '<script type="text/javascript">
                                                                Swal.fire({
                                                                  position: "top-end",
                                                                  icon: "success",
                                                                  title: "Success!",
                                                                  text: "'.$this->input->post('developers_name').'  Add Success Full",
                                                                  showConfirmButton: true,
                                                                  timer: 1000,
                                                                }).then(function() {
                          window.location = "'.base_url('developer/developer').'";
                          }); </script>',);
                        }  
                                }                                       

                }

                //devolper update

                if($this->input->post('developerupdate')){


                        $this->form_validation->set_rules('developers_name', 'User Name', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_contact', 'Password', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_email', 'Password', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_bankDetails', 'Password', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_langvages', 'Langvages', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('developers_status', 'Status', 'trim|required|xss_clean');
                        
                     
                        if ($this->form_validation->run() == FALSE) {

                                $data = array(
                                        "page_title" => "Users",
                                        "page_content" => "developer/index",
                                         "error" => '<script type="text/javascript">
                                                                Swal.fire({
                                                                  position: "top-end",
                                                                  icon: "warning",
                                                                  title: "warning !",
                                                                  text: "'.$this->input->post('developers_name').'  Cannot Update",
                                                                  showConfirmButton: true,
                                                                  timer: 1000,
                                                                }).then(function() {
                          window.location = "'.base_url('developer/developer').'";
                          }); </script>',);


                        }
                        else{
                              $developers_id=$this->input->post('developers_id');
                                
                                $devloper=array(
                                        "developers_name"=>$this->input->post('developers_name'),
                                        "developers_contact"=>$this->input->post('developers_contact'),
                                        "developers_email"=>$this->input->post('developers_email'),
                                        "developers_bankDetails"=>$this->input->post('developers_bankDetails'),
                                        "developers_langvages"=>$this->input->post('developers_langvages'),
                                        "developers_status"=>$this->input->post('developers_status'),                                        
                                );

                                $this->Developer_model->edit($developers_id, $devloper);


                                $data = array(
                                        "page_title" => "Users",
                                        "page_content" => "developer/index",
                                         "error" => '<script type="text/javascript">
                                                                Swal.fire({
                                                                  position: "top-end",
                                                                  icon: "success",
                                                                  title: "Success !",
                                                                  text: "'.$this->input->post('developers_name').'  Update Success Full",
                                                                  showConfirmButton: true,
                                                                  timer: 1000,
                                                                }).then(function() {
                          window.location = "'.base_url('developer/developer').'";
                          }); </script>',);


                        }

                }


		                    
                        $this->load->view('template/template', $data);
         	}







}
