<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Users_Model");
		$this->load->model("Cases_Model");
	} 

	public function index(){

	}

	public function case($id){
		$data = [];
        $title = "REPORTAR CASO";
		$data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		$data['users'] = $this->Users_Model->listAllUsers();
		$data['case'] = $this->Cases_Model->listCaseId($id);
		$isAssigned = $this->Cases_Model->isCaseAssignedToUser($id, $data['user']->id_users);
		$data['caseAssigned'] = $isAssigned;

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('case',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function report_case(){
		$data = [];
        $title = "REPORTAR CASO";
		$data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		$data['users'] = $this->Users_Model->listAllUsers();

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('cases',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function report_case_form(){
		$reporter = $_POST['relator'];
		$priority = $_POST['priority'];
		$state = "aguardando";
		$resumeCase = $_POST['resume_case'];
		$descricao = $_POST['descricao'];
		$data = [
			"id_reporter" => $reporter,
			"priority" => $priority,
			"state" => $state,
			"resume_case" => $resumeCase,
			"descricao" => $descricao
		];

		$this->Cases_Model->addCase($data);

		$this->session->set_flashdata('case_success', 'Caso Registrado com SUCESSO');

		redirect('Cases/report_case');
	}

	public function listCase(){
		$data = [];
        $title = "REPORTAR CASO";
		$data['title']=$title;
		$data['user'] = $this->session->userdata('user');
		$data['cases'] = $this->Cases_Model->listCase(); 

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar',$data);
		$this->load->view('listCases',$data);
		$this->load->view('layouts/footer',$data);		
	}

	public function reportForMe($idCase,$idUser){
		$this->Cases_Model->AssignedForMe($idCase,$idUser);
		redirect('Cases/listCase');
	}
}
