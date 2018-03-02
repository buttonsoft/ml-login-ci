<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Author : Kang Disman
 * Email  : kang.disman@gmail.com
 * Blog   : http://dismaninfo.wordpress.com/
 */

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = "My Dashboard";
		$data['content'] = "dashboard_v";
		$this->load->view('template/backend', $data);
	}
}
