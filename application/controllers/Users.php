<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Users_Model');
		checarLogin();
    }
	
	public function index()
	{
        $data = [];
        $title = "MINHA VISÃO";
        $data['title']=$title;
		$data['user'] = $this->session->userdata('user');

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
}
