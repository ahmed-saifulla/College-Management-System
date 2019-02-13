<?php
class Queries extends CI_Model{
    
    public function getRoles(){
        $roles = $this->db->get('tbl_roles');
        if($roles->num_rows() > 0){
            return $roles->result();
        }
    }

    public function insertAdmin($data){
        return $this->db->insert('tbl_users',$data);    
    }

    public function loginAdmin($data){

        $email = $data['email'];
        $password = sha1($data['password']);
        $user = $this->db->get_where('tbl_users', array('email' => $email ,'password' => $password ));

        if($user->num_rows() > 0){
            return $user->result();
        }
    }

    
}



?>