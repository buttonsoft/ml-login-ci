<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index() {
		echo "<h2>Welcome to Staff dashboard</h2>";
		echo "<a href='login/logout'>Logout</a>";
	}

}