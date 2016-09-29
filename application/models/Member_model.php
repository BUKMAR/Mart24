<?php
	class Member_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert("member", $data);

			$insert_id = $this->db->insert_id();

   			return  $insert_id;
		}

		public function delete($id) {
			$this->db->where("id_member", $id);
			$this->db->delete("member");
		}

		public function update($id, $data) {
			$this->db->where("id_member", $id);
			$this->db->update("member", $data);
		}
	 
 		public function fetch_all() {
 			$this->db->select("*");
 			$this->db->from("member");
 			$query = $this->db->get();

 			return $query->result_array();
 		}

 		public function login($username, $password) {
 			$this->db->select("*");
 			$this->db->from("member");
 			$this->db->where("`username`='". $username ."' AND `password`='". $password."'");
 			$query = $this->db->get();

 			$rows = $query->result_array();

 			return $rows;
 		}

	}
?>