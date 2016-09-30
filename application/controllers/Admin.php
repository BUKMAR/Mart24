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

			$this->data['kategori'] = array();

			$this->load->view("admin_handle/data_barang_view", $this->data);
		}

		public function list_data_barang() {
			$this->load->model("Barang_model");

			$barang_model = new Barang_Model();

			$jumlah_total_barang = $barang_model->count_all();
			$this->data['jumlah_total_barang'] = $jumlah_total_barang;
			$this->data['barang'] = $barang_model->fetch_all();

			$this->load->view("admin_handle/list_data_barang_view", $this->data);
		}

		public function data_transaksi() {
			$this->load->view("admin_handle/data_transaksi_view");
		}

		public function list_barang() {
			$this->load->view("admin_handle/list_data_barang_view");
		}

		public function kategori_barang() {
			$this->load->view("admin_handle/kategori_barang_view");
		}

		public function nota()
		{
			$this->load->view("admin_handle/nota_view");
		}

		public function stok_barang() {
			$this->load->view("admin_handle/stok_barang_view");
		}

		public function profil_admin() {
			$this->load->view("admin_handle/profil_view");
		}

		public function submit_tambah_barang() {
			$nama_paket = $this->input->post("nama-paket");
			$keterangan = $this->input->post("keterangan");
			$stok_barang = $this->input->post("stok-barang");
			$harga_beli = $this->input->post("harga-beli");
			$harga_jual = $this->input->post("harga-jual");

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
				$date = date('Y-m-d');

				$data_barang = array(
					"nama_paket" => $nama_paket,
					"keterangan" => $keterangan,
					"tgl_upload" => $date,
					"foto" => $file_name,
					"harga_beli" => $harga_beli,
					"harga_jual" => $harga_jual,
					"stok" => $stok_barang
				);

				$this->load->model("Barang_Model");

				$barang_model = new Barang_Model();

				$id_barang = $barang_model->insert($data_barang);

				redirect(site_url() ."admin/list_data_barang");
			}
		}

		public function submit_edit_barang(){
			$id_barang = $this->input->post("id-barang");
			$nama_paket = $this->input->post("nama-paket");
			$keterangan = $this->input->post("keterangan");
			$stok_barang = $this->input->post("stok-barang");
			$harga_beli = $this->input->post("harga-beli");
			$harga_jual = $this->input->post("harga-jual");

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
				$date = date('Y-m-d');

				$data_barang = array(
					"nama_paket" => $nama_paket,
					"keterangan" => $keterangan,
					"tgl_upload" => $date,
					"foto" => $file_name,
					"harga_beli" => $harga_beli,
					"harga_jual" => $harga_jual,
					"stok" => $stok_barang
				);

				$this->load->model("Barang_Model");

				$barang_model = new Barang_Model();

				$id_barang = $barang_model->update($id_barang, $data_barang);

				redirect(site_url() ."/admin/list_data_barang");
			}
 		}

		public function ajax_list_barang() {
			$this->load->model("Barang_model");

			$barang_model = new Barang_Model();

			$list = $barang_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];

	        //i berfungsi untuk id modal untuk data target
	        $i = 0;
	        foreach ($list as $barang) {
	            $no++;
	            $row = array();

	            $date_formated = date_format(date_create($barang->tgl_upload), "d-m-Y");
	            $harga_jual = "Rp. ". number_format($barang->harga_jual, 0, ".", ".");
	            $harga_beli = "Rp. ". number_format($barang->harga_beli, 0, ".", ".");

	            $row[] = $no;
	            $row[] = $barang->id_barang;
	            $row[] = $barang->nama_paket;
	            $row[] = $date_formated;
	            $row[] = $harga_jual;
	            $row[] = $harga_beli;
	           	$row[] = "<img style='
	            			height: 58px;
	            			width: 75px;
	            			padding: 5px 5px 5px 5px;
	            			border: 1px solid #dedede;
	            			border-radius: 3px 3px 3px 3px;' src='". base_url($barang->foto) ."' />";
	             $row[] = "<button class='btn btn-sm btn-info' data-toggle='modal' data-target='#id-$i'>
 						   <span class='glyphicon glyphicon-pencil'></span>
	             		   </button>

	             		   <button class='btn btn-sm btn-danger brg-delete'
	             		   data-brg-id='". $barang->id_barang ."'
	             		   data-brg-nama-paket='". $barang->nama_paket ."'>
	             		   <span class='glyphicon glyphicon-trash'></span></button>

	             		   <button class='btn btn-sm btn-success'>
						   <span class='glyphicon glyphicon-zoom-in'></span>
	             		   </button>";

	            $data[] = $row;
	            $i++;
	        }

	        $output = array(
	        	"draw" => $_POST['draw'],
	            "recordsTotal" => $barang_model->count_all(),
	            "recordsFiltered" => $barang_model->count_filtered(),
	            "data" => $data,
	        );

	        //output to json format
	        echo json_encode($output);
		}

		public function ajax_delete() {
			$this->load->model("Barang_model");

			$barang_model = new Barang_Model();

			$barang_model->delete($this->input->post("id"));

			echo json_encode(array("sukses"));
		}

	}
?>
