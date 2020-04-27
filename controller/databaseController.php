<?php

class database {

	private $host;
	private $name;
	private $password;
	private $db;
	private $connection;

	public function __construct($host, $name, $password, $db) {
		$this->host     = $host;
		$this->name     = $name;
		$this->password = $password;
		$this->db       = $db;

		$this->connect();
	}

	public function connect() {
		$this->connection = new mysqli($this->host, $this->name, $this->password, $this->db);

		if ($this->connection->connect_error) {
			return false;
		}

		return true;
	}

	public function filter($parameter) {
		return $this->connection->real_escape_string(htmlentities($parameter));
	}

	public function executeQuery($query) {
		return $this->connection->query($query);
	}

	public function close() {
		if ($this->connection != NULL) {
			$this->connection->close();
			$this->connection = NULL;
		}
	}

	public function __destruct() {
		$this->close();
	}

}

?>