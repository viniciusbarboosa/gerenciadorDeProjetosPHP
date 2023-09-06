<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Users_Model');
        $this->load->model('Cases_Model');
		checarLogin();
    }
	
	public function index()
	{
        $data = [];
        $title = "Meus Casos";
        $data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		//print_r($data['user']);
		$data['myCases'] = $this->Cases_Model->myVision($data['user']->id_users);
		//print_r($data['myCases']);
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('myVision',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function adminUsers(){
		$data = [];
        $title = "ADMIN USUÁRIOS";
		$data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		$data['users'] = $this->Users_Model->listAllUsers();

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('adminUsers',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function addUser(){
		$data = [];
        $title = "ADMIN USUÁRIOS";
		$data['title']=$title;
		$data['user'] = $this->session->userdata('user');

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('addUser',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function addUserDB(){
		$data = [];
        $title = "ADMIN USUÁRIOS";
		$data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$password = password_hash($_POST['senha'],PASSWORD_BCRYPT);
		$employee = TRUE;
		$tipo_user = $_POST['tipoUsuario'];
		$mandarProBanco = [
			"nome" => $nome,
			"email" => $email,
			"password" => $password,
			"employee" => $employee,
			"tipo_user" => $tipo_user
		];
		
		$this->Users_Model->addUser($mandarProBanco);

		$this->session->set_flashdata('add_sucess', 'Usário Adicionado com SUCESSO');
		redirect('Users/adminUsers');
	}


	public function editUser($id)
	{
        $data = [];
        $title = "Meus Casos";
        $data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		
		
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('editUser',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function editUserForm(){
        $idUser = $_POST['id_user'];
        $email = $_POST['email'];
        $password = $_POST['senha'];
		$password = password_hash($password,PASSWORD_BCRYPT);

		$this->session->set_flashdata('edit_users_success', 'USUARIO editado com sucesso');

		$this->Users_Model->editUsers($email,$password,$idUser);
		redirect('Users');
	}
}
