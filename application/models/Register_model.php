<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function allRegistration(){

		// member.member_name, member.member_email, school.school_desc
		// LEFT JOIN member ON member.member_id=register.member_id
		// LEFT JOIN school ON school.school_id=register.school_id

		$this->db->select("member.member_name, member.member_email, school.school_desc");
		$this->db->from("register");
		$this->db->join("member","member.member_id=register.member_id", "LEFT");
		$this->db->join("school","school.school_id=register.school_id","LEFT");
		$query = $this->db->get();

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