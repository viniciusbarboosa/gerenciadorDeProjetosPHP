<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Users_Model");
	} 

	public function index(){

	}

	public function report_case(){
		$data = [];
        $title = "ADMIN USUÁRIOS";
		$data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		$data['users'] = $this->Users_Model->listAllUsers();

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('cases',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function report_case_form(){
		
	}
}
