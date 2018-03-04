<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('login_m');
	}

	public function index() {
		$this->load->view('login_v');
	}

	/**
	 * check username and password
	 */
	public function check_login() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$is_valid = $this->login_m->check_login($username, $password);

		/* if valid username and password */
		if($is_valid) {
			$get_id = $this->login_m->get_id($username, $password);
			foreach ($get_id as $value) {
				$id = $value->id;
				$username = $value->username;
				$password = $value->password;
				$level = $value->level;

				if ($level == 'admin') {
					$data = array(
						'admin_name' => $username,
						'admin_password' => $password,
						'admin_level' => $level,
						'is_logged_in' => true
						);

					/* setting admin data in session */
					$this->session->set_userdata($data);
					redirect('admin');
				}

				if ($level == 'staff') {
					$data = array(
						'staff_name' => $username,
						'staff_password' => $password,
						'staff_level' => $level,
						'staff_id' => $id,
						'is_logged_in' => true
						);

					/* setting staff data in session */
					$this->session->set_userdata($data);
					redirect('staff');
				}
			}
		} else {
			$this->session->set_flashdata('msg', 'Username or Password is wrong!');
			redirect('login');
		}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

}