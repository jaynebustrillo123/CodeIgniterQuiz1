<?php

class Mdl_contacts extends CI_MODEL{

function addnewcontact ($data){


	$this->db->insert('tblcontacts',$data);
}

function getallcontacts(){

	$q = $this->db->get('tblcontacts');
	return $q->result();
}



}