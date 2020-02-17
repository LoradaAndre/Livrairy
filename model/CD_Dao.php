<?php

require_once("model/BDD.php");

class CD_Dao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		return $this->bdd->query("SELECT * FROM CD_TEST;")->fetchAll();
	}

	function getById($id) {
		return $this->$bdd->query("SELECT * FROM CD_TEST WHERE ID = " . $id . ";")->fetchAll();
	}
}
