<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Search extends CI_Controller
{
	
	public function __construct(){

		parent::__construct();

		$this->load->model("member_model");
		$this->load->model("school_model");
		$this->load->model("search_model");
		$this->load->helper("url");

	}

	public function index(){

		$idsekolah = $this->input->post("slxSchoolSearch");

		// die($idsekolah);
		// echo $idsekolah;

		$data["senarai_sekolah"] = $this->school_model->allSchool();

		$data["senarai_member"] = $this->search_model->member_information($idsekolah);

		$this->load->view("header");
		$this->load->view("search_school", $data);
		$this->load->view("footer");

	}
}