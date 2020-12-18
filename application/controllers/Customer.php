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
                        

                          /// new customer

                          if($this->input->post('new_customer')){
                          $this->db->where('customer_name',$this->input->post('customer_name'));
                          $query = $this->db->get('customer');
                          $count_row = $query->num_rows();
                         if ($count_row > 0) { 

                                $data = array(
					"page_title" => "Users",
					"page_content" => "customer/index",
					 "error" => '<script type="text/javascript">
								Swal.fire({
								  position: "top-end",
								  icon: "warning",
								  title: "Warning",
								  text: "This record already exists !",
								  showConfirmButton: true,
								  timer: 1000,
								}).then(function() {
			  window.location = "'.base_url('customer/customer').'";
			  });
			  
								</script>',
                                                        );
                                                        
                         }
                         else{
                                 
                                    $newCustomer=array(
                                        "customer_name"=>$this->input->post('customer_name'),
                                        "customer_contact_no"=>$this->input->post('customer_contact_no'),
                                        "customer_email"=>$this->input->post('customer_email'),
                                        "customer_account_details"=>$this->input->post('customer_account_details'),
                                        "customer_balance"=>0,);
                                        $this->db->insert('customer', $newCustomer);
                                         

                                         $data = array(
                                                "page_title" => "Users",
                                                "page_content" => "customer/index",
                                                 "error" => '<script type="text/javascript">
                                                                        Swal.fire({
                                                                          position: "top-end",
                                                                          icon: "warning",
                                                                          title: "Warning",
                                                                          text: "This record already exists !",
                                                                          showConfirmButton: true,
                                                                          timer: 1000,
                                                                        }).then(function() {
                                  window.location = "'.base_url('customer/customer').'";
                                  });
                                  
                                                                        </script>',
                                                                );

                        }
                           } 


                           //cutomerupdate

                                if($this->input->post('cutomerupdate')){
                                        $customer_id=$this->input->post('customer_id');
                                        $newCustomer=array(                                               
                                                "customer_contact_no"=>$this->input->post('customer_contact_no'),
                                                "customer_email"=>$this->input->post('customer_email'),
                                                "customer_account_details"=>$this->input->post('customer_account_details'),
                                                );
                                                $this->db->where('customer_id',$customer_id);
                                                $this->db->update('customer', $newCustomer);

                                                $data = array(
                                                        "page_title" => "Users",
                                                        "page_content" => "customer/index",
                                                         "error" => '<script type="text/javascript">
                                                                                Swal.fire({
                                                                                  position: "top-end",
                                                                                  icon: "success",
                                                                                  title: "Success !",
                                                                                  text: "Customer Update Sucess ull !",
                                                                                  showConfirmButton: true,
                                                                                  timer: 1000,
                                                                                }).then(function() {
                                          window.location = "'.base_url('customer/customer').'";
                                          });
                                          
                                                                                </script>',
                                                                        );
                                        
                                }


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
