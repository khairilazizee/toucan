<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {


	public function __construct(){

		parent::__construct();

		$this->load->model("member_model");
		$this->load->model("school_model");
		$this->load->helper("url");

	}

	public function index(){

		// $this->load->model("member_model");

		$data["member_list"] = $this->member_model->maklumat_member();

		$this->load->view("header");
		$this->load->view("member_main", $data);
		$this->load->view("footer");
	}

	public function new_member(){

		$data["senarai_sekolah"] = $this->school_model->allSchool();

		$this->load->view("header");
		$this->load->view("member_view",$data);
		$this->load->view("footer");

	}

	public function add_member(){

		$query = $this->member_model->process_add_member();

		if($query==1){
			redirect("member");
		}

	}

	public function view_member($idmember){

		$data["member_information"] = $this->member_model->member_information($idmember);
		$data["senarai_sekolah"] = $this->school_model->allSchool();

		$this->load->view("header");
		$this->load->view("edit_member",$data);
		$this->load->view("footer");

	}

	public function update_member($idmember){

		$query = $this->member_model->process_update_member($idmember);

		if($query==1){
			redirect("member");
		}

	}

	public function delete_member($idmember){

		$query = $this->member_model->process_delete_member($idmember);
		
		if($query==1){
			redirect("member");
		}
	}

}