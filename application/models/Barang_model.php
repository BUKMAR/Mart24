<?php
	class Barang_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert("barang", $data);

			$insert_id = $this->db->insert_id();

   			return  $insert_id;
		}

	}
?>