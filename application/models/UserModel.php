<?php

class UserModel extends CI_Model
{

public function getUser()
{
   $query =$this->db->get('users');
   return $query->result();
}

   public function loginUser($data)
   {
      $this->db->select('*');
      $this->db->where('email',$data['email']);
      $this->db->where('password',$data['password']);
      $this->db->from('users');
      $this->db->limit(1);
      $query = $this->db->get();
      if($query->num_rows() == 1){
         return $query->row();

      }
      else
      {
         return false;
      }
   }
   
 public function registerUser($data)
 {
    return $this->db->insert('users',$data);
 }
 public function editUser($Id)
    {
      $query=$this->db->get_where('users',['id'=>$Id]);
      return $query->row();
    }
    public function updatUser($data,$Id)
    {
      return $this->db->update('users',$data,['id' =>$Id]);
    }
    public function deleteUser($Id)
    {
      return $this->db->delete('users',['id'=>$Id]);
    }
}



?>