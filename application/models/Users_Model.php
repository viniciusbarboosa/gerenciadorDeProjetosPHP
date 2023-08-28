<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {
	
    public function verificarExistenciaUsers(){
		$query = $this->db->get('users');
        return $query->num_rows() > 0;
	}

    public function addUser($data){
		$this->db->insert('users', $data);
	}

    public function verificarUser($name,$password){
        $query = $this->db->get_where('users', array('nome' => $name));
        $user = $query->row();

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }

        return NULL;
    }

    public function listAllUsers(){
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get('users');
        return $query->result();;
    }
}
