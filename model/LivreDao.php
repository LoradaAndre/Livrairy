<?php

require_once("model/BDD.php");

class LivreDao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		return $this->bdd->query("SELECT * FROM LANGUE;")->fetchAll();
	}

	function getById($id) {
		return $this->$bdd->query("SELECT * FROM LANGUE WHERE ID = " . $id . ";")->fetchAll();
	}
}
