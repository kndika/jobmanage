<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jobs_model extends CI_Model {

    

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    

 public function crate($job_details) {
      $this->db->insert('job_details',$job_details); 
 }

 public function edit($user_id,$usrDetails){
    $this->db->where('user_id',$user_id);
    $this->db->update('users',$usrDetails);
 }

 
 
  public function login($userid, $pass) {      
      $user = $this->db->select("*")->where(['user_name' => $userid, 'user_password' => md5($pass)])->get('users')->row();
  if ($user) {
            $logindata = ['user_id'=>$user->user_id,
                         'user_name'=>$user->user_name,];
            $this->session->set_userdata($logindata);          
            redirect(base_url('jobs/dashbord?login=ok'));
        } else {
            redirect(base_url('?eroor=wrong'));
        }     
 }



// customer list
 
 public function customer_list() {     
    $this->db->from('customer');
    $query = $this->db->get();
    return $query->result();  
     }

// devloper list

 
public function developer_list() {     
    $this->db->from('developers');
    $query = $this->db->get();
    return $query->result();  
     }


     // joblist pending

public function pending_Job_List(){

    $this->db->from('job_details as job');
    $this->db->join('customer as cu', 'cu.customer_id = job.job_customer_id','LEFT');
    $query = $this->db->get();
    return $query->result();  


}




 
}