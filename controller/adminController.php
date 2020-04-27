<?php

require_once('databaseController.php');
require_once('../model/admin.php');
require_once('../utils.php');

class adminController {

	private $connection;
	private $admin;
	private $logged = false;

	public function __construct() {
		$this->connection = new database($_CONFIG['host'], $_CONFIG['name'], $_CONFIG['password'], $_CONFIG['db_name']);

		if ($this->connection) {
			return true;
		}

		return false;
	}

	public function initAdmin() {
		$query = $this->connection->executeQuery("SELECT * FROM \'admin\'");

		
		$this->admin = new admin($query[0], $query[1]);
	}

	public function login($name, $password) {
		if ($name == $this->admin->getAdminName() && $password == $this->admin->getAdminPassword()) {
			$this->logged = true;
		}
	}

	public function logout() {
		$this->logged = false;
	}

	public function changeName() {

	}

	public function changePassword() {

	}

}

?>