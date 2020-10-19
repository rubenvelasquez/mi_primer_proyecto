<?php

     class User extends CI_Model{
         public function __construct()
         {
             $this->load->database();
         }
         public function create($datos){
             if(!$this->db->insert('usuario', $datos)){
                 return false;
             }
             return true;
         }
     
     public function getUsers(){
         $sql = $this->db->get('usuario');
         return $sql->result();
     }
     //obtencion de datos del usuario usando el id
     public function getUsers1($id){
         $user = $this->db->get_where('usuario',array('usuario.id_usuario'=> $id),1);
         return $user->row_array();
     }
     
     public function updateUser($id, $data){
         $this->db->where('id_usuario',$id);
         $this->db->update('usuario',$data);
     }
    }