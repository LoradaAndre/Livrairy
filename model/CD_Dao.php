<?php

require_once("model/BDD.php");

class CD_Dao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll(){
		return $this->bdd->query("SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID ;")->fetchAll();
	}

	function getById($id){
		$req = $this->bdd->query("SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID AND CD.CD_ID = ? ;");
		$req->execute(array($id));
		return $req->fetch();
	}

	function getByName($name){
		$req =  "SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID AND CD.CD_TITRE LIKE :name ;";
		$requete = $this->bdd->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$requete->execute(array(':name' => "%" . $name . "%"));
		return $requete->fetchAll();
		//$req->execute(array($name));
		//return $req->fetchAll();
	}

	function getByAuteur($auteur){
		$req = "SELECT * FROM CD, AUTEUR_CD, GENRE_MUSICAL WHERE CD.CD_ID_AUTEUR = AUTEUR_CD.AUTCD_ID AND CD.CD_ID_GENRE_MUS = GENRE_MUSICAL.GENMUS_ID AND (AUTEUR_CD.AUTCD_NOM LIKE :auteur OR AUTEUR_CD.AUTCD_PRENOM LIKE :auteur );";
		$requete = $this->bdd->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$requete->execute(array(':auteur' => "%" . $auteur . "%",':auteur' => "%" . $auteur . "%"));
		return $requete->fetchAll();
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
