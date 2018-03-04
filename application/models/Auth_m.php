<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

	public function authtentication($data) {
		$query = $this->db->get_where('login_session', $data);
		return $query;
	}

}