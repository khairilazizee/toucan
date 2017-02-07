<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School_model extends CI_Model {

	public function allSchool(){

		$query = $this->db->get("school");

		return $query->result();

	}


	public function add_new_school(){

		$schoolName = $this->input->post("inpSchoolName");


		if($schoolName<>NULL){
			$query = $this->db->insert("school", array("school_desc"=>$schoolName));

			if($query){
				return 1;
			} else {
				return 0;
			}
		}

	}

	public function maklumat_sekolah($idschool){ // school information

		$this->db->where("school_id", $idschool);
		$query = $this->db->get("school");

		return $query->result();

	}

	public function process_update_school(){

		$schoolName = $this->input->post("inpSchoolName");
		$schoolID = $this->input->post("hdnSchoolID");

		$this->db->where("school_id", $schoolID);
		$query = $this->db->update("school", array("school_desc"=>$schoolName));

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_delete_school($idschool){

		$query = $this->db->delete("school", array("school_id"=>$idschool));

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function maklumat_member($idschool){ // school's member information

		$this->db->select("member.member_name, member.member_email");
		$this->db->from("register");
		$this->db->join("member", "member.member_id=register.member_id","LEFT");
		$this->db->where("school_id", $idschool);
		$query = $this->db->get();

		return $query->result();

	}

}