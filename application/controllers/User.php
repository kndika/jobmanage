<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
       $this->load->database();
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->library('email');
        //$this->load->model('Branches_model');
        $this->load->model('User_model');
        // $this->load->model('Sms_model');
	}
	



	// dash bord
public function users(){

	     $data = array(
        "page_title" => "Users",
		"page_content" => "users/userList",);


		 // psaaword reset
      if($this->input->post('resetpass')){
		  $user_id=$this->input->post('user_id');
		  $usrDetails=array("user_password"=>md5($this->input->post('pass')),);
		  $this->User_model->edit($user_id,$usrDetails);

		$data = array(
            "page_title" => "Users",
            "page_content" => "users/userList",
             "error" => '<script type="text/javascript">
                        Swal.fire({
                          position: "top-end",
                          icon: "success",
                          title: "Done",
                          text: "Password Reset Sucess full !",
                          showConfirmButton: true,
                          timer: 1000,
                        }).then(function() {
    window.location = "'.base_url('user/users').'";
});

                        </script>',
                    );
	  }
	  // password reset end 


// role updat

if($this->input->post('roleupdate')){
	$user_id=$this->input->post('user_id');
	$usrDetails=array("user_role"=>$this->input->post('user_role'),);
	$this->User_model->edit($user_id,$usrDetails);

  $data = array(
	  "page_title" => "Users",
	  "page_content" => "users/userList",
	   "error" => '<script type="text/javascript">
				  Swal.fire({
					position: "top-end",
					icon: "success",
					title: "Done",
					text: "User update Sucess full !",
					showConfirmButton: true,
					timer: 1000,
				  }).then(function() {
window.location = "'.base_url('user/users').'";
});

				  </script>',
			  );


}

// new user 
if($this->input->post('newuser')){

	$this->db->where('user_name', $this->input->post('user_name'));
    $query = $this->db->get('users');
    $count_row = $query->num_rows();

    if ($count_row > 0) { 

		// duplicate
		$data = array(
			"page_title" => "Users",
			"page_content" => "users/userList",
			 "error" => '<script type="text/javascript">
						Swal.fire({
						  position: "top-end",
						  icon: "warning",
						  title: "Worning",
						  text: "This User Already excites . !",
						  showConfirmButton: true,
						  timer: 1000,
						}).then(function() {
	  window.location = "'.base_url('user/users').'";
	  });
	  
						</script>',
					);

	
			}
			else{
                     //// new user crate
				$user=array(
					"user_name"=>$this->input->post('user_name'),
					"user_password"=>md5($this->input->post('user_password')),
					"user_role"=>$this->input->post('user_role'),
				);
			
				$this->User_model-> crate($user);
			
				$data = array(
					"page_title" => "Users",
					"page_content" => "users/userList",
					 "error" => '<script type="text/javascript">
								Swal.fire({
								  position: "top-end",
								  icon: "success",
								  title: "Done",
								  text: "New User Crate Sucess full !",
								  showConfirmButton: true,
								  timer: 1000,
								}).then(function() {
			  window.location = "'.base_url('user/users').'";
			  });
			  
								</script>',
							);
			}
}


		$this->load->view('template/template', $data);
        }








}
