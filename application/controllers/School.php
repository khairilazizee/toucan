<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model("member_model");
		$this->load->model("school_model");
		$this->load->helper("url");

	}

	public function index(){

		$data["maklumat_sekolah"] = $this->school_model->allSchool();

		$this->load->view("header");
		$this->load->view("school_main",$data);
		$this->load->view("footer");

	}

	public function new_school(){

		$this->load->view("header");
		$this->load->view("school_view");
		$this->load->view("footer");

		$query = $this->school_model->add_new_school();

		if($query==1){
			redirect("school");
		}

	}

	public function view_school($idschool){

		$data["maklumat_sekolah"] = $this->school_model->maklumat_sekolah($idschool);

		$this->load->view("header");
		$this->load->view("school_view", $data);
		$this->load->view("footer");

	}

	public function update_school(){

		$query = $this->school_model->process_update_school();

		if($query==1){
			redirect("school");
		}

	}

	public function delete_school($idschool){

		$query = $this->school_model->process_delete_school($idschool);

		if($query==1){
			redirect("school");
		}

	}

	public function view_member($idschool){

		$data["maklumat_sekolah"] = $this->school_model->maklumat_sekolah($idschool);
		$data["maklumat_member"] = $this->school_model->maklumat_member($idschool);

		$this->load->view("header");
		$this->load->view("school_member_view", $data);
		$this->load->view("footer");

	}

	

}