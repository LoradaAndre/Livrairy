<?php

abstract class BDD {

	function __construct() {
		try {
			$dbname = "articles";
			$login = "root";
			$password = "";

			$this->bdd = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', $login, $password);
		} catch (Exception $e) {
		        die('Erreur : ' . $e->getMessage());
		}
	}

	abstract function getAll();

	abstract function getById($id);
}
