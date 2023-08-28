<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Users_Model');
    }

	public function index(){
		if (!$this->Users_Model->verificarExistenciaUsers()) {
			$password_hash = password_hash(SENHA_ADMIN_USER,PASSWORD_BCRYPT);
				$mandarProBanco = [
					"nome" => ADMIN_USER,
					"email" => EMAIL_ADMIN_USER,
					"employee" => true,
					"password" => $password_hash,
					"tipo_user" => "admin"
				];
			$this->Users_Model->addUser($mandarProBanco);
        }

		$this->load->view('login');
	}

	public function logar(){
		$name = $_POST['inputName'];
		$password = $_POST['inputPassword'];


		$user = $this->Users_Model->verificarUser($name,$password);

		if ($user) {

			$this->session->set_userdata('user',$user);
			redirect('Users');
		} else {
			$this->session->set_flashdata('login_error', 'Credenciais inválidas. Tente novamente.');
			redirect('login');
		}
	}

	public function deslogar(){
		$this->session->sess_destroy();
		redirect('login');
	}

}