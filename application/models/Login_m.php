<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public $table = 'users';
	public $primary = 'id';

	/* check login */
	public function check_login($username, $password) {
		// $this->db->where('status', "active");
		$this->db->where('password', $password);
		$this->db->where('username', $username);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	/* get session value */
	public function get_id($username, $password) {
		$this->db->where('password', $password);
		$this->db->where('username', $username);
		return $this->db->get($this->table)->result();
	}

}