<?php
	class Kategori_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function fetch_all() {
			$this->db->select("*");
			$this->db->from("kategori");
			$query = $this->db->get();

			return $query->result_array();
		}

	}
?>