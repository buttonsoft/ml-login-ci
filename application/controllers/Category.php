<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Author : Kang Disman
 * Email  : kang.disman@gmail.com
 * Blog   : http://dismaninfo.wordpress.com/
 */

class Category extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('category_m');
	}

	public function index() {
		$data['category'] = $this->category_m->get_all_category();
		$data['title'] = "Category";
		$data['content'] = "category_v";
		$this->load->view('template/backend', $data);
	}

	public function category_add() {
		$data = array('category_name' => $this->input->post('category_name'), );
		$insert = $this->category_m->category_add($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($id) {
		$data = $this->category_m->get_by_id($id);
		echo json_encode($data);
	}

	public function category_update() {
		$data = array('category_name' => $this->input->post('category_name'), );
		$this->category_m->category_update(array('category_id' => $this->input->post('category_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function category_delete($id) {
		$this->category_m->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}