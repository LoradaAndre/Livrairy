<?php

require_once("model/BDD.php");

class DVD_Dao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		return $this->bdd->query("SELECT * FROM DVD, REALISATEUR_DVD, FORMAT WHERE DVD.DVD_ID_REALISATEUR = REALISATEUR_DVD.READVD_ID AND DVD.DVD_ID_FORMAT = FORMAT.FOR_ID ;")->fetchAll();
	}

	function getById($id) {
		return $this->$bdd->query("SELECT * FROM DVD WHERE ID = " . $id . ";")->fetchAll();
	}

	function getByName($name) {
		return $this->bdd->query("SELECT * FROM DVD, REALISATEUR_DVD, FORMAT WHERE DVD.DVD_ID_REALISATEUR = REALISATEUR_DVD.READVD_ID AND DVD.DVD_ID_FORMAT = FORMAT.FOR_ID AND DVD.DVD_TITRE LIKE '%" . $name . "%';")->fetchAll();
	}

	function getByAuteur($realisateur) {
		return $this->bdd->query("SELECT * FROM DVD, REALISATEUR_DVD, FORMAT WHERE DVD.DVD_ID_REALISATEUR = REALISATEUR_DVD.READVD_ID AND DVD.DVD_ID_FORMAT = FORMAT.FOR_ID AND (REALISATEUR_DVD.READVD_NOM LIKE '%" . $realisateur . "%' OR REALISATEUR_DVD.READVD_PRENOM LIKE '%" . $realisateur . "%');")->fetchAll();
	}

	function getAlerteOrangeDvd(){
		return $this->bdd->query("SELECT * FROM DVD WHERE DVD.DVD_QUANTITE <50 AND DVD.DVD_QUANTITE > 10;")->fetchAll();
	}

	function getAlerteRougeDvd(){
		return $this->bdd->query("SELECT * FROM DVD WHERE DVD.DVD_QUANTITE < 10 AND DVD.DVD_QUANTITE > 0;")->fetchAll();
	}

	function getRuptureDeStockDvd(){
		return $this->bdd->query("SELECT * FROM DVD WHERE DVD.DVD_QUANTITE <= 0")->fetchAll();
	}

	function get5LastDvd(){
		return $this->bdd->query("SELECT * FROM DVD, REALISATEUR_DVD, FORMAT WHERE DVD.DVD_ID_REALISATEUR = REALISATEUR_DVD.READVD_ID AND DVD.DVD_ID_FORMAT = FORMAT.FOR_ID ORDER BY DVD.DVD_DATE_PARUTION DESC LIMIT 5;")->fetchAll();
	}
}
