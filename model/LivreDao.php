<?php

require_once("model/BDD.php");

class LivreDao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		return $this->bdd->query("SELECT * FROM LIVRE_TEST;")->fetchAll();
	}

	function getById($id) {
		return $this->bdd->query("SELECT * FROM LIVRE_TEST WHERE ID = " . $id . ";")->fetch();
	}

	function getByName($name) {
		return $this->bdd->query("SELECT * FROM LIVRE_TEST WHERE TITRE_LIVRE = '" . $name . "';")->fetch();
	}

	// function get5Last(){
	// 	return $this->$bdd->query("SELECT * FROM LIVRE WHERE ID = " . $id . ";")->fetchAll(); // la modif, elle est pas bonne
	// }
}
