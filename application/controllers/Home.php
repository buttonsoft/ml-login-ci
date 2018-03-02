<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Author : Kang Disman
 * Email  : kang.disman@gmail.com
 * Blog   : http://dismaninfo.wordpress.com/
 */

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = "Welcome to My Blog";
		$data['content'] = "home_v";
		$this->load->view('template/frontend', $data);
	}

}