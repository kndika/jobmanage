<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Developer_model extends CI_Model {

    

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    

 public function crate( $devloper) {
      $this->db->insert('developers', $devloper); 
 }

 public function edit($developers_id, $devloper){
    $this->db->where('developers_id',$developers_id);
    $this->db->update('developers', $devloper);
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




 
 public function developer_list() {     
    $this->db->from('developers');
    $query = $this->db->get();
    return $query->result();  
     }



 
}