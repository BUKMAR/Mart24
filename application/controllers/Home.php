<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model("Barang_model");

		$barang_model = new Barang_Model();

		$this->data['barang'] = $barang_model->fetch_all();

		$this->load->view('home_view', $this->data);
	}

	public function login() {
		$this->load->view('login_view');
	}

	public function register() {
		$this->load->view('register_view');
	}

	public function submit_data_member() {
		$date_time = new DateTime();

		$date_time->setTimeZone(new DateTimeZone('Asia/Jakarta'));
		$tgl_sekarang = date("Ymd");

		$id_member = "M-". $tgl_sekarang ."-". $date_time->getTimestamp();
		$nama_depan = $this->input->post("nama-depan");
		$nama_belakang = $this->input->post("nama-belakang");
		$username = $this->input->post("username");
		$password = md5($this->input->post("password"));
		$jenis_kelamin = $this->input->post("jenis-kelamin");
		$telp = $this->input->post("telp");
		$alamat1 = $this->input->post("alamat1");
		$alamat2 = $this->input->post("alamat2");

		$this->load->model("Member_model");

		$member_model = new Member_Model();

		$member_data = array(
			"id_member" => $id_member,
			"nama_depan" => $nama_depan,
			"nama_belakang" => $nama_belakang,
			"username" => $username,
			"password" => $password,
			"jenis_kelamin" => $jenis_kelamin,
			"telp" => $telp,
			"alamat1" => $alamat1,
			"alamat2" => $alamat2
		);

		$member_model = $member_model->insert($member_data);

		if($member_model) {
			$this->data["status_insert_member"] = true;

			$this->load->view("home_view", $this->data);
		} else {
			$this->data["status_insert_member"] = false;

			$this->load->view("home_view", $this->data);
		}
	}

	public function pesan_barang() {
		$this->load->view('register_view');
	}

}
