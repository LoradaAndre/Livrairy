<?php

require_once("model/BDD.php");

class DVD_Dao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		return $this->bdd->query("SELECT * FROM DVD;")->fetchAll();
	}

	function getById($id) {
		return $this->$bdd->query("SELECT * FROM DVD WHERE ID = " . $id . ";")->fetchAll();
	}
}
