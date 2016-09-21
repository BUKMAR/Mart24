<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->load->view("admin_handle/dashboard_view");
		}

		public function form_tambah_barang() {
			$this->load->model("Kategori_model");

			$kategori_model = new Kategori_Model();

			$kategori = $kategori_model->fetch_all();

			$this->data['kategori'] = $kategori;

			$this->load->view("admin_handle/data_barang_view", $this->data);
		}

		public function data_transaksi() {
			$this->load->view("admin_handle/data_transaksi_view");
		}

		public function kategori_barang() {
			$this->load->view("admin_handle/kategori_barang_view");
		}

		public function stok_barang() {
			$this->load->view("admin_handle/stok_barang_view");
		}

		public function profil_admin() {
			$this->load->view("admin_handle/profil_view");
		}

		public function submit_tambah_barang() {
			$nama_barang = $this->input->post("nama-barang");
			$id_kategori = $this->input->post("id-kategori");
			$deskripsi = $this->input->post("deskripsi");
			$stok_barang = $this->input->post("stok-barang");
			$satuan_stok = $this->input->post("satuan-stok");
			$id_kategori = $this->input->post("id-kategori");
			$harga_beli = $this->input->post("harga-beli");
			$harga_jual = $this->input->post("harga-jual");
			$satuan_barang = $this->input->post("satuan-barang");

			$path = realpath(APPPATH . '../assets/uploads');

			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
			$config['max_size'] = 1000;
			$config['max_width'] = 1024;
			$config['max_height'] = 1024;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto-barang')) {
				$error = array('error' => $this->upload->display_errors());

				print_r($error);
			}
			else {
				$upload_data = $this->upload->data();

				$file_name = 'assets/uploads/'. $upload_data['file_name'];

				$data_barang = array(
					"nama_barang" => $nama_barang,
					"id_kategori" => $id_kategori,
					"deskripsi" => $deskripsi,
					"foto_barang" => $file_name
				);

				$this->load->model("Barang_Model");

				$barang_model = new Barang_Model();

				$id_barang = $barang_model->insert($data_barang);

				$data_detail_harga_barang = array(
					"id_barang" => $id_barang,
					"harga_beli" => $harga_beli,
					"harga_jual" => $harga_jual,
					"satuan" => $satuan_barang
				);

				$this->load->model("Detail_Harga_Barang_Model");

				$detail_harga_barang_model = new Detail_Harga_Barang_Model();

				$detail_harga_barang_model->insert($data_detail_harga_barang);

				$data_stok = array(
					"id_barang" => $id_barang,
					"satuan" => $satuan_stok,
					"stok" => $satuan_barang
				);

				$this->load->model("Stok_Model");

				$stok = new Stok_Model();

				$stok->insert($data_stok);

				redirect(site_url());
			}
		}

	}
?>
