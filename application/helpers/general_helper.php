<?php

function getdesc($table,$view,$field,$item){

	$ci =& get_instance();
	$ci->load->database();	

	$sql = "SELECT $view FROM $table WHERE $field='{$item}'";
	$query = $ci->db->query($sql);
	foreach($query->result() as $row){
		return $row->$view;
	}


}


function count_member($idschool){

	$ci =& get_instance();
	$ci->load->database();

	$sql = "SELECT COUNT(*) as member FROM register WHERE school_id='{$idschool}'";
	$query = $ci->db->query($sql);
	
	foreach($query->result() as $row){
		return $row->member;
	}

}