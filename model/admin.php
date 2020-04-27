<?php

class Admin {

	private $adminName;
	private $adminPassword;

	public function __construct($adminName, $adminPassword) {
		$this->adminName     = $adminName;
		$this->adminPassword = $adminPassword;
	}

	public function getAdminName() {
		return $this->adminName;
	}

	public function getAdminPassword() {
		return $this->adminPassword;
	}

	public function setAdminName($newName) {
		$this->adminName = $newName;
	}

	public function setAdminPassword($newPassword) {
		$this->adminPassword = $newPassword;
	}
	
}

?>