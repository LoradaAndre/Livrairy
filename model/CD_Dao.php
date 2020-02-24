<?php

require_once("model/BDD.php");

class CD_Dao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		return $this->bdd->query("SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID ;")->fetchAll();
	}

	function getById($id) {
		return $this->$bdd->query("SELECT * FROM CD WHERE ID = " . $id . ";")->fetchAll();
	}

	function getByName($name) {
		return $this->bdd->query("SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID AND CD.CD_TITRE LIKE '%" . $name . "%';")->fetchAll();
	}

	function getByAuteur($auteur) {
		return $this->bdd->query("SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID AND (AUTEUR_CD.AUTCD_NOM LIKE '%" . $auteur . "%' OR AUTEUR_CD.AUTCD_PRENOM LIKE '%" . $auteur . "%');")->fetchAll();
	}

	function getAlerteOrangeCd(){
		return $this->bdd->query("SELECT * FROM CD WHERE CD.CD_QUANTITE <50 AND CD.CD_QUANTITE > 10;")->fetchAll();
	}

	function getAlerteRougeCd(){
		return $this->bdd->query("SELECT * FROM CD WHERE CD.CD_QUANTITE < 10 AND CD.CD_QUANTITE > 0 ;")->fetchAll();
	}

	function getRuptureDeStockCd(){
		return $this->bdd->query("SELECT * FROM CD WHERE CD.CD_QUANTITE <= 0")->fetchAll();
	}

	function get5LastCd(){
		return $this->bdd->query("SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID ORDER BY CD.CD_DATE_PARUTION DESC LIMIT 5;")->fetchAll();
	}
}
