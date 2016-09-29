<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Member extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function login() {
			$this->load->model("Member_model");

			$member_model = new Member_Model();

			$member = $member_model->login(
				$this->input->post("username"),
				md5($this->input->post("password"))
			);

			if(count($member) > 0) {
				$item = $member[0];

				$this->session->set_userdata(array(
					"nama_depan" => $item['nama_depan'],
					"username" => $item['username']
				));
				
				redirect(site_url());
			}
		}

	}
?>
