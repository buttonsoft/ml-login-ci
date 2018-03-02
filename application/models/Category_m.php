<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Author : Kang Disman
 * Email  : kang.disman@gmail.com
 * Blog   : http://dismaninfo.wordpress.com/
 */

class Category_m extends CI_Model {

	public $table = 'category';
	public $primary = 'category_id';

	public function get_all_category() {
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_by_id($id) {
		$this->db->from($this->table);
		$this->db->where($this->primary, $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function category_add($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function category_update($were, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id) {
		$this->db->where($this->primary, $id);
		$this->db->delete($this->table);
	}

}