<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function allRegistration(){

		$query = $this->db->get("register");

		return $query->result();

	}

	public function process_add_register(){

		$name = $this->input->post("slxStudentName");
		$school = $this->input->post("slxSchoolName");

		$data = array(
			"member_id" => $name,
			"school_id" => $school
		);

		$query = $this->db->insert("register", $data);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

}