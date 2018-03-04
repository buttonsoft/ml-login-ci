<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('auth_m');
	}

	public function index() {
		$this->load->view('auth_v');
	}

	public function authtentication() {
		$data = array(
			'username' => $this->input->post('username', true),
			'password' => md5($this->input->post('password', true))
			);
		$login = $this->auth_m->authtentication($data);
		if($login->num_rows() == 1) {
			foreach ($login->result() as $sess) {
				$sess_data['logged_in'] = 'Login';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}

			if ($this->session->userdata('level') == 'admin') {
				redirect('home');
			} else if($this->session->userdata('level') == 'member') {
				redirect('member');
			}
		} else {
			echo "<script>alert('Login failed, check username and password!');history.go(-1);</script>";
		}
	}

}