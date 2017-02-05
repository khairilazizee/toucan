<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("register_model");
		$this->load->model("school_model");
		$this->load->model("member_model");
		$this->load->helper("url");

	}

	public function index(){
		
		$data["registration_list"] = $this->register_model->allRegistration();

		$this->load->view("header");
		$this->load->view("register_main", $data);
		$this->load->view("footer");

	}

	public function new_registration(){

		$data["member_list"] = $this->member_model->maklumat_member(); // member information
		$data["school_list"] = $this->school_model->allSchool();

		$this->load->view("header");
		$this->load->view("register_new", $data);
		$this->load->view("footer");
	}

	public function add_registration(){

		$query = $this->register_model->process_add_register();

		if($query==1){
			redirect("register");
		}

	}

}