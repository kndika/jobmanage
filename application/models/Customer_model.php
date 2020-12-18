<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_model extends CI_Model {

    

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    

 public function crate($user) {
      $this->db->insert('user_login',$user); 
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



public function permisstion(){
// not loging rederaCT    
if(empty($this->session->user_id)){
 redirect(base_url());
 }

    $user = $this->db->select("*")->where(['user_id' => $this->session->user_id,])->get('users')->row();
  if ($user) {
            $logindata = [
                         'user_role'=>$user->user_role];
$this->session->set_userdata($logindata); 
           }





               }
 
 
 public function branch_list() {     
    $this->db->from('branch as br');
    $query = $this->db->get();
    return $query->result();  
     }


 
 public function user_list() {     
    $this->db->from('users as user');
   //  $this->db->join('branch as br', 'br.branch_id = user.user_branch_id','LEFT');
   //  $this->db->join('user_login as ur', 'ur.user_id = user.user_crate_by','LEFT');
    $query = $this->db->get();
    return $query->result();  
      }



public function oneuser($user_id) {
    $this->db->select('*');
    $this->db->from('user_login as ur');
    $this->db->where('ur.user_id',$user_id);
     $this->db->join('branch as br', 'br.branch_id = ur.user_branch_id','LEFT');
    $query = $this->db->get();
    $query = $query->result_array();
       if ($query) {
        return $query[0];
       } else {
        return array();
        }
    }


 
}