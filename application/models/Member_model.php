<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function maklumat_member(){

		$this->db->group_by("member_name");
		$query = $this->db->get("member");

		return $query->result();


	}

	public function process_add_member(){

		$name = $this->input->post("inpName");
		$email = $this->input->post("inpEmail");

		$data = array(
			"member_name" => $name,
			"member_email" => $email,
		);

		$query = $this->db->insert("member", $data);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function member_information($idmember){

		$this->db->where("member_id",$idmember);
		$query = $this->db->get("member");

		return $query->result();

	}

	public function process_update_member($idmember){

		$name = $this->input->post("inpName");
		$email = $this->input->post("inpEmail");

		$data = array(
			"member_name" => $name,
			"member_email" => $email
		);

		$this->db->where("member_id", $idmember);
		$query = $this->db->update("member", $data);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_delete_member($idmember){

		$query = $this->db->delete("member", array("member_id"=>$idmember));
		
		if($query){
			return 1;
		} else {
			return 0;
		}
	}

}