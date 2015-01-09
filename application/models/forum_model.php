<?php
class Forum_model extends CI_Model {

 function validasi($username,$password){
 	$this->db->where("username",$username);
 	$this->db->where("password",md5($password));
 	$query = $this->db->get("gsjanggota")->row();
 	return $query;
 }

 function get_all_forum(){
 	$this->db->join("gsjanggota","gsjanggota.id_anggota=gsjforum.creator");
 	$query = $this->db->get("gsjforum")->result();
 	return $query;
 }

 function add_forum(){
 	$creator = $this->input->post("creator");
 	$topik = $this->input->post("topik");
 	$mine = $this->input->post("mine");

 	$data  = array(
 		'creator' => $creator,
 		'topik' => $topik,
 		'mine' => $mine, 
 		);

 	$query = $this->db->insert("gsjforum",$data);
 	return $query;
 }
 
}