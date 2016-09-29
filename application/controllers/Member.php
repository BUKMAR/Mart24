<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function login() {
			$this->load->model("Member_model");

			$member_model = new Member_Model();

			$member = $member_model->login(
				$this->input->post("username"),
				$this->input->post("password")
			);

			$this->session->set_userdata($member);
			redirect(site_url()); 
		}

	}
?>
