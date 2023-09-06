<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases_Model extends CI_Model {

	public function addCase($data){
		$this->db->insert('cases',$data);
	}

	public function listCase(){
		$this->db->select('cases.*, users.nome as reporter_name');
        $this->db->from('cases');
        $this->db->join('users', 'cases.id_reporter = users.id_users');
        $query = $this->db->get();
		
        return $query->result();
	}

	public function listCaseId($id){
		$this->db->select('cases.*, users.nome as reporter_name');
    	$this->db->from('cases');
    	$this->db->join('users', 'cases.id_reporter = users.id_users');
    	$this->db->where('cases.id_cases', $id);
    	$query = $this->db->get();
		
        return $query->row();
	}

	public function isCaseAssignedToUser($caseId, $userId) {
		$this->db->select('id');
		$this->db->from('atribuicoes');
		$this->db->where('id_cases', $caseId);
		$this->db->where('id_user', $userId);
		$query = $this->db->get();
	
		return ($query->num_rows() > 0); // Retorna true se existe uma atribuição, caso contrário, retorna false
	}

	public function AssignedForMe($caseId, $userId) {
		$dataAssociacao = [
			"id_cases" => $caseId,
			"id_user" => $userId
		];
		$dataCase = [
			"state" => "desenvolvimento"
		];
		$this->db->insert('atribuicoes',$dataAssociacao);

		$this->db->where('id_cases', $caseId);
    	$this->db->update('cases', $dataCase);
		
	}

	public function myVision($user_id){
		$this->db->select('cases.*');
        $this->db->from('cases');
        $this->db->join('atribuicoes', 'cases.id_cases = atribuicoes.id_cases');
        $this->db->where('atribuicoes.id_user', $user_id);
        $query = $this->db->get();
        
        return $query->result();
	}

	public function concluido($id){
        $dataAssociacao = [
			"state" => "desenvolvido"
		];
        $this->db->where('id_cases', $id);
        $this->db->update('cases', $dataAssociacao);
    }

	public function lineTime($string){
        $data = [
			"body" => $string
		];
		$this->db->insert('line_time',$data);
    }

}
