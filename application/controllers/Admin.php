<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		echo "<h2>Welcome to Admin dashboard</h2>";
		echo "<a href='login/logout'>Logout</a>";
	}

}