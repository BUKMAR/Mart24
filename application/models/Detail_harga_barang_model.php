<?php
	class Detail_Harga_Barang_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert($data);
		}

	}
?>